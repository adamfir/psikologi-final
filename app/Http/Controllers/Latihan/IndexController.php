<?php

namespace App\Http\Controllers\Latihan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Session\Session as SymfonySession;

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
        $this->arrayPernyataan = [
            ['Timor Leste ada di benua Asia','true'],
            ['Gajah berbelalai panjang','true'],
            ['Ikan hanya hidup di air tawar','false'],
            ['Indonesia termasuk negara ASEAN','true'],
            ['Semua unggas bisa terbang','false']
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
    public function deskipsiSeriPernyataan(){
        return view('reading.latihan.deskripsiSeriPernyataan');
    }
    public function displayPernyataan(){
        if(Session::has('iterasiLatihanPernyataan')==false){
            // Session::put('seriLatihanPernyataan',0);
            Session::put('iterasiLatihanPernyataan',0);
        }
        $iterasi = Session::get('iterasiLatihanPernyataan');
        // $seri = Session::get('seriLatihanKata');
        $pernyataan = $this->arrayPernyataan[$iterasi];
        $next = 'reading.latihan.pernyataan.jawaban';
        return view('reading.latihan.pernyataan',compact('pernyataan','next'));
    }
    public function jawabanPernyataan($jawaban){
        $iterasi = Session::get('iterasiLatihanPernyataan');
        $pernyataan = $this->arrayPernyataan[$iterasi];
        $totalBenar = null;
        $totalSalah = null;
        if($iterasi == 0){
            $totalBenar = $totalSalah = 0;
        }
        else{
            $totalBenar = Session::get('pernyataanBenar');
            $totalSalah = Session::get('pernyataanSalah');
        }
        if($pernyataan[1]===$jawaban){
            $totalBenar+=1;
        }
        else{
            $totalSalah+=1;
        }
        Session::put('pernyataanBenar',$totalBenar);
        Session::put('pernyataanSalah',$totalSalah);
        if($iterasi<4){
            Session::put('iterasiLatihanPernyataan',$iterasi+1);
            $next = 'reading.latihan.pernyataan.display';
            return view('reading.latihan.focus',compact('next'));
        }
        else{
            return redirect()->route('reading.latihan.pernyataan.result');
        }
    }
    public function resultPernyataan(){
        $iterasi = Session::get('iterasiLatihanPernyataan');
        $benar = Session::get('pernyataanBenar');
        $salah = Session::get('pernyataanSalah');
        // dd($iterasi,$benar,$salah);
        return view('reading.latihan.resultPernyataan');
    }
}
