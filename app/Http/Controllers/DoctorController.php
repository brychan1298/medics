<?php

namespace App\Http\Controllers;

use App\doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor=Doctor::paginate(4);
        return view('consult',compact('doctor'));
    }

    public function index2()
    {
        $doctor2=Doctor::paginate(6);
        return view('doctor',compact('doctor2'));
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $doctor = Doctor::where('nama','like',"%".$cari."%")->paginate(4);
        return view('consult',compact('doctor'));
    }

    public function cari2(Request $request)
    {
        $cari = $request->cari;
        $doctor2 = Doctor::where('nama','like',"%".$cari."%")->paginate(4);
        return view('doctor',compact('doctor2'));
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
     * @param  \App\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(doctor $doctor)
    {
        //
    }
}
