<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReadingMainKontrolController extends Controller
{
    private $arrayKata;
    private $arrayPernyataan;
    private $seri;
    public function __construct(){
        $this->middleware('auth');
        $this->seri = [0,1,3,2,4,5]; //2,3,5,4,6,7
        $this->arrayKata = [
            [
                ['Batu','Kunci']
            ],
            [
                ['Hujan','Kebun','Karcis'],
                ['Obeng','Pelita','Ranting'],
                ['Semen','Toko','Wayang']
            ],
            [
                ['Aktris','Kakek','Mentri','Nahkoda'],
                ['Putra','Turis','Dusun','Penjara',],
                ['Lebah','Nangka','Oknum','Perang',]
            ],
            [
                ['Becak','Dunia','Emping','Gitar','Intan'],
                ['Kain','Kipas','Lampu','Kaki','Piano'],
                ['Piagam','Tiket','Bunda','Kapas','Inang']
            ],
            [
                ['Area','Bangsa','Muara','Pare','Kardus','Pemuda'],
                ['Karpet','Kipas','Kayu','Stadion','Kenari','Kertas'],
                ['Anggrek','Kompor','Apel','Bahu','Baju','Bambu']
            ],
            [
                ['Bando','Bantal','Batu','Bola','Buah','Buku','Busur'],
                ['Dada','Danau','Gajah','Gedung','Gelas','Gitar','Gudang'],
                ['Gunung','Hidung','Jari','Jarum','Kabel','Kaca','Kain']
            ]
        ];
        $this->arrayPernyataan = [
            [['Indonesia ada di Benua Eropa','false']],
            [['Pernyataan 3 1','true'], ['Pernyataan 3 2','true'], ['Pernyataan 3 3','true']],
            [['Pernyataan 4 1','true'], ['Pernyataan 4 2','true'], ['Pernyataan 4 3','true']],
            [['Pernyataan 5 1','true'], ['Pernyataan 5 2','true'], ['Pernyataan 5 3','true']],
            [['Pernyataan 6 1','true'], ['Pernyataan 6 2','true'], ['Pernyataan 6 3','true']],
            [['Pernyataan 7 1','true'], ['Pernyataan 7 2','true'], ['Pernyataan 7 3','true']]
        ];
    }
    public function index(){
        return view('reading.main.index');
    }
    public function kata($seri,$iterasi){
        $next = 'reading.main.pernyataan';
        $nextParam = ['seri'=>$seri,'iterasi'=>$iterasi];
        if($seri == 0){
            $kata = $this->arrayKata[0][0];
        }
        return view('reading.main.kata', compact('kata','next','nextParam'));
    }
    public function pernyataan($seri,$iterasi){
        if($seri == 0){
            $pernyataan = $this->arrayPernyataan[0][0];
        }
        $next = 'reading.main.postPernyataan';
        $nextParam = ['seri'=>$seri,'iterasi'=>$iterasi, 'jawaban'=>'none'];
        return view('reading.main.pernyataan', compact('next','nextParam','pernyataan','seri','iterasi'));
    }
    public function postPernyataan($seri,$iterasi,$jawaban){
        if($seri == 0){
            $result = ($jawaban == $this->arrayPernyataan[$seri][$iterasi][1] ? true: false);
        }
        // dd($result);
        // TODO: simpan hasil ke DB
        return redirect('reading/main/free-recall/seri/'.$seri.'/iterasi/'.$iterasi);
    }
    public function freeRecall($seri,$iterasi){
        // dd($iterasi);
        $next='reading.main.postFreeRecall';
        $nextParam=['seri'=>$seri,'iterasi'=>$iterasi];
        return view('reading.main.freeRecall', compact('next','nextParam'));
    }
    public function postFreeRecall(Request $req, $seri, $iterasi){
        $jawabanUser = $req->kata;
        $jawabanUser = array_map('strtolower',$jawabanUser);
        $kunciJawaban = $this->arrayKata[$seri][$iterasi];
        $kunciJawaban = array_map('strtolower',$kunciJawaban);
        $waktu = (int) $req->waktu;
        $benar = 0;
        // cek berapa kata yang benar FREE RECALL
        for ($i=0; $i < count($kunciJawaban); $i++) {
            if(in_array($kunciJawaban[$i],$jawabanUser)){
                $benar+=1;
            }
        }
        // dd($benar,$waktu);
        // TODO: Save ke DB
        
        // lanjut ke serial recall
        return redirect('reading/main/serial-recall/seri/'.$seri.'/iterasi/'.$iterasi);
    }
    public function serialRecall($seri,$iterasi){
        // dd($seri,$iterasi);
        $next='reading.main.postSerialRecall';
        $nextParam=['seri'=>$seri,'iterasi'=>$iterasi];
        return view('reading.main.serialRecall', compact('next','nextParam'));
    }
    public function postSerialRecall(Request $req, $seri, $iterasi){
        $jawabanUser = $req->kata;
        $jawabanUser = array_map('strtolower',$jawabanUser);
        $kunciJawaban = $this->arrayKata[$seri][$iterasi];
        $kunciJawaban = array_map('strtolower',$kunciJawaban);
        $waktu = (int) $req->waktu;
        $benar = 0;
        for ($i=0; $i < count($kunciJawaban); $i++) { 
            if($kunciJawaban[$i] == $jawabanUser[$i]){
                $benar+=1;
            }
        }
        // dd($benar,$waktu);
        if($seri==0){
            // Next nya istirahat dulu buat masuk ke tes utama.
            $next = '';
            $nextParam = '';
            return redirect('/reading/main/skor/seri/'.$seri.'/iterasi/'.$iterasi);
        }
    }
    public function skor($seri, $iterasi){
        return view('reading.main.score');
    }
    public function mainTestGate(){
        // if(Auth::user()->)
    }
    // public function index(){
    //     return view('reading.main.kontrol.index');
    // }
    // public function latihanKata($iterasi){
    //     $next = 'reading.main.kontrol.latihan.pernyataan';
    //     $nextParam = ['iterasi'=>$iterasi];
    //     $kata = $this->latihanKata;
    //     return view('reading.main.kontrol.latihan.kata', compact('kata','next','nextParam'));
    // }
    // public function latihanPernyataan($iterasi){
    //     $pernyataan = $this->latihanPernyataan;
    //     $next = 'reading.main.kontrol.latihan.postPernyataan';
    //     $nextParam = ['iterasi'=>$iterasi, 'jawaban'=>'none'];
    //     return view('reading.main.kontrol.latihan.pernyataan', compact('next','nextParam','pernyataan','iterasi'));
    // }
    // public function latihanPostPernyataan($iterasi,$jawaban){
    //     $result = ($jawaban == $this->latihanPernyataan[1] ? true: false);
    //     // dd($result);
    //     // TODO: simpan hasil ke DB
    //     return redirect('reading/main/kontrol/latihan/free-recall/iterasi/'.$iterasi);
    // }
    // public function latihanFreeRecall($iterasi){
    //     // dd($iterasi);
    //     $next='reading.main.kontrol.latihan.postFreeRecall';
    //     $nextParam=['iterasi'=>$iterasi];
    //     return view('reading.main.kontrol.latihan.freeRecall', compact('next','nextParam'));
    // }
    // public function postLatihanFreeRecall(Request $req, $iterasi){
    //     dd($req,$iterasi);
    // }
    // public function latihanSerialRecall($iterasi){
    //     dd($iterasi);
    // }
    // public function postLatihanSerialRecall(Request $req, $iterasi){
    //     dd($req,$iterasi);
    // }
}
