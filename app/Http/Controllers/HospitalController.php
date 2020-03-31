<?php

namespace App\Http\Controllers;

use App\hospital;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals = Hospital::paginate(6);
        return view('hospital',compact('hospitals'));
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $hospitals = Hospital::where('nama','like',"%".$cari."%")->paginate(6);
        return view('hospital',compact('hospitals'));
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
     * @param  \App\hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit(hospital $hospital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hospital $hospital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(hospital $hospital)
    {
        //
    }
}