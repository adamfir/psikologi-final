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
                ['Aktris','Kakek','Menteri','Nahkoda'],
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
            [['Anak gajah berbelalai panjang','true'],['Telinga panda berwarna putih','false'],['Semua burung bersayap','true']],
            [['Burung tidak punya gigi','true'],['Pinguin tinggal kutub selatan','true'],['Pinguin bisa berenang','true']],
            [['Bunglon dapat berubah bentuk','false'],['Hiu bernapas dengan paru-paru','true'],['Blueberry berwarna merah','false']],
            [['Lumba-lumba mamalia laut','Benar'],['Gurita disebut oktopus','Benar'],['Tarantula si laba-laba raksasa','Benar']],
            [['Sapi suka  minum susu','Salah'],['Ulat si bayi kupu-kupu','Benar'],['Kupu-kupu menggigit  madu','Salah']]
        ];
    }
    public function index(){
        return view('reading.main.index');
    }
    public function fokus($seri,$iterasi){
        $jenisUser = Auth::user()->jenisUser;
        if($jenisUser=="eksperimen" && $iterasi == 0 && $seri != 0){
            $next = 'reading.main.gambar';
            $nextParam = ['seri'=>$seri,'iterasi'=>$iterasi];
            // return redirect('reading/main/gambar/seri/'.$seri.'/iterasi/'.$iterasi);
        }
        else{
            $next = 'reading.main.kata';
            $nextParam = ['seri'=>$seri,'iterasi'=>$iterasi];
        }
        return view('reading.main.focus', compact('next','nextParam'));
    }
    public function fokus2($seri,$iterasi){
        $next = 'reading.main.kata';
        $nextParam = ['seri'=>$seri,'iterasi'=>$iterasi];
        return view('reading.main.focus', compact('next','nextParam'));
    }
    public function gambar($seri,$iterasi){
        $next = 'reading.main.fokus2';
        $nextParam = ['seri'=>$seri,'iterasi'=>$iterasi];
        $emosi = 'positif'; //Auth::user()->emosi;
        return view('reading.main.gambar', compact('next','nextParam','seri','iterasi','emosi'));
    }
    public function kata($seri,$iterasi){
        $next = 'reading.main.pernyataan';
        $nextParam = ['seri'=>$seri,'iterasi'=>$iterasi];
        // if($seri == 0){
        //     $kata = $this->arrayKata[0][0];
        // }
        $kata = $this->arrayKata[$this->seri[$seri]][$iterasi];
        return view('reading.main.kata', compact('kata','next','nextParam'));
    }
    public function pernyataan($seri,$iterasi){
        // if($seri == 0){
        //     $pernyataan = $this->arrayPernyataan[$seri][$iterasi];
        // }
        $pernyataan = $this->arrayPernyataan[$this->seri[$seri]][$iterasi];
        $next = 'reading.main.postPernyataan';
        $nextParam = ['seri'=>$seri,'iterasi'=>$iterasi, 'jawaban'=>'none'];
        return view('reading.main.pernyataan', compact('next','nextParam','pernyataan','seri','iterasi'));
    }
    public function postPernyataan($seri,$iterasi,$jawaban){
        // if($seri == 0){
        // }
        $result = ($jawaban == $this->arrayPernyataan[$this->seri[$seri]][$iterasi][1] ? true: false);
        // dd($result);
        // TODO: simpan hasil ke DB
        return redirect('reading/main/free-recall/seri/'.$seri.'/iterasi/'.$iterasi);
    }
    public function freeRecall($seri,$iterasi){
        // dd($iterasi);
        $next='reading.main.postFreeRecall';
        $nextParam=['seri'=>$seri,'iterasi'=>$iterasi];
        $length = count($this->arrayKata[$this->seri[$seri]][$iterasi]);
        return view('reading.main.freeRecall', compact('next','nextParam','length'));
    }
    public function postFreeRecall(Request $req, $seri, $iterasi){
        $jawabanUser = $req->kata;
        $jawabanUser = array_map('strtolower',$jawabanUser);
        $kunciJawaban = $this->arrayKata[$this->seri[$seri]][$iterasi];
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
        $length = count($this->arrayKata[$this->seri[$seri]][$iterasi]);
        return view('reading.main.serialRecall', compact('next','nextParam','length'));
    }
    public function postSerialRecall(Request $req, $seri, $iterasi){
        $jawabanUser = $req->kata;
        $jawabanUser = array_map('strtolower',$jawabanUser);
        $kunciJawaban = $this->arrayKata[$this->seri[$seri]][$iterasi];
        $kunciJawaban = array_map('strtolower',$kunciJawaban);
        $waktu = (int) $req->waktu;
        $benar = 0;
        for ($i=0; $i < count($kunciJawaban); $i++) { 
            if($kunciJawaban[$i] == $jawabanUser[$i]){
                $benar+=1;
            }
        }
        $hasil = 0;
        if($benar == count($kunciJawaban)){
            $hasil = 1;
        }
        // dd($benar,$hasil,$waktu);
        if($seri==0){
            return redirect('/reading/main/skor/seri/'.$seri.'/iterasi/'.$iterasi);
        }
        else{
            $iterasi += 1;
            if($iterasi > 2){
                $seri += 1;
                $iterasi = 0;
            }
            return redirect('/reading/main/fokus/seri/'.$seri.'/iterasi/'.$iterasi);
        }
    }
    public function skor($seri, $iterasi){
        return view('reading.main.score');
    }
    // public function mainTestGate(){
    //     $jenisUser = Auth::user()->jenisUser;
    //     dd($jenisUser);
    // }
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
