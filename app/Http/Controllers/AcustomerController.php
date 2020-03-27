<?php

namespace App\Http\Controllers;

use App\acustomer;
use App\acheck;
use App\aproduk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acustomer = Acheck::all();
        return view('admin.customer',compact('acustomer'));

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
     * @param  \App\acustomer  $acustomer
     * @return \Illuminate\Http\Response
     */
    public function show(acustomer $acustomer,Request $request)
    {
        //$acustomer = Acheck::all();
        //return view('admin.detailcustomer',compact('acustomer'));
        $tgl = $request->tanggal;
        $acustomer = Acheck::where('tanggal','=',$tgl)->get();
        return view('admin.customer',compact('acustomer'));
        //return $tgl;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\acustomer  $acustomer
     * @return \Illuminate\Http\Response
     */
    public function edit(acustomer $acustomer,$id)
    {
        $acustomers = Acustomer::where('id_transaksi',$id)->get();
        $acustomer = Acheck::findorFail($id);      
        return view('admin.detailcustomer',compact('acustomer','acustomers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\acustomer  $acustomer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, acustomer $acustomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\acustomer  $acustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(acustomer $acustomer)
    {
        //
    }
}
