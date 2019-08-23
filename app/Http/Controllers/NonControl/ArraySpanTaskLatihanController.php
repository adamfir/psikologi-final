<?php

namespace App\Http\Controllers;
use App\ArraySpanTask;
use App\User;
use App\arraySpanTaskAns;
use Auth;


use Illuminate\Http\Request;

class ArraySpanTaskLatihanController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($seri, $iterasi){

        return view('pages/tester/latihan/ArraySpanTask', compact('iterasi', 'seri'));
    }

    public function question($seri, $iterasi){
         $soals = [["2-1/2=2", "6-3/3=4"], ["2*2/1=2", "2+2*6=30"], ["3*3*6=54", "(50 + 15) + 35 = 100"], ["50 x 5 x 100=25000", "25+22/1 = 37"], ["22/3+3 = 4", "123+2/(2+2)=44"], ["(22+3)/2=11", "25+6+2 = 33"], ["88+99+1 = 180", "22/2+1=12"], ["22+1=23", "88+99+1 = 180"], ["3*3*6=54", "19x3=57"], ["7x224 : 7 = 224", "13 + 7 x 8=69"], ["85-6x8=32", "12/2+1=7"]];
         $jawabans = [[0, 0], [0, 0], [1, 1], [1, 0], [0, 0], [0, 1], [0, 1], [1, 0], [1, 1], [1, 1], [0, 0]];

         $soal = $soals[$seri-1][$iterasi-1];
         $jawaban = $jawabans[$seri-1][$iterasi-1];

        return view('pages/tester/latihan/ArraySpanTaskQuestion', compact('iterasi', 'seri', 'soal', "jawaban"));
    }

    public function question1($seri, $iterasi, $id, $detik){
        return view('pages/tester/latihan/ArraySpanTask1', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'detik'=>$detik]);
    }

    public function question2($seri, $iterasi, $id, $id1, $detik){
    
       return view('pages/tester/latihan/ArraySpanTask2', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'id1'=>$id1, 'detik'=>$detik]);
   }

   public function arrayQuest1($seri, $iterasi, $id, $detik){
    return view('pages/tester/latihan/Array1Quest', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'detik'=>$detik]);
    }

   public function arrayQuest2($seri, $iterasi, $id, $id1, $detik){
       return view('pages/tester/latihan/Array2Quest', ['seri'=>$seri, 'iterasi'=>$iterasi, 'id'=>$id, 'id1'=>$id1, 'detik'=>$detik]);
   }

   public function score($seri, $iterasi, $id, $id1, $id2, $detik){

    //push db
    $user = auth()->user();
    //push db
    arraySpanTaskAns::Create([
        'userId' => $user->id,
        'test' => "Latihan",
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

    return view('pages/tester/latihan/Score', ['seri'=>$seri, 'iterasi'=>$iterasi, 'benar'=>$benar, 'salah'=>$salah, 'detik'=>$detik]);
}
   public function focus($seri, $iterasi){

    return view('pages/tester/latihan/Focus', ['seri'=>$seri, 'iterasi'=>$iterasi]);
   }

   public function instruksi(){
       return view('pages/tester/latihan/Instruksi1');

   }
}
