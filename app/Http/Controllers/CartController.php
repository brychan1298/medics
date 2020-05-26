<?php

namespace App\Http\Controllers;

use App\cart;
use App\aproduk;
use App\acheck;
use App\acustomer;
use App\datatransaksi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function index2($id)
    {
        $cart = Cart::where('id_user',$id)->get();
        $d=0;
        foreach ($cart as $c) {
            $dd = ($c->tbproduk->harga) * ($c->jlh);            
            $d += $dd;
        }
        //return $d;
        return view('obat',compact('cart','d'));
    }

    public function index3($id)
    {
        $cart = Cart::where('id_user',$id)->get();
        $d=0;
        foreach ($cart as $c) {
            $dd = ($c->tbproduk->harga) * ($c->jlh);            
            $d += $dd;
        }
        //return $d;
        return view('checkout',compact('cart','d'));
    }

    public function index4($id)
    {
        $history = Acheck::where('id_user',$id)->get();
        return view('buyHis',compact('history'));
    }

    public function index5($id)
    {
        return view('proof',compact('id'));
    }

    public function update2(request $request,$id)
    {
        $history = Acheck::where('id_user',$id)->get();

        $trans = Acheck::find($id);
        $trans->img = $request->img;
        $trans->save();
        
        return redirect('/successbuy');
    }

    public function bayar(request $request,$iduser)
    {
        $cart = Cart::where('id_user',$iduser)->get();
        $d=0;
        foreach ($cart as $c) {
            $dd = ($c->tbproduk->harga) * ($c->jlh);            
            $d += $dd;
        }

        $pin = mt_rand(000000000000,999999999999);
        $random = str_shuffle($pin);

        $transaksi = new Acheck();
        $transaksi->id_user = $iduser;
        $transaksi->tanggal = date("Y-m-d");
        $transaksi->total = $d;
        $transaksi->img = "";
        $transaksi->status = "BELUM PROSES";
        $transaksi->destinationAcc = $random;
        $transaksi->save();

        $transaksiRow = Acheck::where('id_user',$iduser)->get();
        $id_transaksi = "";
        $destination = "";
        foreach ($transaksiRow as $t) {
            $id_transaksi = $t->id_transaksi;
            $destination = $t->destinationAcc;
        }
        
        $dataTran = new Datatransaksi();
        $dataTran->id_transaksi = $id_transaksi;
        $dataTran->city = $request->city;
        $dataTran->name = $request->name;
        $dataTran->email = $request->email;
        $dataTran->address = $request->address;
        $dataTran->notes = $request->notes;
        $dataTran->save();     

        foreach ($cart as $c) {
            $detilTran = new acustomer();
            $detilTran->id_transaksi = $id_transaksi;
            $detilTran->id_produk = $c->id_produk;
            $detilTran->jumlah = $c->jlh;
            $detilTran->save();
        }        

        $cartdel = Cart::where('id_user',$iduser)->delete();

        
        return view('send',compact('destination','id_transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = new Cart();
        $cart->id_user = $request->iduser;
        $cart->id_produk = $request->idproduk;
        $cart->jlh = 1;
        $cart->save();

        return redirect('/shop');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart $cart,$id,$iduser)
    {           
        $cart = Cart::whereId($id);
        $cart->delete();

        return redirect('/cart/' . $iduser);
    }
}
