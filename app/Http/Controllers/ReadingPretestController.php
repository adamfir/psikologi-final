<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recall;
use App\JawabanPernyataan;
use Illuminate\Support\Facades\Auth;

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
    public function fokus($seri,$iterasi){
        $next = 'reading.pretest.kata';
        $nextParam = ['seri'=>$seri,'iterasi'=>$iterasi];
        return view('reading.pretest.focus',compact('next','nextParam'));
    }
    public function kata($seri,$iterasi){
        $next = 'reading.pretest.pernyataan';
        $nextParam = ['seri'=>$seri,'iterasi'=>$iterasi];
        // $seri = $this->seri[$iterasi];
        $kata = $this->arrayKata[$this->seri[$seri]][$iterasi];
        return view('reading.pretest.kata', compact('kata','next','nextParam'));
    }
    public function pernyataan($seri,$iterasi){
        $pernyataan = $this->arrayPernyataan[$this->seri[$seri]][$iterasi];
        $next = 'reading.pretest.postPernyataan';
        $nextParam = ['seri'=>$seri,'iterasi'=>$iterasi];
        return view('reading.pretest.pernyataan', compact('pernyataan','next','nextParam','seri','iterasi'));
    }
    public function postPernyataan(Request $request,$seri,$iterasi){
        // dd($request);
        $jawaban = $request['jawaban'];
        $time_left = (int) $request['time_left'];
        $result = ($jawaban == $this->arrayPernyataan[$this->seri[$seri]][$iterasi][1] ? true: false);
        $db = new JawabanPernyataan([
            'user_id' => Auth::user()->id,
            'test_category'=>'pre',
            'is_true'=>$result,
            'time_left'=>$time_left,
            'seri'=>$this->seri[$seri]+1,
            'iterasi'=>$iterasi+1
        ]);
        // dd($db,$time_left,$jawaban);
        $db->save();
        // DONE: simpan hasil ke DB
        return redirect('reading/pretest/recall/seri/'.$seri.'/iterasi/'.$iterasi);
    }
    public function recall($seri,$iterasi){
        // $seri = $this->seri[$iterasi]+3;
        $next = 'reading.pretest.postRecall';
        $nextParam = ['seri'=>$seri,'iterasi'=>$iterasi];
        $jumlahKata = $this->seri[$seri]+3;
        return view('reading.pretest.recall', compact('jumlahKata','next','nextParam'));
    }
    public function postRecall(Request $req, $seri, $iterasi){
        $jawabanUser = $req->kata;
        $jawabanUser = array_map('strtolower',$jawabanUser);
        $kunciJawaban = $this->arrayKata[$this->seri[$seri]][$iterasi];
        $kunciJawaban = array_map('strtolower',$kunciJawaban);
        $waktu = (int) $req->waktu;
        $benar = 0;
        $salah = 0;
        // cek berapa kata yang benar
        for ($i=0; $i < count($kunciJawaban); $i++) {
            if(in_array($kunciJawaban[$i],$jawabanUser)){
                $benar+=1;
            }
            else{
                $salah+=1;
            }
        }
        // DONE: Save ke DB
        $db = new Recall([
            'user_id' => Auth::user()->id,
            'test_category'=>'pre',
            'time'=>$waktu,
            'seri'=>$this->seri[$seri]+1,
            'iterasi'=>$iterasi+1,
            'true_answer'=>$benar,
            'false_answer'=>$salah,
            'type'=>'free'
        ]);
        $db->save();
        return redirect()->route('reading.pretest.serial.recall',compact('seri','iterasi'));
        // next route  // pindah ke serial recall
        // $iterasi+=1;
        // if($iterasi>1){
        //     $seri+=1;
        //     $iterasi=0;
        // }
        // if($seri<5)
        //     return redirect('reading/pretest/fokus/seri/'.$seri.'/iterasi/'.$iterasi);
        // else{
        //     return redirect('reading/main/');
        //     // dd("Redirect ke next tes");
        // }

    }
    public function serialRecall($seri,$iterasi){
        // $seri = $this->seri[$iterasi]+3;
        $next = 'reading.pretest.serial.recall.post';
        $nextParam = ['seri'=>$seri,'iterasi'=>$iterasi];
        $jumlahKata = $this->seri[$seri]+3;
        return view('reading.pretest.serialRecall', compact('jumlahKata','next','nextParam'));
    }
    public function postSerialRecall(Request $req, $seri, $iterasi){
        $jawabanUser = $req->kata;
        $jawabanUser = array_map('strtolower',$jawabanUser);
        $kunciJawaban = $this->arrayKata[$this->seri[$seri]][$iterasi];
        $kunciJawaban = array_map('strtolower',$kunciJawaban);
        $waktu = (int) $req->waktu;
        $benar = 0;
        $salah = 0;
        // cek berapa kata yang benar
        for ($i=0; $i < count($kunciJawaban); $i++) {
            if(strtolower($kunciJawaban[$i])==strtolower($jawabanUser[$i])){
                $benar = 1;
            }
            else{
                $benar = 0;
                $salah = 1;
                break;
            }
        }
        // dd($benar,$salah,$kunciJawaban);
        // DONE: Save ke DB
        $db = new Recall([
            'user_id' => Auth::user()->id,
            'test_category'=>'pre',
            'time'=>$waktu,
            'seri'=>$this->seri[$seri]+1,
            'iterasi'=>$iterasi+1,
            'true_answer'=>$benar,
            'false_answer'=>$salah,
            'type'=>'serial'
        ]);
        $db->save();
        // next route  // pindah ke serial recall
        $iterasi+=1;
        if($iterasi>1){
            $seri+=1;
            $iterasi=0;
        }
        if($seri<5)
            return redirect('reading/pretest/fokus/seri/'.$seri.'/iterasi/'.$iterasi);
        else{
            return redirect('reading/main/');
            // dd("Redirect ke next tes");
        }

    }
}
