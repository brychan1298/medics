<?php

namespace App\Http\Controllers;

use App\Aqueue;
use App\Users;
use App\Ahospital;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AqueueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nama = DB::table('tbdokter')->get();
        $aqueue = Aqueue::all();
        return view('admin.adminpatient',compact('nama','aqueue'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Users $users, Ahospital $ahospital)
    {
        $validasi = $request->validate([
            'nama'=>'required',
            'appointment'=>'required',
            'disease'=>'required',
            'nohp'=>'required',
            'date'=>'required',
            'dokter'=>'required',
            'spesialist'=>'required'
        ]);

        $aqueue = new Aqueue;
        // $aqueue->id_user = $users->id_user;
        $aqueue->id_hospital = 1;
        $aqueue ->appointment = $request->appointment;
        $aqueue ->nama = $request->nama;
        $aqueue ->date = $request->date;
        $aqueue ->disease = $request->disease;
        $aqueue ->nohp = $request->nohp;
        $aqueue ->dokter = $request->dokter;
        $aqueue ->spesialist = $request->spesialist;
        $aqueue ->save();

        return redirect('/Aqueue');
    }

    public function insert(Request $request)
    {
        $validasi = $request->validate([
            'nama'=>'required',
            'appointment'=>'required',
            'disease'=>'required',
            'nohp'=>'required',
            'date'=>'required',
            'dokter'=>'required',
            'spesialist'=>'required'
        ]);

        $hours=date('H') + 2;
        $dd = date('H:i:s');

        $d = date('i');
        $c = $hours . ':' . $d;
        //return $c;

        $aqueue = new Aqueue;
        $aqueue->id_hospital = $request->id_hospital;
        $aqueue ->nama = $request->nama;
        $aqueue ->date = $request->date;
        $aqueue ->appointment = $c;
        $aqueue ->disease = $request->disease;
        $aqueue ->nohp = $request->nohp;
        $aqueue ->dokter = $request->dokter;
        $aqueue ->spesialist = $request->spesialist;
        $aqueue ->save();

        return redirect('');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aqueue  $aqueue
     * @return \Illuminate\Http\Response
     */
    public function show(Aqueue $aqueue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aqueue  $aqueue
     * @return \Illuminate\Http\Response
     */
    public function edit(Aqueue $aqueue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aqueue  $aqueue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aqueue $aqueue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aqueue  $aqueue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aqueue $aqueue)
    {
        //
    }
}
