<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadingKontrolController extends Controller
{
    private $arrayKata3;
    private $arrayPernyataan3;
    public function __construct()
    {
        $this->middleware('auth');
        $this->arrayKata3 = [
            ['a1','b1','c1'],
            ['a2','b2','c2'],
            ['a3','b3','c3'],
        ];
        $this->arrayPernyataan3 = ['Pernyataan 1', 'Pernyataan 2', 'Pernyataan 3'];
    }

    public function index(){
        return view('reading.main.kontrol.index');
    }
    public function instruksi(){
        return view('reading.main.kontrol.instruksi');
    }

    public function kata0(){
        return view('reading.main.kontrol.0.kata');
    }
    public function pernyataan0(){
        return view('reading.main.kontrol.0.pernyataan');
    }
    public function recall10(){
        return view('reading.main.kontrol.0.recall1');
    }
    public function postRecall10(){
        return redirect('reading/main/kontrol/0/recall2');
    }
    public function recall20(){
        return view('reading.main.kontrol.0.recall2');
    }
    public function postRecall20(){
        return redirect('reading/main/kontrol/0/skor');
    }
    public function skor0(){
        return view('reading.main.kontrol.0.skor');
    }
    
    public function kata1($ulangan){
        $kata = $this->arrayKata3[$ulangan-1];
        $next = 'reading.main.kontrol.1.pernyataan';
        $nextParam = ['ulangan'=>$ulangan];
        return view('reading.main.kontrol.1.kata', compact('kata', 'next', 'nextParam'));
    }
    public function pernyataan1($ulangan){
        $pernyataan = $this->arrayPernyataan3[$ulangan-1];
        $next = 'reading.main.kontrol.1.recall1';
        $nextParam = ['ulangan'=>$ulangan];
        return view('reading.main.kontrol.1.pernyataan', compact('pernyataan', 'next', 'nextParam'));
    }
    public function recall11($ulangan){
        $next = 'reading.main.kontrol.1.postRecall1';
        $nextParam = ['ulangan'=>$ulangan];
        return view('reading.main.kontrol.1.recall1', compact('next', 'nextParam'));
    }
    public function postRecall11($ulangan, Request $request){
        $next = 'reading.main.kontrol.1.recall2';
        $nextParam = ['ulangan'=>$ulangan];
        return redirect()->route($next, ['ulangan'=>$ulangan]);
    }
    public function recall21($ulangan){
        $next = 'reading.main.kontrol.1.postRecall2';
        $nextParam = ['ulangan'=>$ulangan];
        return view('reading.main.kontrol.1.recall2', compact('next', 'nextParam'));
    }
    public function postRecall21($ulangan, Request $request){
        $ulangan+=1;
        if($ulangan <= 3){
            $next = 'reading.main.kontrol.1.kata';
            $nextParam = ['ulangan'=>$ulangan];
            return redirect()->route($next, ['ulangan'=>$ulangan]);
        }else{
            dd($ulangan);
        }
    }
}
