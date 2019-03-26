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
            <p>{{Auth::user()->name}}</p>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center lg-6 md-6 mb-6" style="height:92vh">
        <div>
            <h3>Anda telah melaksanakan bagian latihan dalam eksperimen ini.</h3>
            <p>
                Tahap selanjutnya, Anda akan masuk dalam bagian TUGAS Pengerjaan bagian tes keseluruhannya sama seperti pada bagian latihan.
            </p>
            <p>
                Dalam bagian tugas ini, terdapat 15 item kalimat pernyataan yang berisi perintah untuk menjawab <b>Benar</b> atau <b>Salah</b> dan mengingat seri kata. 
            </p>
            <p>
                Apabila ada hal yang kurang jelas, silakan mengajukan pertanyaan kepada peneliti.
            </p>
            <p>
                Tekan tombol di bawah untuk melanjutkan dan memulai tes.
            </p>
            <div class="d-flex justify-content-end">
                <a href="{{route('reading.main.kontrol.0.kata')}}"><button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Mulai Tes</button></a>
            </div>
        </div>
    </div>
</div>
@endsection