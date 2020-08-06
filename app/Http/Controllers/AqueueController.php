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

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $data = Aqueue::where('nama','like',"%".$cari."%")->paginate(4);        
        $date = date('Y-m-d');
        return view('admin.ourpatient',compact('data','date'));
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
            $datas=Aqueue::where('dokter',$dokter)->where('date',$date)->where('status','BELUM')->get();  
            $patients=Aqueue::where('dokter',$dokter)->where('date',$date)->where('status','BELUM')->first();
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

    public function index3($iddokter)
    {
        $dokters = Adoctor::whereId($iddokter)->first();
        $dokter = $dokters->nama;
        $date = date('Y-m-d');
        $datas=Aqueue::where('dokter',$dokter)->where('date',$date)->where('status','BELUM')->get();  
        $patients=Aqueue::where('dokter',$dokter)->where('date',$date)->where('status','BELUM')->first();

        if (count($datas)>0) {
            return view('aqueuedoctor',compact('patients','iddokter','dokters'));
        }else{
            return view('aqueuedoctor',compact('iddokter','dokters','patients'));
        }        
    }

    public function note(Request $Request,$idpatient,$iddokter)
    {
        $notes = Aqueue::find($idpatient);
        $notes->note = $Request->note;
        $notes->status = "SUDAH";
        $notes->save();

        return redirect('/aqueuedoctor/'.$iddokter);
    }

    public function indexHistory($id)
    {
        $list = Aqueue::where('id_user',$id)->get();
        $date = date('Y-m-d');

        return view('queueHis',compact('list','date'));
        //return $date;
    }

    public function showPatient()
    {
        $data = Aqueue::paginate(5);
        $date = date('Y-m-d');
        return view('admin.ourpatient',compact('data','date'));
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
        $dd = date('H:i:s');
        $dodo = date('Y-m-d');
        $hours = null;
        $datenow = $request->date;
        $patient = $request->nama;
        $ceknohp = $request->nohp;
        $cekadaPatient = Aqueue::where('date',$datenow)->where('nama',$patient)->where('nohp',$ceknohp)->get();
        
        if($dodo == $datenow)
        {
            $hours=date('H') + 1;
        }
        else{
            $hours='08';
        }
        $doctornow = $request->dokter;
        $iddokter = $request->iddokter;
        $id_hospital = $request->id_hospital;
        if(count($cekadaPatient)>0){
            return redirect('/booking/'.$iddokter.'/'.$id_hospital)->with('Errors','You have been queued in line and cannot queue on the same day anymore');
        }

        $d = date('00');    
        
        $c = $hours . ':' . $d;
        for($i=0; $i<5;$i--)
        {            
            $c = $hours . ':' . $d;
            $cek = Aqueue::where('date',$datenow)->where('appointment',$c)->where('dokter',$doctornow)->get();
            $c = $hours . ':' . $d;
            if ($hours>=24) {
                return redirect('/booking/'.$iddokter.'/'.$id_hospital)->with('Error','Full Queued at Date');
            }
            if (count($cek)==0) {
                break;
            }
            $hours++; 
        }

        $c = $hours . ':' . $d;

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

        $idhos = $request->id_hospital;
        $lastid = Aqueue::orderBy('id','DESC')->first();
        $lastids = $lastid->id;
        $lasttime = $lastid->appointment;
        $sqlhos = Ahospital::where('id',$idhos)->first();
        $hosname = $sqlhos->nama;

        return view('afterQueue',compact('hosname','datenow','lastids','lasttime'));
        //return $c;
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
