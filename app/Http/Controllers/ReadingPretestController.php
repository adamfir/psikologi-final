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
    
    // public function postRecall2(){
    //     return view('reading.pretest.2.recall');
    // }
}
