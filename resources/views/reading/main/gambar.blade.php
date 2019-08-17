@extends('layouts.custom1') 
@section('title')
    Reading Span Test
@endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('w3school/bootstrap.min.css')}}">
    <script src="{{asset('w3school/jquery.min.js')}}"></script>
    <script src="{{asset('w3school/bootstrap.min.js')}}"></script>
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
        .animate0{
            top: 0vh;
            z-index: 1;
            opacity: 0;
            animation-name: fadeInOut;
            animation-duration: 2s;
        }
        .animate1{
            top: 0vh;
            margin-top: -4vh;
            z-index: 2;
            opacity: 0;
            animation-name: fadeInOut;
            animation-delay: 2s;
            animation-duration: 2s;
        }
        .animate2{
            top: 0vh;
            margin-top: -4vh;
            z-index: 3;
            opacity: 0;
            animation-name: fadeInOut;
            animation-delay: 4s;
            animation-duration: 2s;
        }
        .animate3{
            top: 0vh;
            margin-top: -4vh;
            z-index: 4;
            opacity: 0;
            animation-name: fadeInOut;
            animation-delay: 6s;
            animation-duration: 2s;
        }
        .animate4{
            top: 0vh;
            margin-top: -4vh;
            z-index: 5;
            opacity: 0;
            animation-name: fadeInOut;
            animation-delay: 8s;
            animation-duration: 2s;
        }
        .animate5{
            top: 0vh;
            margin-top: -4vh;
            z-index: 6;
            opacity: 0;
            animation-name: fadeInOut;
            animation-delay: 10s;
            animation-duration: 2s;
        }
        .animate6{
            top: 0vh;
            margin-top: -4vh;
            z-index: 7;
            opacity: 0;
            animation-name: fadeInOut;
            animation-delay: 12s;
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
            <div class="carousel slide" data-ride="carousel" id="myCarousel" data-pause="false">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    @for ($i = 1; $i < 8; $i++)
                        <li data-target="#myCarousel" data-slide-to="{{$i}}"></li>
                    @endfor
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{asset('img/'.$emosi.'/'.$seriGambar.'0.jpg')}}" alt="Gambar" style="height:80vh;">
                    </div>
                    @for ($i = 1; $i < 8; $i++)
                        <div class="item">
                            <img src="{{asset('img/'.$emosi.'/'.$seriGambar.$i.'.jpg')}}" alt="Gambar" style="height:80vh;">
                        </div>
                    @endfor
                </div>
            </div>
            {{-- @for ($i = 0; $i < 7; $i++)
                <div class="animate{{$i}}">
                    <img src="{{asset('img/positif/'.$seri.$i.'.jpg')}}" alt="Gambar">
                    <h1>Gambar ke-{{$i}}</h1>
                </div>
            @endfor --}}
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
                window.location.href = @json(route($next,$nextParam));
            }
        }, 1000);
    }

    window.onload = function () {
        var jumlahGambar = 8,
            time = 5*jumlahGambar-1,
            display = document.querySelector('#time');
        startTimer(time, display);
    };
    </script>
@endsection