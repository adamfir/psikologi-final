<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadingKontrolController extends Controller
{
    private $arrayKata3;
    private $arrayKata4;
    private $arrayKata5;
    private $arrayKata6;
    private $arrayKata7;
    private $seri;
    private $arrayPernyataan3;
    private $arrayPernyataan4;
    private $arrayPernyataan5;
    private $arrayPernyataan6;
    private $arrayPernyataan7;
    public function __construct()
    {
        $this->middleware('auth');
        $this->seri = [3,4,5,6,7];
        $this->arrayKata3 = [
            ['a1','b1','c1'],
            ['a2','b2','c2'],
            ['a3','b3','c3'],
        ];
        $this->arrayKata4 = [
            ['a1','b1','c1','d1'],
            ['a2','b2','c2','d2'],
            ['a3','b3','c3','d3'],
        ];
        $this->arrayKata5 = [
            ['a1','b1','c1','d1','e1'],
            ['a2','b2','c2','d2','e2'],
            ['a3','b3','c3','d3','e3'],
        ];
        $this->arrayKata6 = [
            ['a1','b1','c1','d1','e1','f1'],
            ['a2','b2','c2','d2','e2','f2'],
            ['a3','b3','c3','d3','e3','f3'],
        ];
        $this->arrayKata7 = [
            ['a1','b1','c1','d1','e1','f1','g1'],
            ['a2','b2','c2','d2','e2','f2','g2'],
            ['a3','b3','c3','d3','e3','f3','g3'],
        ];
        $this->arrayPernyataan3 = ['Pernyataan 3 1', 'Pernyataan 3 2', 'Pernyataan 3 3'];
        $this->arrayPernyataan4 = ['Pernyataan 4 1', 'Pernyataan 4 2', 'Pernyataan 4 3'];
        $this->arrayPernyataan5 = ['Pernyataan 5 1', 'Pernyataan 5 2', 'Pernyataan 5 3'];
        $this->arrayPernyataan6 = ['Pernyataan 6 1', 'Pernyataan 6 2', 'Pernyataan 6 3'];
        $this->arrayPernyataan7 = ['Pernyataan 7 1', 'Pernyataan 7 2', 'Pernyataan 7 3'];
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
    
    public function kata1($seriKe,$ulangan){
        $seri = $this->seri[$seriKe-1];
        if($seri == 3){
            $katas = $this->arrayKata3[$ulangan-1];
        }
        else if($seri == 4){
            $katas = $this->arrayKata4[$ulangan-1];
        }
        else if($seri == 5){
            $katas = $this->arrayKata5[$ulangan-1];
        }
        else if($seri == 6){
            $katas = $this->arrayKata6[$ulangan-1];
        }
        else if($seri == 7){
            $katas = $this->arrayKata7[$ulangan-1];
        }
        $next = 'reading.main.kontrol.1.pernyataan';
        $nextParam = ['ulangan'=>$ulangan, 'seriKe'=>$seriKe];
        return view('reading.main.kontrol.1.kata', compact('katas', 'next', 'nextParam'));
    }
    public function pernyataan1($seriKe,$ulangan){
        $seri = $this->seri[$seriKe-1];
        if($seri == 3){
            $pernyataan = $this->arrayPernyataan3[$ulangan-1];
        }
        else if($seri == 4){
            $pernyataan = $this->arrayPernyataan4[$ulangan-1];
        }
        else if($seri == 5){
            $pernyataan = $this->arrayPernyataan5[$ulangan-1];
        }
        else if($seri == 6){
            $pernyataan = $this->arrayPernyataan6[$ulangan-1];
        }
        else if($seri == 7){
            $pernyataan = $this->arrayPernyataan7[$ulangan-1];
        }
        $next = 'reading.main.kontrol.1.recall1';
        $nextParam = ['ulangan'=>$ulangan, 'seriKe'=>$seriKe];
        return view('reading.main.kontrol.1.pernyataan', compact('pernyataan', 'next', 'nextParam'));
    }
    public function recall11($seriKe,$ulangan){
        $seri = $this->seri[$seriKe-1];
        $next = 'reading.main.kontrol.1.postRecall1';
        $nextParam = ['ulangan'=>$ulangan, 'seriKe'=>$seriKe];
        return view('reading.main.kontrol.1.recall1', compact('next', 'nextParam', 'seri'));
    }
    public function postRecall11($seriKe,$ulangan, Request $request){
        $seri = $this->seri[$seriKe-1];
        // dd($request);
        $next = 'reading.main.kontrol.1.recall2';
        $nextParam = ['ulangan'=>$ulangan, 'seriKe'=>$seriKe];
        return redirect()->route($next, $nextParam);
    }
    public function recall21($seriKe,$ulangan){
        $seri = $this->seri[$seriKe-1];
        $next = 'reading.main.kontrol.1.postRecall2';
        $nextParam = ['ulangan'=>$ulangan, 'seriKe'=>$seriKe];
        return view('reading.main.kontrol.1.recall2', compact('next', 'nextParam', 'seri'));
    }
    public function postRecall21($seriKe, $ulangan, Request $request){
        $seri = $this->seri[$seriKe-1];
        // dd($request);
        $ulangan+=1;
        $next = 'reading.main.kontrol.1.kata';
        if($ulangan <= 3){
            $nextParam = ['ulangan'=>$ulangan, 'seriKe'=>$seriKe];
        }else{
            $nextParam = ['ulangan'=>1, 'seriKe'=>$seriKe+1];
            // dd($ulangan);
        }
        return redirect()->route($next, $nextParam);
    }
}
