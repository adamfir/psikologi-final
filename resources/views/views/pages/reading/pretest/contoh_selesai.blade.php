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
            <h3>Contoh pretest selesai</h3>
            <p>
                Anda telah menyelesaikan contoh pretest. Silahkan lanjutkan untuk melakukan pretest.
            </p>
            <div class="d-flex justify-content-between">
                <a href="{{route('instruksi')}}"><button type="button" name="" id="" class="btn btn-light" btn-lg btn-block>Belum mengerti, coba lagi.</button></a>            
                <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Lanjutkan</button>            
            </div>
        </div>
    </div>
</div>
@endsection