<?php

namespace App\Http\Controllers;
use App\ArraySpanTask;
use App\User;
use App\arraySpanTaskAns;
use Auth;


use Illuminate\Http\Request;

class ControlArraySpanTaskMainController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($seri, $iterasi){

        return view('pages/tester/controlAST/main/ArraySpanTask', compact('iterasi', 'seri'));
    }

    public function question($seri, $iterasi){
        $soals = [["9*2+2=21", "10-4/2=3"], ["55/5-1=11", "24-4/4=5"], ["64+6/2=61", "124+40=164"],["39+11-45=5", "66/6=10"], ["35/7-2=7", "69-45/5=61"], ["98/2=48", "85/5=17"], ["37-33=3", "63/3=21"], ["82*2/4=41", "5*5/25=5"], ["34+16=50", "67-37=30"], ["77-67+10=20", "92-32+22=82"], ["34/2-17=1", "12*4-2=24"]];
         
        $jawabans = [[0, 0], [1, 0], [0, 1],[1, 0], [0, 0], [0, 1], [0, 1], [1, 0], [1, 1], [1, 1], [0, 0]];

         $soal = $soals[$seri-1][$iterasi-1];
         $jawaban = $jawabans[$seri-1][$iterasi-1];

        return view('pages/tester/controlAST/main/ArraySpanTaskQuestion', compact('iterasi', 'seri', 'soal', "jawaban"));
    }

    public function question1($seri, $iterasi, $id, $detik){
        return view('pages/tester/controlAST/main/ArraySpanTask1', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'detik'=>$detik]);
    }

    public function question2($seri, $iterasi, $id, $id1, $detik){
    
       return view('pages/tester/controlAST/main/ArraySpanTask2', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'id1'=>$id1, 'detik'=>$detik]);
   }

   public function arrayQuest1($seri, $iterasi, $id, $detik){
    return view('pages/tester/controlAST/main/Array1Quest', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'detik'=>$detik]);
    }

   public function arrayQuest2($seri, $iterasi, $id, $id1, $detik){
       return view('pages/tester/controlAST/main/Array2Quest', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'id1'=>$id1, 'detik'=>$detik]);
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

    return view('pages/tester/controlAST/main/Score', ['seri'=>$seri, 'iterasi'=>$iterasi, 'benar'=>$benar, 'salah'=>$salah, 'detik'=>$detik]);
}
   public function focus($seri, $iterasi, $id, $id1, $id2, $detik){

    //push db
    $user = auth()->user();
    //push db
    arraySpanTaskAns::Create([
        'userId' => $user->id,
        'test' => "Control-Main",
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

    return view('pages/tester/controlAST/main/Focus', ['seri'=>$seri, 'iterasi'=>$iterasi]);   }

    public function focusBefore($seri, $iterasi){

        return view('pages/tester/controlAST/main/FocusBefore', ['seri'=>$seri, 'iterasi'=>$iterasi]);   
    }

    public function emotional($seri, $iterasi){

        $pict = [[], [], [1, 2], [3, 4], [5, 6], [7, 8], [9, 10], [11, 12], [13, 14]];
        $picts = [[], [], [1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12], [13, 14, 15, 16, 17], [18, 19, 20, 21, 22], [23, 24, 25, 26], [27, 28, 29, 30], [31, 32, 33, 34]];
        $user = auth()->user();
        $type = $user->type;
        $negatif = "Negatif/Animal/";
        $positif= "Positif/Animal/";
        $neutral = "Neutral/neutralOne";
    
        $root = "/emotional/". $positif .$pict[$seri-1][$iterasi-1]. ".jpg";

        return view('pages/tester/controlAST/main/emotional', ['seri'=>$seri, 'iterasi'=>$iterasi, 'pict'=>$root, 'picts'=>$picts, 'type'=>$type]);
    }
    
   public function instruksi(){
       return view('pages/tester/controlAST/main/Instruksi');

   }
}
