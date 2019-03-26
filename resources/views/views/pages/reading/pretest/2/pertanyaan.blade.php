@extends('layouts.custom1') 
@section('title')
    Pertanyaan 1
@endsection
@section('styles')
    <style>

    </style>
@endsection
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-end lg-12 md-12 mb-12" style="height:8vh">
        <div>
            <h5>Waktu: 5s</h5>
        </div>
        <div>
            <p>Halo, Adam Firdaus!</p>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center lg-12 md-12 mb-12" style="height:92vh">
        <div id="pertanyaan" class="d-flex justify-content-between" style="width:100vw">
            <div>
                <a href="{{route('contoh.recall')}}"><button type="button" name="" id="" class="btn btn-danger" btn-lg btn-block>Salah</button></a>
            </div>
            <div>
                <h3>Kelinci  hidup sendirian dalam liang.</h3>
            </div>
            <div>
                <a href="{{route('contoh.recall')}}"><button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Benar</button></a>
            </div>
        </div>
    </div>
</div>
@endsection