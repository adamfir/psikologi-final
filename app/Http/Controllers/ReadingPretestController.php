<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadingPretestController extends Controller
{
    private $arrayKata;
    private $arrayPernyataan;
    private $seri;
    public function __construct()
    {
        $this->middleware('auth');
        $this->seri = [0,2,1,3,4]; //3,5,4,6,7
        $this->arrayKata = [
            ['Batu','Busur','Cermin'], //0
            ['Dompet','Filter','Gembok','Kamus'], //1
            ['Kunci','Kulkas','Lulur','Pipa','Pistol'], //2
            ['Suling','Artis','Dapur','Ngarai','Bambu','Kakap'], //3
            ['Pisang','Sirih','Lokal','Album','Benang','Debu','Gula'] //4
        ];
        $this->arrayPernyataan=[
            ['Panda hanya hidup di Indonesia', 'false'],   //0
            ['Singa jantan  memiliki surai', 'true'],    //1
            ['Simpanse berlengan panjang', 'true'],    //2
            ['Semua sayuran berwarna hijau', 'false'],    //3
            ['Kelinci dapat terbang tinggi', 'false']     //4
        ];
    }
    public function fokus($iterasi){
        $next = 'reading.pretest.kata';
        $nextParam = ['iterasi'=>$iterasi];
        return view('reading.pretest.focus',compact('next','nextParam'));
    }
    public function kata($iterasi){
        $next = 'reading.pretest.pernyataan';
        $nextParam = ['iterasi'=>$iterasi];
        $seri = $this->seri[$iterasi];
        $kata = $this->arrayKata[$seri];
        return view('reading.pretest.kata', compact('kata','next','nextParam'));
    }
    public function pernyataan($iterasi){
        $pernyataan = $this->arrayPernyataan[$iterasi];
        $next = 'reading.pretest.postPernyataan';
        $nextParam = ['iterasi'=>$iterasi, 'jawaban'=>'none'];
        return view('reading.pretest.pernyataan', compact('pernyataan','next','nextParam', 'iterasi'));
    }
    public function postPernyataan($iterasi,$jawaban){
        $result = ($jawaban == $this->arrayPernyataan[$iterasi][1] ? true: false);
        // dd($result);
        // TODO: simpan hasil ke DB
        return redirect('reading/pretest/recall/iterasi/'.$iterasi);
    }
    public function recall($iterasi){
        $seri = $this->seri[$iterasi]+3;
        $next = 'reading.pretest.postRecall';
        $nextParam = ['iterasi'=>$iterasi];
        return view('reading.pretest.recall', compact('seri','next','nextParam'));
    }
    public function postRecall(Request $req, $iterasi){
        $jawabanUser = $req->kata;
        $jawabanUser = array_map('strtolower',$jawabanUser);
        $kunciJawaban = $this->arrayKata[$iterasi];
        $kunciJawaban = array_map('strtolower',$kunciJawaban);
        $waktu = (int) $req->waktu;
        $benar = 0;
        // cek berapa kata yang benar
        for ($i=0; $i < count($kunciJawaban); $i++) {
            if(in_array($kunciJawaban[$i],$jawabanUser)){
                $benar+=1;
            }
        }
        // dd($waktu,$benar);
        // TODO: Save ke DB
        
        // next route
        $nextIterasi = $iterasi+1;
        if($nextIterasi<5){
            return redirect('reading/pretest/fokus/iterasi/'.strval($nextIterasi));
        }
        else{
            return redirect('reading/main/');
            // dd("Redirect ke next tes");
        }
    }
}
