<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadingPretestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function kata1(){
        return view('reading.pretest.1.kata');
    }

    public function pernyataan1(){
        return view('reading.pretest.1.pernyataan');
    }

    public function recall1(){
        return view('reading.pretest.1.recall');
    }
    
    public function postRecall1(){
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
