<?php

namespace App\Http\Controllers;

use App\acheck;
use App\acheckdetil;
use App\users;
use App\datatransaksi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Acheck::with('tbuser')->paginate(4);
        // $transaksi = DB::table('tbtransaksi')
        // ->join('tbprofile','tbtransaksi.id_user','=','tbprofile.id_user')
        // ->select('tbprofile.nama','tbtransaksi.tanggal','tbtransaksi.img','tbtransaksi.total');
        // ->get();
        return view('admin.checkpayment',compact('transaksi'));
    }

    public function delTran($id)
    {
        $dataTran = datatransaksi::where('id_transaksi',$id);
        $dataTran->delete();
        $transaksi = Acheck::where('id_transaksi',$id);
        $transaksi->delete();

        $transaksi = Acheck::with('tbuser')->paginate(4);
        return redirect('/Acheck');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\acheck  $acheck
     * @return \Illuminate\Http\Response
     */
    public function show(acheck $acheck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\acheck  $acheck
     * @return \Illuminate\Http\Response
     */
    public function edit(acheck $acheck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\acheck  $acheck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, acheck $acheck, $id)
    {
        //$this->validate($request,['status'=>'required']);
        //$stat="PROSES";
        $Acheck = Acheck::find($id);
        $Acheck->status="PROSES";
        $Acheck->save();

        return redirect("/Acheck")->with('disableButton', true);            
    }

    public function batal($id)
    {
        $Acheck = Acheck::find($id);
        $Acheck->status="BELUM PROSES";
        $Acheck->save();

        return redirect("/Acheck")->with('disableButton',true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\acheck  $acheck
     * @return \Illuminate\Http\Response
     */
    public function destroy(acheck $acheck)
    {
        //
    }
}
