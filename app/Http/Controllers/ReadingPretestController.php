<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadingPretestController extends Controller
{
    private $arraykata3;
    private $arraykata4;
    private $arraykata5;
    private $arraykata6;
    private $arraykata7;
    private $pernyataan1;
    private $pernyataan2;
    private $pernyataan3;
    private $pernyataan4;
    private $pernyataan5;
    private $pernyataan6;
    public function __construct()
    {
        $this->middleware('auth');
        $this->arraykata3 = ['Batu','Busur','Cermin'];
        $this->arraykata4 = ['Dompet','Filter','Gembok','Kamus'];
        $this->arraykata5 = ['Kunci','Kulkas','Lulur','Pipa','Pistol'];
        $this->arraykata6 = ['Suling','Artis','Dapur','Ngarai','Bambu','Kakap'];
        $this->arraykata7 = ['Pisang','Sirih','Lokal','Album','Benang','Debu','Gula'];
        $this->pernyataan1 = ['Pernyataan 1 Lorem ipsum doler sit amet', 'true'];
        $this->pernyataan2 = ['Pernyataan 2 Lorem ipsum doler sit amet', 'true'];
        $this->pernyataan3 = ['Pernyataan 3 Lorem ipsum doler sit amet', 'true'];
        $this->pernyataan4 = ['Pernyataan 4 Lorem ipsum doler sit amet', 'true'];
        $this->pernyataan5 = ['Pernyataan 5 Lorem ipsum doler sit amet', 'true'];
        $this->pernyataan6 = ['Pernyataan 6 Lorem ipsum doler sit amet', 'true'];
        $this->pernyataan7 = ['Pernyataan 7 Lorem ipsum doler sit amet', 'true'];
    }

    public function kata1(){
        $kata = $this->arraykata3;
        return view('reading.pretest.1.kata', compact('kata'));
    }

    public function pernyataan1(){
        $pernyataan = $this->pernyataan1;
        return view('reading.pretest.1.pernyataan', compact('pernyataan'));
    }

    public function postPernyataan1($jawaban){
        $result = ($jawaban == $this->pernyataan1[1] ? true: false);
        // TODO: simpan hasil ke DB
        // 
        // 
        return redirect('reading/pretest/1/recall');
    }

    public function recall1(){
        return view('reading.pretest.1.recall');
    }
    
    public function postRecall1(Request $req){
        dd($req);
        return redirect('reading/pretest/2/kata');
    }

    public function kata2(){
        return view('reading.pretest.2.kata');
    }

    public function pernyataan2(){
        return view('reading.pretest.2.pernyataan');
    }

    public function recall2(){
        return view('reading.pretest.2.recall');
    }
    
    public function postRecall2(){
        return redirect('reading/pretest/3/kata');
    }

    public function kata3(){
        return view('reading.pretest.3.kata');
    }

    public function pernyataan3(){
        return view('reading.pretest.3.pernyataan');
    }

    public function recall3(){
        return view('reading.pretest.3.recall');
    }
    
    public function postRecall3(){
        return redirect('reading/pretest/4/kata');
    }

    public function kata4(){
        return view('reading.pretest.4.kata');
    }

    public function pernyataan4(){
        return view('reading.pretest.4.pernyataan');
    }

    public function recall4(){
        return view('reading.pretest.4.recall');
    }
    
    public function postRecall4(){
        return redirect('reading/pretest/5/kata');
    }

    public function kata5(){
        return view('reading.pretest.5.kata');
    }

    public function pernyataan5(){
        return view('reading.pretest.5.pernyataan');
    }

    public function recall5(){
        return view('reading.pretest.5.recall');
    }
    
    public function postRecall5(){
        return redirect('reading/pretest/done');
    }
}
