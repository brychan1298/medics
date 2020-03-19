<?php

namespace App\Http\Controllers;

use App\amedicine;
use Illuminate\Http\Request;

class AmedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amedicine = Amedicine::all();
        return view('admin.admindatamedicine',compact('amedicine'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $amedicine = Amedicine::where('nama','like',"%".$cari."%")->paginate();
        return view('admin.admindatamedicine',compact('amedicine'));

    }

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
        $validasi=$request->validate(['nama'=>'required','harga'=>'required','img'=>'required','kegunaan'=>'required','tgl_expired'=>'required','kategori'=>'required','jumlah_stok'=>'required']);
        $adoctor=Amedicine::create($validasi);

        return redirect('/Amedicine');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\amedicine  $amedicine
     * @return \Illuminate\Http\Response
     */
    public function show(amedicine $amedicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\amedicine  $amedicine
     * @return \Illuminate\Http\Response
     */
    public function edit(amedicine $amedicine,$id)
    {
        $medicine = Amedicine::findorFail($id);
        return view('admin.editmedicine',compact('medicine'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\amedicine  $amedicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, amedicine $amedicine)
    {
        $validasi=$request->validate(['nama'=>'required','harga'=>'required','img'=>'required','kegunaan'=>'required','tgl_expired'=>'required','kategori'=>'required','jumlah_stok'=>'required']);
        
        Amedicine::whereId($request->id)->update($validasi);

        return redirect('/Amedicine');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\amedicine  $amedicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(amedicine $amedicine)
    {
        //
    }
}
