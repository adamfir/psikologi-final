<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReadingPostestController extends Controller
{
    private $arrayKata;
    private $arrayPernyataan;
    private $seri;
    public function __construct()
    {
        $this->middleware('auth');
        $this->seri = [0,2,1,3,4]; //3,5,4,6,7
        $this->arrayKata = [
            [
                ['Batu','Busur','Cermin'],
                ['Motor','Mulut','Pagar']
            ],
            [
                ['Dompet','Filter','Gembok','Kamus'],
                ['Paku','Palu','Panda','Papan']
            ],
            [
                ['Kunci','Kulkas','Lulur','Pipa','Pistol'],
                ['Pasir','Payung','Pensil','Perut','Pintu']
            ],
            [
                ['Suling','Artis','Dapur','Ngarai','Bambu','Kakap'],
                ['Pipa','Pipi','Piring','Pulau','Rambut','Roda']
            ],
            [
                ['Pisang','Sirih','Lokal','Album','Benang','Debu','Gula'],
                ['Roti','Rusa','Sabuk','Sapi','Sapu','Semut','Sisir']
            ]
        ];
        $this->arrayPernyataan=[
            [['Panda hanya hidup di Indonesia', 'false'],['Katak selalu hidup di air','false']],  
            [['Singa jantan  memiliki surai', 'true'],['Mendung tidak selalu hujan','true']],
            [['Simpanse berlengan panjang', 'true'],['Angin adalah udara yang tertahan','false']],
            [['Semua sayuran berwarna hijau', 'false'],['Air danau tidak selalu tawar','false']],
            [['Kelinci dapat terbang tinggi', 'false'],['Nil  danau terbesar di dunia','false']]
        ];
    }
    public function index(){
        return view('reading.postest.index');
    }
    public function start(){
        $next = 'reading.postest.kata';
        Session::put('seriPost',0);
        Session::put('iterasiPost',0);
        return view('reading.postest.focus',compact('next'));
    }
    public function kata(){
        $seri = Session::get('seriPost');
        $iterasi = Session::get('iterasiPost');
        // dd($seri,$iterasi);
        $kata = $this->arrayKata[$this->seri[$seri]][$iterasi];
        $next = 'reading.postest.pernyataan';
        return view('reading.postest.kata',compact('kata','next'));
    }
    public function pernyataan(){
        $seri = Session::get('seriPost');
        $iterasi = Session::get('iterasiPost');
        $pernyataan = $this->arrayPernyataan[$this->seri[$seri]][$iterasi];
        $next = 'reading.postest.pernyataan.jawab';
        $nextParam = ['jawaban'=>'null'];
        return view('reading.postest.pernyataan',compact('pernyataan','kata','next','nextParam'));
    }
    public function jawabPernyataan($jawaban){
        $seri = Session::get('seriPost');
        $iterasi = Session::get('iterasiPost');
        $pernyataan = $this->arrayPernyataan[$this->seri[$seri]][$iterasi];
        $benar = ($pernyataan[1]==$jawaban?true:false);
        // dd($benar);
        // dd($benar);
        return redirect()->route('reading.postest.recall');
    }
    public function freeRecall(){
        $seri = $this->seri[Session::get('seriPost')]+2;
        $jumlahKata = $seri+1;
        // dd($jumlahKata);
        // $iterasi = Session::get('iterasiPost');
        return view('reading.postest.recall',compact('jumlahKata'));
    }
    public function postFreeRecall(Request $request){
        $seri = Session::get('seriPost');
        $iterasi = Session::get('iterasiPost');
        $jawabanUser = $request->kata;
        $jawabanUser = array_map('strtolower',$jawabanUser);
        $kunciJawaban = $this->arrayKata[$this->seri[$seri]][$iterasi];
        $kunciJawaban = array_map('strtolower',$kunciJawaban);
        $waktu = (int) $request->waktu;
        $benar = 0;
        // cek berapa kata yang benar
        for ($i=0; $i < count($kunciJawaban); $i++) {
            if(in_array($kunciJawaban[$i],$jawabanUser)){
                $benar+=1;
            }
        }
        // dd($waktu,$benar);
        // TODO: Save ke DB, jangan lupa seri dan iterasinya yang sesungguhnya
        $iterasi += 1;
        if($iterasi>1){
            $seri+=1;
            $iterasi=0;
        }
        $next = 'reading.postest.kata';
        if($seri<5){
            Session::put('seriPost',$seri);
            Session::put('iterasiPost',$iterasi);
        }
        else{
            dd("test selesai. Lanjut ke ryan");
        }
        return view('reading.postest.focus',compact('kata','next'));
    }
}
