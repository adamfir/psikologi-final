@extends('layouts.custom1') 
@section('title')
    Result
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
        .animate{
            top: 0vh;
            z-index: 1;
            opacity: 0;
            animation-name: fadeInOut;
            animation-duration: 4s;
            font-size: 100pt;
        }

    </style>
@endsection
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-end lg-12 md-12 mb-12" style="height:8vh">
        {{-- <div>
            <h5><span id="time">00:00</span></h5>
        </div> --}}
        <div>
            <p></p>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center lg-6 md-6 mb-6" style="height:92vh">
        <div style="text-align:center">
            <div class="row">
                <div class="col-md-12">
                    <h4>Skor Latihan Pernyataan</h4>
                    <table class="table">
                        <thead>
                            <th scope="col">Total Pernyataan</th>
                            <th scope="col">Benar</th>
                            <th scope="col">Salah</th>
                        </thead>
                        <tbody>
                            <td>{{session('iterasiLatihanPernyataan')+1}}</td>
                            <td>{{session('pernyataanBenar')}}</td>
                            <td>{{session('pernyataanSalah')}}</td>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <a href="{{route('reading.main')}}"><button class="btn btn-primary">LANJUTKAN</button></a>
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
                // disini redirect ke deskrispi latihan seri kata
            }
        }, 1000);
    }

    window.onload = function () {
        var time = 4,
            display = document.querySelector('#time');
        startTimer(time, display);
    };
    </script>
@endsection

{{-- // window.location.href = @json(route($next,$nextParam)); --}}