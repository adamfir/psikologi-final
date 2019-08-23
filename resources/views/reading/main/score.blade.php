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
            20% {
                opacity: 1;
            }
            90% {
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
            67% {
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
            animation-duration: 10s;
        }
        .animateNext {
            top: 0vh;
            /* margin-top: -8vh; */
            z-index: 1;
            animation-name: fadeIn;
            animation-duration: 15s;
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
    <div class="d-flex justify-content-center align-items-center lg-12 md-12 mb-12" style="height:92vh">
        <div class="score">
            <div class="animateScore">
                {{-- <h1>Skor Anda: <br> 
                    Rata-rata waktu menjawab 2 detik <br>
                    Nilai: 2 benar, 1 salah
                </h1> --}}
                <table class="table">
                    <thead>
                        <th></th>
                        <th scope="col">Benar</th>
                        <th scope="col">Salah</th>
                        <th scope="col">Skor</th>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Pernyataan</th>
                            <td>{{(Session::get('mainHasilPernyataan')?1:0)}}</td>
                            <td>{{(Session::get('mainHasilPernyataan')?0:1)}}</td>
                            <td>{{(Session::get('mainHasilPernyataan')?100:0)}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Free Recall</th>
                            <td>{{Session::get('mainHasilFreeRecall')[0]}}</td>
                            <td>{{Session::get('mainHasilFreeRecall')[1]}}</td>
                            <td>{{100*Session::get('mainHasilFreeRecall')[0]/(Session::get('mainHasilFreeRecall')[0]+Session::get('mainHasilFreeRecall')[1])}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Serial Recall</th>
                            <td>{{Session::get('mainHasilSerialRecall')[0]}}</td>
                            <td>{{Session::get('mainHasilSerialRecall')[1]}}</td>
                            <td>{{100*Session::get('mainHasilSerialRecall')[0]/(Session::get('mainHasilSerialRecall')[0]+Session::get('mainHasilSerialRecall')[1])}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="animateNext">
                @if ($seri==2 && $iterasi==0)
                    <h1>Latihan selesai</h1>
                    <h1>Memulai tes utama</h1>
                @else
                    {{-- <h1>Persiapan iterasi selanjutnya ...</h1> --}}
                @endif
                {{-- @if ($seri<2 && $iterasi<2)
                    <h1>Latihan iterasi {{$iterasi+1}} selesai.</h1>
                    <a href="{{route('reading.main.fokus',['seri'=>$seri,'iterasi'=>$iterasi+1])}}"><button type="button" class="btn btn-primary">Lanjut iterasi {{$iterasi+2}}</button></a>
                @else
                    <h1>Latihan selesai.</h1>
                    <a href="{{route('reading.main.fokus',['seri'=>1,'iterasi'=>0])}}"><button type="button" class="btn btn-primary">Mulai tes utama</button></a>
                @endif --}}
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
                window.location.href = @json(route($next,$nextParam));
            }
        }, 1000);
    }

    window.onload = function () {
        var time = 15,
            display = document.querySelector('#time');
        startTimer(time, display);
    };
    </script>
@endsection