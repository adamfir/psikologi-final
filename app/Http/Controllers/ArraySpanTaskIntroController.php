<?php

namespace App\Http\Controllers;
use App\ArraySpanTask;
use App\User;
use App\arraySpanTaskAns;
use Auth;


use Illuminate\Http\Request;

class ArraySpanTaskIntroController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($seri, $iterasi){

        return view('pages/tester/intro/ArraySpanTask', compact('iterasi', 'seri'));
    }

    public function question($seri, $iterasi){
         $soals = [["2-1=2", "6-3=4"], ["2*2=2", "2*6=30"], ["3*3=9", "50 + 15 = 65"], ["50 x 5=250", "25+1 = 37"], ["21/3 = 4", "2+2=44"], ["22+3=11", "25+6 = 31"], ["99+1 = 90", "22/2=11"], ["22+1=23", "99+1 = 180"], ["3*6=18", "19x3=57"], ["7x7 = 49", "7 x 8=69"], ["6x8=32", "12/2=7"]];
         $jawabans = [[0, 0], [0, 0], [1, 1], [1, 0], [0, 0], [0, 1], [0, 1], [1, 0], [1, 1], [1, 1], [0, 0]];

         $soal = $soals[$seri-1][$iterasi-1];
         $jawaban = $jawabans[$seri-1][$iterasi-1];

        return view('pages/tester/intro/ArraySpanTaskQuestion', compact('iterasi', 'seri', 'soal', "jawaban"));
    }

    public function question1($seri, $iterasi){
        return view('pages/tester/intro/ArraySpanTask1', ['seri'=>$seri, 'iterasi'=>$iterasi]);
    }

    public function question2($seri, $iterasi, $id,  $detik){
    
       return view('pages/tester/intro/ArraySpanTask2', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'detik'=>$detik]);
   }

   public function arrayQuest1($seri, $iterasi){
    return view('pages/tester/intro/Array1Quest', ['seri'=>$seri, 'iterasi'=>$iterasi]);
    }

   public function arrayQuest2($seri, $iterasi, $id, $detik){
       return view('pages/tester/intro/Array2Quest', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'detik'=>$detik]);
   }

   public function score($seri, $iterasi, $id, $id1, $detik){

    //push db
    $user = auth()->user();
    //push db
    arraySpanTaskAns::Create([
        'userId' => $user->id,
        'test' => "Intro",
        'seri'=> $seri,
        'iterasi'=> $iterasi,
        'question'=> '0',
        'forward' => $id,
        'backward' => $id1,
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

    return view('pages/tester/intro/Score', ['seri'=>$seri, 'iterasi'=>$iterasi, 'benar'=>$benar, 'salah'=>$salah, 'detik'=>$detik]);
}
   public function focus($seri, $iterasi){

    return view('pages/tester/intro/Focus', ['seri'=>$seri, 'iterasi'=>$iterasi]);
   }

   public function instruksi(){
       return view('pages/tester/intro/Instruksi1');

   }
}
