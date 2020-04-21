<?php

namespace App\Http\Controllers;

use App\profile;
use App\users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $profile = Profile::findorFail($id);
        return view('profile',compact('profile','id'));
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
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validasi=$request->validate(['nama'=>'required','tanggal_lahir'=>'required','alamat'=>'required','no_hp'=>'required']);

        $profs = Profile::find($id);
        $profs->nama = $request->nama;
        $profs->tanggal_lahir = $request->tanggal_lahir;
        $profs->alamat = $request->alamat;
        $profs->no_hp = $request->no_hp;
        $profs->save();

        $user = Users::find($id);
        $user->name = $request->nama;
        $user->save();

        return redirect('/');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(profile $profile)
    {
        //
    }
}
