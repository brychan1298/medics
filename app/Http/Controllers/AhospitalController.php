<?php

namespace App\Http\Controllers;

use App\ahospital;
use Illuminate\Http\Request;

class AhospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ahospital = Ahospital::paginate(5);
        return view('admin.admindatahospital',compact('ahospital'));
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $ahospital = ahospital::where('nama','like',"%".$cari."%")->paginate(5);
        return view('admin.admindatahospital',compact('ahospital'));

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
        $validasi=$request->validate(['nama'=>'required','provinsi'=>'required','nohp'=>'required','kota'=>'required','alamat'=>'required','img'=>'required']);
        $ahospital=Ahospital::create($validasi);
        return redirect('/Ahospital');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ahospital  $ahospital
     * @return \Illuminate\Http\Response
     */
    public function show(ahospital $ahospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ahospital  $ahospital
     * @return \Illuminate\Http\Response
     */
    public function edit(ahospital $ahospital,$id)
    {
        $ahospital = Ahospital::findorFail($id);
        return view('admin.edithospital',compact('ahospital'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ahospital  $ahospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ahospital $ahospital)
    {
        $validasi=$request->validate(['nama'=>'required','provinsi'=>'required','nohp'=>'required','kota'=>'required','alamat'=>'required','img'=>'required']);
        
        Ahospital::whereId($request->id)->update($validasi);

        return redirect('/Ahospital');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ahospital  $ahospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(ahospital $ahospital,$id)
    {
        Ahospital::findorFail($id)->delete();

        return redirect('/Ahospital');
    }
}
