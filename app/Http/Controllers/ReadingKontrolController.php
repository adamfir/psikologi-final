<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadingKontrolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
}
