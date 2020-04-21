<?php

namespace App\Http\Controllers;

use App\hospital;
use App\dokterhospital;
use App\adoctor;
use App\Profile;
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

    public function index2($id)
    {   
        $chosedok = dokterhospital::where('id_hospital',$id)->get();
        $hospital = Hospital::findorFail($id);
        return view('choosedoctor',compact('chosedok','hospital','id'));
    }

    public function index3($id)
    {   
        $chosehos = dokterhospital::where('id_dokter',$id)->get();
        $docter = Adoctor::findorFail($id);
        return view('choosehospital',compact('chosehos','docter','id'));
    }    

    public function index4($iddokter,$idhospital)
    {           
        $chosehos = dokterhospital::where('id_dokter',$iddokter)->get();
        $docter = Adoctor::findorFail($iddokter);
        return view('patientdata',compact('iddokter','idhospital','docter'));
    }

    public function index5($iddokter,$idhospital,$iduser)
    {
        $chosehos = dokterhospital::where('id_dokter',$iddokter)->get();
        $docter = Adoctor::findorFail($iddokter);
        $profs = Profile::findorFail($iduser);
        return view('patientdata',compact('iddokter','idhospital','docter','profs'));
    }

    public function detaildoctor($id)
    {
        $chosehos = dokterhospital::where('id_dokter',$id)->get();
        $docter = Adoctor::findorFail($id);
        return view('detaildoctor',compact('id','docter','chosehos'));
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
