@extends('layouts.custom1') 
@section('title')
    Pernyataan
@endsection
@section('styles')
    <style>
        .score{
            text-align: center;
        }
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
            80% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        .animateScore {
            top: 0vh;
            z-index: 1;
            opacity: 0;
            animation-name: fadeInOut;
            animation-duration: 8s;
        }
        .animateNext {
            top: 0vh;
            /* margin-top: -8vh; */
            z-index: 1;
            animation-name: fadeIn;
            animation-duration: 10s;
        }
    </style>
@endsection
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-end lg-12 md-12 mb-12" style="height:8vh">
        <div>
            {{-- <h5>Waktu: <span id="time">00:00</span></h5> --}}
        </div> 
        <div>
            <p>{{Auth::user()->name}}</p>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center lg-12 md-12 mb-12" style="height:92vh">
        <div class="score">
            <div class="animateScore">
                <h1>Skor Anda: <br> 
                    Rata-rata waktu menjawab 2 detik <br>
                    Nilai: 2 benar, 1 salah
                </h1>
            </div>
            <div class="animateNext">
                <h1>Latihan selesai. Silahkan melanjutkan tes utama.</h1>
                <a href="#"><button type="button" class="btn btn-primary">Lanjutkan</button></a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {{-- <script>
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
                
            }
        }, 1000);
    }

    window.onload = function () {
        var time = 8,
            display = document.querySelector('#time');
        startTimer(time, display);
    };
    </script> --}}
@endsection