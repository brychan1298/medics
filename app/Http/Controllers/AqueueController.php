<?php

namespace App\Http\Controllers;

use App\Aqueue;
use App\Users;
use App\Ahospital;
use App\Adoctor;
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

    public function index2($id)
    {
        $data = DB::table('tbcheckup')->select('dokter')->groupBy('dokter')->get();
        $hos = Ahospital::where('id',$id)->first();
        $ss = Aqueue::all();
        //$s =$ss->id;
        $dataRow = count($data);
        $htmls = "<div style=font-size:200px;border:1 px solid>"."aa"."</div>";
        $html = "";
        for ($i=0; $i <$dataRow ; $i++) { 
            $dokter = $data[$i]->dokter;
            $gambar = Adoctor::where('nama',$dokter)->get();
            $gambars = "";
            foreach($gambar as $g){
                $gambars = $g->gambar;
            }
            $date = date('Y-m-d');
            $datas = Aqueue::where('dokter',$dokter)->where('date',$date)->get();  
            $patients = Aqueue::where('dokter',$dokter)->where('date',$date)->first();
            $items = '';
            foreach($datas as $d) {
                $item = "<tr style=border-radius: 0px 0px 15px 15px;>".
                    "<td>"."$d->id"."</td>".
                    "<td>"."$d->nama"."</td>".
                    "<td>"."$d->appointment"."</td>".
                "</tr>";
                $items .= $item;
            }
                
            if(count($datas)>0){            
            $html .= 
                "<div class=col-sm-4>".                   
                    "<label style='font-size:14px;margin-left:3px'>"."NUMBER"."</label>".
                        "<div style='border:1px solid grey;width:60px;height:60px;'>".
                            "<center>".
                                "<label style='font-size:35px;color:black;'>".$patients->id."</label>".
                            "</center>".
                        "</div>".
                        "<div style='font-size:25px;margin-left:70px;margin-top:-50px;''>".$patients->nama."</div>".
                    "<div>".
                        "<div style='border:1pxsolid#707070;border-radius:15px 15px 0px 0px;padding:15px; margin-top:35px;background-color:#1492E6;border:1px solid #1492E6;'>".
                            "<img src='../../gambar/$gambars' style='border-radius:50px;width:60px;height:60px;'>".
                            "<div style='color: white;font-size:26px;position:absolute;margin-left:80px; margin-top:-50px;font-family:'>".$dokter."</div>".
                        "</div>".
                        "<tbody style='border-radius:0px 0px 15px 15px;'>".
                            "<table class='table table-stripped' style='margin-top:-0px;border:1px solid grey;color: black;font-size: 18px;'>".
                                "<tr>".
                                    "<th>".
                                        "No".
                                    "</th>".
                                    "<th>".
                                        "Nama".
                                    "</th>".
                                    "<th>".
                                        "Time".
                                    "</th>".
                                "</tr>".

                                $items.
                            "</table>".
                        "</tbody>".
                    "</div>".
                "</div>";
            }
        }
        return view('tampilanRS',compact('html','hos'));
        //return $htmls;
    }

    public function index3($id)
    {
        $data = Aqueue::where('id_hospital',$id)->where('status','BELUM')->get();
        return $data;
    }

    public function indexHistory($id)
    {
        $list = Aqueue::where('id_user',$id)->get();
        $date = date('Y-m-d');

        return view('queueHis',compact('list','date'));
        //return $date;
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
        $aqueue->status="BELUM";
        $aqueue ->save();

        return redirect('/Aqueue');
    }

    public function insert(Request $request,$id)
    {
        // $validasi = $request->validate([
        //     'nama'=>'required',
        //     'appointment'=>'required',
        //     'disease'=>'required',
        //     'nohp'=>'required',
        //     'date'=>'required',
        //     'dokter'=>'required',
        //     'spesialist'=>'required'
        // ]);

        // $datess = $request->date;
        // $dokterss = $request->dokter;
        // $appointmentss = "";

        // $rows = Aqueue::where('date',$datess)->where('dokter',$dokterss)->count();

        // if ($rows>0) {
        //     $query = Aqueue::where('date',$datess)->where('dokter',$dokterss)->orderBy('id','DESC')->first();
        //     $appointmentss = $query->appointment;

        // }
        // else{
        //     $appointmentss = '08:00';
        // }

        $hours=date('H') + 2;
        $dd = date('H:i:s');

        $d = date('i');
        $c = $hours . ':' . $d;
        //return $c;

        $aqueue = new Aqueue;
        $aqueue->id_hospital = $request->id_hospital;
        $aqueue->nama = $request->nama;
        $aqueue->date = $request->date;
        $aqueue->appointment = $c;
        $aqueue->disease = $request->disease;
        $aqueue->nohp = $request->nohp;
        $aqueue->dokter = $request->dokter;
        $aqueue->spesialist = $request->spesialist;
        $aqueue->id_user = $id;
        $aqueue->status="BELUM";
        $aqueue->save();

        return redirect('/hospital');
        //return $appointmentss;
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
