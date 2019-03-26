@extends('layouts.custom1') 
@section('title')
    Pretest
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
            75% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        .animate1{
            top: 0vh;
            z-index: 1;
            opacity: 0;
            animation-name: fadeInOut;
            animation-duration: 2s;
        }
        .animate2{
            top: 0vh;
            margin-top: -4vh;
            z-index: 2;
            opacity: 0;
            animation-name: fadeInOut;
            animation-delay: 2s;
            animation-duration: 2s;
        }
        .animate3{
            top: 0vh;
            margin-top: -4vh;
            z-index: 3;
            opacity: 0;
            animation-name: fadeInOut;
            animation-delay: 4s;
            animation-duration: 2s;
        }
        .animate4{
            top: 0vh;
            margin-top: -4vh;
            z-index: 3;
            opacity: 0;
            animation-name: fadeInOut;
            animation-delay: 6s;
            animation-duration: 2s;
        }
        .animate5{
            top: 0vh;
            margin-top: -4vh;
            z-index: 3;
            opacity: 0;
            animation-name: fadeInOut;
            animation-delay: 8s;
            animation-duration: 2s;
        }
        .animate6{
            top: 0vh;
            margin-top: -4vh;
            z-index: 3;
            opacity: 0;
            animation-name: fadeInOut;
            animation-delay: 10s;
            animation-duration: 2s;
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
            <p>{{Auth::user()->name}}</p>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center lg-6 md-6 mb-6" style="height:92vh">
        <div style="text-align:center">
            <div class="animate1">
                <h3>Kata 1.</h3>
            </div>
            <div class="animate2">
                <h3>Kata 2.</h3>
            </div>
            <div class="animate3">
                <h3>Kata 3.</h3>
            </div>
            <div class="animate4">
                <h3>Kata 4.</h3>
            </div>
            <div class="animate5">
                <h3>Kata 5.</h3>
            </div>
            <div class="animate6">
                <h3>Kata 6.</h3>
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
                window.location.href = "{{route('reading.pretest.4.pernyataan')}}";
            }
        }, 1000);
    }

    window.onload = function () {
        var jumlahKata = 6,
            time = 2*jumlahKata,
            display = document.querySelector('#time');
        startTimer(time, display);
    };
    </script>
@endsection