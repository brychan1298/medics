<?php

namespace App\Http\Controllers;

use App\chat;
use App\users;
use App\adoctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

    public function getDashboardDoctor($iduser,$iddokter)
    {
        $posts = Chat::where('id_user',$iduser)->where('id_dokter',$iddokter)->get();
        $user = Users::where('id',$iduser)->first();

        return view('replydoctor',compact('posts','user','iddokter'));
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
        $chats->froms = 'user';
        $chats->save();
        // $pesan = "There was an error";
        // if($Request->Chat()->save($chats))
        // {
        //     $message = "Message send succesfully";
        // }
        return redirect('/dashboard/'.$iddokter.'/'.$iduser);
    }

    public function ShowChatDoctor($iddokter)
    {
        $dokters = Adoctor::whereId($iddokter)->first();
        $dokter = $dokters->nama;
        $data = DB::table('tbchat')
            ->where('id_dokter',$iddokter)
            ->select('id_user')
            ->groupBy('id_user')->get();

        $data = Chat::where('id_dokter',$iddokter)->select('id_user')->groupBy('id_user')->get();
        return view('chatdoctor',compact('data','iddokter','dokters'));
    }

    public function saveChatDoctor(Request $Request)
    {   
        $datetime = date('Y-m-d H:i:s');
        $iduser=$Request['id_user'];
        $iddokter=$Request['id_dokter'];
        $chat = new Chat();
        $chat->id_user = $Request->id_user;
        $chat->id_dokter = $Request->id_dokter;
        $chat->message = $Request->message;
        $chat->date = $datetime;
        $chat->froms = 'dokter';
        $chat->save();

        return redirect('/doctorDashboard/'.$iduser.'/'.$iddokter);
        //return 'aa';
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
