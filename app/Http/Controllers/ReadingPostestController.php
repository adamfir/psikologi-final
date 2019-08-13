<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadingPostestController extends Controller
{
    private $arrayKata;
    private $arrayPernyataan;
    private $seri;
    public function __construct()
    {
        $this->middleware('auth');
        $this->seri = [0,2,1,3,4]; //3,5,4,6,7
        $this->arrayKata = [
            [
                ['Batu','Busur','Cermin'],
                ['Motor','Mulut','Pagar']
            ],
            [
                ['Dompet','Filter','Gembok','Kamus'],
                ['Paku','Palu','Panda','Papan']
            ],
            [
                ['Kunci','Kulkas','Lulur','Pipa','Pistol'],
                ['Pasir','Payung','Pensil','Perut','Pintu']
            ],
            [
                ['Suling','Artis','Dapur','Ngarai','Bambu','Kakap'],
                ['Pipa','Pipi','Piring','Pulau','Rambut','Roda']
            ],
            [
                ['Pisang','Sirih','Lokal','Album','Benang','Debu','Gula'],
                ['Roti','Rusa','Sabuk','Sapi','Sapu','Semut','Sisir']
            ]
        ];
        $this->arrayPernyataan=[
            [['Panda hanya hidup di Indonesia', 'false'],['Katak selalu hidup di air','false']],  
            [['Singa jantan  memiliki surai', 'true'],['Mendung tidak selalu hujan','true']],
            [['Simpanse berlengan panjang', 'true'],['Angin adalah udara yang tertahan','false']],
            [['Semua sayuran berwarna hijau', 'false'],['Air danau tidak selalu tawar','false']],
            [['Kelinci dapat terbang tinggi', 'false'],['Nil  danau terbesar di dunia','false']]
        ];
    }
    public function index(){
        return view('reading.postest.index');
    }
}
