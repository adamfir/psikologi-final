<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function instruksi_pretest(){
        return view('reading.pretest.instruksi');
    }
}
