@extends('layouts.custom1') 
@section('title')
    Instruksi Pretest dan Postest
@endsection
@section('styles')
    <style>
        
    </style>
@endsection
@section('content')
<div class="container">
    <div class="d-flex justify-content-end align-items-end lg-6 md-6 mb-6" style="height:8vh">
        <div>
            <p>Halo, Adam Firdaus!</p>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center lg-6 md-6 mb-6" style="height:92vh">
        <div>
            <h3>Instruksi Pretest dan Postest</h3>
            <p>
                Bacalah dalam hati bacaan di setiap soal berikut ini. Kemudian jawab setiap pernyataan dengan menekan <strong>Benar</strong> 
                jika pernyataan benar dan <strong>Salah</strong> jika pernyataan salah. Setiap pernyataan akan menghilang setelah beberapa detik. 
                Setelah itu Anda diminta untuk menuliskan beberapa kata terakhir pada kalimat terakhir sesuai perintah dengan tepat.
            </p>
            <div class="d-flex justify-content-end">
                <a href="{{route('contoh.fakta')}}"><button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Contoh</button></a>            
            </div>
        </div>
    </div>
</div>
@endsection