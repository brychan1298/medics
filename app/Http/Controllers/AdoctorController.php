<?php

namespace App\Http\Controllers;

use App\adoctor;
use Illuminate\Http\Request;

class AdoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adoctor = Adoctor::all();
        return view('admin.admindatadoctor',compact('adoctor'));
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
        $validasi=$request->validate(['nama'=>'required','spesialisasi'=>'required','nohp'=>'required','email'=>'required','alamat'=>'required','tgl_mulai_kerja'=>'required','kota'=>'required','gambar'=>'required']);
        $adoctor=Adoctor::create($validasi);
        return redirect('Adoctor');

        // $adoctor = new adoctor;
        // $adoctor->nama = $request->nama;
        // $adoctor->spesialisasi = $request->spesialisasi;
        // $adoctor->nohp = $request->nohp;
        // $adoctor->email = $request->email;
        // $adoctor->alamat = $request->alamat;
        // $adoctor->tgl_mulai_kerja = $request->tgl_mulai_kerja;
        // $adoctor->kota = $request->kota;
        // $adoctor->gambar = $request->gambar;
        // $adoctor->save();        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\adoctor  $adoctor
     * @return \Illuminate\Http\Response
     */
    public function show(adoctor $adoctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\adoctor  $adoctor
     * @return \Illuminate\Http\Response
     */
    public function edit(adoctor $adoctor,$id)
    {
        $doctor = Adoctor::findorFail($id);
        return view('admin.editdoctor',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\adoctor  $adoctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adoctor $adoctor)
    {
        $validasi=$request->validate(['nama'=>'required','spesialisasi'=>'required','nohp'=>'required','email'=>'required','alamat'=>'required','tgl_mulai_kerja'=>'required','kota'=>'required','gambar'=>'required']);
        
        Adoctor::whereId($request->id)->update($validasi);

        return redirect('/Adoctor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\adoctor  $adoctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(adoctor $adoctor,$id)
    {
        Adoctor::findorFail($id)->delete();

        return redirect('/Adoctor');
    }
}
