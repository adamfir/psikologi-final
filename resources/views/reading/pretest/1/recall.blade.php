@extends('layouts.custom1') 
@section('title') ???
@endsection
 
@section('styles')
<style>
    @keyframes fadeInOut {
        0% {
            opacity: 0;
        }

        45% {
            opacity: 1;
        }

        100% {
            opacity: 0%;
        }
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        50% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    .animateTanda {
        top: 0vh;
        z-index: 1;
        opacity: 0;
        animation-name: fadeInOut;
        animation-duration: 3s;
    }

    .animateInput {
        top: 0vh;
        z-index: 99;
        animation-name: fadeIn;
        animation-duration: 5s;
    }
</style>
@endsection
 
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-end lg-12 md-12 mb-12" style="height:8vh">
        <div>
            <h5>Waktu: <span id="time">00:00</span></h5>
        </div>
        <div>
            <p>Halo, Adam Firdaus!</p>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center lg-12 md-12 mb-12" style="height:92vh">
        <div style="text-align:center">
            <div class="animateTanda">
                <h1><b>???</b></h1>
            </div>
            <div class="animateInput">
                <form action="{{route('reading.pretest.1.postRecall1')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Kata 1</span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Kata 2</span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Kata 3</span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        {{-- <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Kata 3</span>
                        </div>
                        <input type="text" class="form-control"> --}}
                        <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
 
@section('scripts')
<script>
    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        var submit = document.getElementById('submitButton');
        setInterval(function () {
            minutes = parseInt(timer / 60, 10)
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                timer = 0;
                submit.click();
                // window.location.href = "{{route('reading.pretest.1.pernyataan')}}";
            }
        }, 1000);
    }

    window.onload = function () {
        var jumlahKata = 3,
            time = 3 + 5*jumlahKata,
            display = document.querySelector('#time');
        startTimer(time, display);
    };
</script>
@endsection