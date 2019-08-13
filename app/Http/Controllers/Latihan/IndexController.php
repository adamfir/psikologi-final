<?php

namespace App\Http\Controllers\Latihan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function __construct() {
        $this->arrayKata = [
            [
                ['Denda','Emosi','Final'],
                ['Saran','Topik','Buih'],
                ['Kristal','Listrik','Pegas']
            ],
            [
                ['Kaca', 'Tinta', 'Tabung', 'Meja'],
                ['Rumah', 'Sendal', 'Kursi', 'Panci'],
                ['Tali', 'Telur', 'Tembok', 'Topi']
            ]
        ];
    }
    public function index(){
        return view('reading.latihan.index');
    }
    public function deskipsiSeriKata(){
        return view('reading.latihan.deskripsiSeriKata');
    }
    public function displayKata(Request $request){
        if(Session::has('seriLatihanKata')==false){
            Session::put('seriLatihanKata',0);
            Session::put('iterasiLatihanKata',0);
            // dd("hack");
        }
        $iterasi = Session::get('iterasiLatihanKata');
        $seri = Session::get('seriLatihanKata');
        // dd(Session::has('seriLatihanKata'), $iterasi, $seri);
        $kata = $this->arrayKata[$seri][$iterasi];
        $next = 'reading.latihan.kata.free.recall';
        return view('reading.latihan.kata',compact('kata','next'));
    }
    public function freeRecall(Request $request){
        // dd(Session::get('hasilSerialRecall3'),Session::get('hasilSerialRecall4'),Session::get('hasilFreeRecall3'),Session::get('hasilFreeRecall4'));
        return view('reading.latihan.freeRecall');
    }
    public function postFreeRecall(Request $request){
        $seri = $request->session()->get('seriLatihanKata');
        $iterasi = $request->session()->get('iterasiLatihanKata');
        $kunciJawaban = $this->arrayKata[$seri][$iterasi];
        $jawaban = $request->kata;
        $benar = 0;
        for ($i=0; $i < count($kunciJawaban); $i++) { 
            if(in_array(strtolower($kunciJawaban[$i]),$jawaban)) $benar+=1;
        }
        if($seri==0){ //seri 3
            $request->session()->push('hasilFreeRecall3',$benar);
        }
        if($seri==1){ // seri 4
            $request->session()->push('hasilFreeRecall4',$benar);
        }
        return redirect()->route('reading.latihan.kata.serial.recall');
    }
    public function serialRecall(Request $request){
        return view('reading.latihan.serialRecall');
    }
    public function postSerialRecall(Request $request){
        $seri = $request->session()->get('seriLatihanKata');
        $iterasi = $request->session()->get('iterasiLatihanKata');
        $kunciJawaban = $this->arrayKata[$seri][$iterasi];
        $jawaban = $request->kata;
        $benar = 0;
        $next = null;
        for ($i=0; $i < count($kunciJawaban); $i++) { 
            if($jawaban[$i] == strtolower($kunciJawaban[$i])) $benar+=1;
        }
        // $salah = count($kunciJawaban)-$benar;
        if($seri==0){ //seri 3
            $request->session()->push('hasilSerialRecall3',$benar);
        }
        if($seri==1){ // seri 4
            $request->session()->push('hasilSerialRecall4',$benar);
        }
        if($iterasi<2){
            Session::forget('iterasiLatihanKata');
            Session::put('iterasiLatihanKata',$iterasi+1);
            $next = 'reading.latihan.kata.display';
        }else{
            if($seri<1){
                $request->session()->put('iterasiLatihanKata',0);
                $request->session()->put('seriLatihanKata',$seri+1);
                $next = 'reading.latihan.kata.display';
            }
            else{
                $next = 'reading.latihan.kata.result';
            }
        }
        // dd(session('iterasiLatihanKata'));
        return view('reading.latihan.focus',compact('next'));
    }
    public function resultKata()
    {
        return view('reading.latihan.resultKata');
    }
}
