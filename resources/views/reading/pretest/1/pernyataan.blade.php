@extends('layouts.custom1') 
@section('title')
    Pernyataan
@endsection
@section('styles')
    <style>

    </style>
@endsection
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-end lg-12 md-12 mb-12" style="height:8vh">
        <div>
            <h5>Waktu: <span id="time">00:00</span></h5>
        </div>
        <div>
            <p>{{Auth::user()->name}}</p>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center lg-12 md-12 mb-12" style="height:92vh">
        <div id="pertanyaan" class="d-flex justify-content-between" style="width:100vw">
            <div>
                <a href="#"><button type="button" name="" id="" class="btn btn-danger" btn-lg btn-block>Salah</button></a>
            </div>
            <div>
                <h3>Kelinci bisa terbang tinggi.</h3>
            </div>
            <div>
                <a href="#"><button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Benar</button></a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10)
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                timer = 0;
                window.location.href = "{{route('reading.pretest.1.recall')}}";
            }
        }, 1000);
    }

    window.onload = function () {
        var time = 8,
            display = document.querySelector('#time');
        startTimer(time, display);
    };
    </script>
@endsection