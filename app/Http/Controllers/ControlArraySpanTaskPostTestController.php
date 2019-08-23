<?php

namespace App\Http\Controllers;
use App\ArraySpanTask;
use App\User;
use App\arraySpanTaskAns;
use Auth;


use Illuminate\Http\Request;

class ControlArraySpanTaskPostTestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($seri, $iterasi){

        return view('pages/tester/controlAST/postest/ArraySpanTask', compact('iterasi', 'seri'));
    }

    public function question($seri, $iterasi){
        $soals = [["71-31/31=31", "43+27*2=160"], ["51-9=41", "29/3=10"], ["80/40=2", "1+99=100"], ["44/4=11", "40/4=5"], ["145-45=100", "33-23=3"], ["95+95=185", "42-2=41"], ["5+1=1", "44/44=1"], ["56+6=62", "77/11=7"], ["69*2=138", "27-7=26"], ["66/6=11", "35/7=5"], ["28/8=8", "9/4=3"]];
        $jawabans = [[0, 0], [0, 0], [1, 1], [1, 0], [1, 0], [0, 0], [0, 0], [0, 0], [1, 0], [1, 1], [0, 0]];

        $soal = $soals[$seri-1][$iterasi-1];
        $jawaban = $jawabans[$seri-1][$iterasi-1];

        return view('pages/tester/controlAST/postest/ArraySpanTaskQuestion', compact('iterasi', 'seri', 'soal', "jawaban"));
    }

    public function question1($seri, $iterasi, $id, $detik){
        return view('pages/tester/controlAST/postest/ArraySpanTask1', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'detik'=>$detik]);
    }

    public function question2($seri, $iterasi, $id, $id1, $detik){
    
       return view('pages/tester/controlAST/postest/ArraySpanTask2', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'id1'=>$id1, 'detik'=>$detik]);
   }

   public function arrayQuest1($seri, $iterasi, $id, $detik){
    return view('pages/tester/controlAST/postest/Array1Quest', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'detik'=>$detik]);
    }

   public function arrayQuest2($seri, $iterasi, $id, $id1, $detik){
       return view('pages/tester/controlAST/postest/Array2Quest', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'id1'=>$id1, 'detik'=>$detik]);
   }

   public function score($seri, $iterasi, $id, $id1, $id2, $detik){

    //push db

    $benar = 0;
    $salah = 0;
    if($id == 0){
        $salah = $salah +1;
    }
    else{
        $benar = $benar +1;
    }

    if($id1 == 0){
        $salah = $salah +1;
    }
    else{
        $benar = $benar +1;
    }

    if($id2 == 0){
        $salah = $salah +1;
    }
    else{
        $benar = $benar +1;
    }

    return view('pages/tester/controlAST/postest/Score', ['seri'=>$seri, 'iterasi'=>$iterasi, 'benar'=>$benar, 'salah'=>$salah, 'detik'=>$detik]);
}
   public function focus($seri, $iterasi, $id, $id1, $id2, $detik){

    //push db
    $user = auth()->user();
    //push db
    arraySpanTaskAns::Create([
        'userId' => $user->id,
        'test' => "Control-PosTest",
        'seri'=> $seri,
        'iterasi'=> $iterasi,
        'question'=> $id,
        'forward' => $id1,
        'backward' => $id2,
        'time'=> $detik

    ]);

    $benar = 0;
    $salah = 0;
    if($id == 0){
        $salah = $salah +1;
    }
    else{
        $benar = $benar +1;
    }

    if($id1 == 0){
        $salah = $salah +1;
    }
    else{
        $benar = $benar +1;
    }

    if($id2 == 0){
        $salah = $salah +1;
    }
    else{
        $benar = $benar +1;
    }

    return view('pages/tester/controlAST/postest/Focus', ['seri'=>$seri, 'iterasi'=>$iterasi]);   }

    public function focusBefore($seri, $iterasi){

        return view('pages/tester/controlAST/postest/FocusBefore', ['seri'=>$seri, 'iterasi'=>$iterasi]);   
    }

    public function emotional($seri, $iterasi){
        $pict = [[], [], [1, 2], [3, 4], [5, 6], [7, 8], [9, 10], [11, 12], [13, 14]];
        $user = auth()->user();
        $negatif = "Negatif/Object/";
        $positif = "Positif/Landscape";
        $neutral = "Neutral/neutralThree";

        $root = "/emotional/". $negatif .$pict[$seri-1][$iterasi-1]. ".jpg";
        

        return view('pages/tester/controlAST/postest/emotional', ['seri'=>$seri, 'iterasi'=>$iterasi, 'pict'=>$root]);
    }

   public function instruksi(){
       return view('pages/tester/controlAST/postest/Instruksi');

   }
}
