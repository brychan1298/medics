<?php

namespace App\Http\Controllers;

use App\Aqueue;
use App\Profile;
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
        return view('admin.adminpatient',compact('nama'));
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
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'appointment'=>'required',
            'disease'=>'required',
            'nohp'=>'required',
            'dokter'=>'required',
            'spesialist'=>'required'
        ]);
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
