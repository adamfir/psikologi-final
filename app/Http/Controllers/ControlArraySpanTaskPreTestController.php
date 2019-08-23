<?php

namespace App\Http\Controllers;
use App\ArraySpanTask;
use App\User;
use App\arraySpanTaskAns;
use Auth;


use Illuminate\Http\Request;

class ControlArraySpanTaskPreTestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($seri, $iterasi){

        return view('pages/tester/controlAST/pretest/ArraySpanTask', compact('iterasi', 'seri'));
    }

    public function question($seri, $iterasi){
        $soals = [["5-3=1", "3/3=0"], ["4-1=2", "5-3=1"], ["9-5=4", "400/10=40"], ["15*5=75", "48/12=6"], ["55+105=155", "75-15=60"], ["44/4=1", "39+39=78"], ["98/2=44", "55+55=110"], ["56/2=28", "58/2=27"], ["120*2=240", "9*9=81"], ["33/33=1", "45+50=95"], ["67+33=110", "15/5=15"]];
        $jawabans = [[0, 0], [0, 0], [1, 1], [1, 0], [0, 0], [0, 1], [0, 1], [1, 0], [1, 1], [1, 1], [0, 0]];

         $soal = $soals[$seri-1][$iterasi-1];
         $jawaban = $jawabans[$seri-1][$iterasi-1];

        return view('pages/tester/controlAST/pretest/ArraySpanTaskQuestion', compact('iterasi', 'seri', 'soal', "jawaban"));
    }

    public function question1($seri, $iterasi, $id, $detik){
        return view('pages/tester/controlAST/pretest/ArraySpanTask1', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'detik'=>$detik]);
    }

    public function question2($seri, $iterasi, $id, $id1, $detik){
    
       return view('pages/tester/controlAST/pretest/ArraySpanTask2', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'id1'=>$id1, 'detik'=>$detik]);
   }

   public function arrayQuest1($seri, $iterasi, $id, $detik){
    return view('pages/tester/controlAST/pretest/Array1Quest', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'detik'=>$detik]);
    }

   public function arrayQuest2($seri, $iterasi, $id, $id1, $detik){
       return view('pages/tester/controlAST/pretest/Array2Quest', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'id1'=>$id1, 'detik'=>$detik]);
   }

   public function score($seri, $iterasi, $id, $id1, $id2, $detik){
    
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

    return view('pages/tester/controlAST/pretest/Score', ['seri'=>$seri, 'iterasi'=>$iterasi, 'benar'=>$benar, 'salah'=>$salah, 'detik'=>$detik]);
}
   public function focus($seri, $iterasi, $id, $id1, $id2, $detik){

    //push db
    //push db
    $user = auth()->user();
    //push db
    arraySpanTaskAns::Create([
        'userId' => $user->id,
        'test' => "Control-PreTest",
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

    return view('pages/tester/controlAST/pretest/Focus', ['seri'=>$seri, 'iterasi'=>$iterasi]);  
     }

    public function emotional($seri, $iterasi){
        $pict = [[], [], [1, 2], [3, 4], [5, 6], [7, 8], [9, 10], [11, 12], [13, 14]];
        $user = auth()->user();
        $negatif = "Negatif/Animal/";
        $positif = "Positif/Animal/";
        $neutral = "Neutral/neutralTwo";

        $root = "/emotional/". $negatif .$pict[$seri-1][$iterasi-1]. ".jpg";
        return view('pages/tester/controlAST/pretest/emotional', ['seri'=>$seri, 'iterasi'=>$iterasi, 'pict'=>$root]);
    }

    public function focusBefore($seri, $iterasi){

        return view('pages/tester/controlAST/pretest/FocusBefore', ['seri'=>$seri, 'iterasi'=>$iterasi]);   
    }
    

   public function instruksi(){
       return view('pages/tester/controlAST/pretest/Instruksi');

   }
}
