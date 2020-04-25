<?php

namespace App\Http\Controllers;

use App\chat;
use App\users;
use App\adoctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getDashboard($iddokter,$iduser)
    {
        $posts = Chat::where('id_user',$iduser)->where('id_dokter',$iddokter)->get();
        $doctor = Adoctor::all();
        return view('chat',compact('posts','doctor','iddokter'));
    }

    public function postSavedChat(Request $Request)
    {
        $this->validate($Request,
            [
                'message'=>'required|max:1000'
            ]);

        $datetime = date('Y-m-d H:i:s');
        $iduser=$Request['id_user'];
        $iddokter=$Request['id_dokter'];
        $chats = new Chat();
        $chats->message = $Request['message'];
        $chats->id_user = $Request['id_user'];
        $chats->id_dokter = $Request['id_dokter'];
        $chats->date = $datetime;
        $chats->save();
        // $pesan = "There was an error";
        // if($Request->Chat()->save($chats))
        // {
        //     $message = "Message send succesfully";
        // }
        return redirect('/dashboard/'.$iddokter.'/'.$iduser);
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
     * @param  \App\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show(chat $chat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(chat $chat)
    {
        //
    }
}
