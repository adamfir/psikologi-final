@extends('layouts.custom1') 
@section('title')
    Instruksi Pretest
@endsection
@section('styles')
    <style>
        
    </style>
@endsection
@section('content')
<div class="container">
    <div class="d-flex justify-content-end align-items-end lg-6 md-6 mb-6" style="height:8vh">
        <div>
            <p>{{Auth::user()->name}}</p>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center lg-6 md-6 mb-6" style="height:92vh">
        <div>
            <h3>Instruksi Untuk Pretest dan Postest</h3>
            <p>
                1. Bacalah seri kata benda pada layar monitor, yang akan disajikan sekali secara singkat tanpa pengulangan. Cobalah untuk mengingat kata benda yang disajikan sesuai urutannya. 
            </p>
            <p>
                2. Setelah kata benda disajikan, akan ada kalimat pernyataan tentang suatu informasi. 
            </p>
            <p>
                3. Anda akan diminta untuk menjawab pertanyaan, apakah pernyataan tersebut sesuai dengan fakta. 
                <br> - Jika sesuai dengan fakta, maka Anda pilih <b>Benar</b> dengan menekan <b>tombol Benar</b> di sebelah kanan kalimat pertanyaan. 
                <br> - Jika tidak sesuai dengan fakta, maka Anda pilih <b>Salah</b> dengan menekan <b>tombol Salah</b> di sebelah kiri kalimat pertanyaan. 
            </p>
            <p>
                4. Anda diminta untuk menuliskan seri kata secara berurutan dengan <b>Tepat</b>, setelah muncul tanda <b>???</b> 
            </p>
            <p>
                Apakah instruksi ini sudah cukup jelas dan dapat dipahami? Jika ada hal yang kurang jelas, silakan bertanya kepada peneliti.
            </p>
            <p>
                Tekan tombol di bawah untuk melanjutkan dan memulai Pre-test (dengan ini anda telah bersedia untuk menjadi partisipan dalam penelitian ini).
            </p>
            <div class="d-flex justify-content-end">
                <a href="{{route('reading.pretest.fokus',['seri'=>0,'iterasi'=>0])}}"><button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Lanjut ke Pre-test</button></a>
            </div>
        </div>
    </div>
</div>
@endsection