<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReadingMainController extends Controller
{
    private $arrayKata;
    private $arrayPernyataan;
    private $seri;
    public function __construct(){
        $this->middleware('auth');
        $this->seri = [0,1,2,4,3,6,5]; //2,3,3,5,4,6,7
        $this->arrayKata = [
            [
                ['Kursi','Mata'],
                ['Kopi','Koran'],
                ['Kuda','Kulkas']
            ],
            [
                ['Motor','Mulut','Pagar'],
                ['Paku','Palu','Panda'],
                ['Papan','Pasir','Payung'],
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
                ['Becak','Dunia','Emping','Meja','Intan'],
                ['Kain','Mesin','Lampu','Kaki','Piano'],
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
                ['Gunung','Hidung','Jari','Jarum','Kabel','Kaca','Mobil']
            ]
        ];
        $this->arrayPernyataan = [
            [['Indonesia ada di Benua Eropa','false'],['Indahnya musim semi di Afrika','false'],['Kiwi hidup di Selandia baru','true']],
            [['Musim gugur sakura bersemi','false'],['Panasnya musim gugur di Jepang','false'],['Awan terbentuk dari udara di air','false']],
            [['Anak gajah berbelalai panjang','true'],['Telinga panda berwarna putih','false'],['Semua burung bersayap','true']],
            [['Burung tidak punya gigi','true'],['Pinguin tinggal kutub selatan','true'],['Pinguin bisa berenang','true']],
            [['Bunglon dapat berubah bentuk','false'],['Hiu bernapas dengan paru-paru','true'],['Blueberry berwarna merah','false']],
            [['Lumba-lumba mamalia laut','true'],['Gurita disebut oktopus','true'],['Tarantula si laba-laba raksasa','true']],
            [['Sapi suka  minum susu','false'],['Ulat si bayi kupu-kupu','true'],['Kupu-kupu menggigit  madu','false']]
        ];
    }
    public function index(){
        return view('reading.main.index');
    }
    public function fokus($seri,$iterasi){
        $jenisUser = Auth::user()->jenisUser;
        if($jenisUser=="eksperimen" && $iterasi == 0 && $seri > 1){
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
        $seriGambar = $seri-2;
        return view('reading.main.gambar', compact('next','nextParam','seri','iterasi','emosi','seriGambar'));
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
        if($seri<2){
            return redirect('/reading/main/skor/seri/'.$seri.'/iterasi/'.$iterasi);
        }
        else{
            $iterasi += 1;
            if($iterasi > 2){
                $seri += 1;
                $iterasi = 0;
            }
            if($seri<7){
                return redirect('/reading/main/fokus/seri/'.$seri.'/iterasi/'.$iterasi);
            }
            else{
                return redirect('/reading/postest/');
                dd('Redirect ke postest');
            }
        }
    }
    public function skor($seri, $iterasi){
        $iterasi += 1;
        if($iterasi > 2){
            $seri += 1;
            $iterasi = 0;
        }
        $next = 'reading.main.fokus';
        $nextParam = ['seri'=>$seri,'iterasi'=>$iterasi];
        // dd($next,$nextParam);
        return view('reading.main.score',compact('seri','iterasi','next','nextParam'));
    }
}
