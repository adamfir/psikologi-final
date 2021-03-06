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
        animation-duration: 4s;
    }

    .animateInput {
        top: 0vh;
        z-index: 99;
        animation-name: fadeIn;
        animation-duration: 6s;
    }
</style>
@endsection
 
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-end lg-12 md-12 mb-12" style="height:8vh">
        <div>
            <h5><span id="time">00</span> detik</h5>
        </div>
        {{-- <div>
            <p>{{Auth::user()->name}}</p>
        </div> --}}
    </div>
    <div class="d-flex justify-content-center align-items-center lg-12 md-12 mb-12" style="height:92vh">
        <div style="text-align:center">
            <div class="animateTanda">
                <h1><b>???</b></h1>
                <h2>Tuliskan seri kata benda yang Anda ingat secara berurutan</h2>
            </div>
            <div class="animateInput">
                <form action="#" method="post">
                    @csrf
                    @for ($i = 0; $i < session('seriLatihanKata')+3; $i++)
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Kata {{$i+1}}</span>
                            </div>
                            <input type="text" name="kata[]" class="form-control">
                        </div>
                    @endfor
                    <div class="form-group">
                        <label class="sr-only" for="inputName">Waktu</label>
                        <input hidden type="text" class="form-control" name="waktu" id="inputTime" placeholder="">
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-primary" id="submitButton" onclick="getTime()">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
 
@section('scripts')
<script>
    var secondsLabel = document.getElementById("time");
    var totalSeconds = 0;
    function start(){
        setInterval(setTime, 1000);
    }
    function setTime() {
        ++totalSeconds;
        secondsLabel.innerHTML = pad(totalSeconds);
        // minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
    }
    function pad(val) {
        var valString = val + "";
        if (valString.length < 2) {
            return "0" + valString;
        } else {
            return valString;
        }
    }
    setTimeout(start,2000);
    function getTime(){
        var secondsLabel = document.getElementById("time").innerHTML;
        document.getElementById("inputTime").value = secondsLabel;
        // alert(secondsLabel);
    }
    // function startTimer(duration, display) {
    //     var timer = duration, minutes, seconds;
    //     var submit = document.getElementById('submitButton');
    //     setInterval(function () {
    //         minutes = parseInt(timer / 60, 10)
    //         seconds = parseInt(timer % 60, 10);

    //         minutes = minutes < 10 ? "0" + minutes : minutes;
    //         seconds = seconds < 10 ? "0" + seconds : seconds;

    //         display.textContent = minutes + ":" + seconds;

    //         if (--timer < 0) {
    //             timer = 0;
    //             submit.click();
    //         }
    //     }, 1000);
    // }

    // window.onload = function () {
    //     var jumlahKata = 3,
    //         time = 3 + 5*jumlahKata,
    //         display = document.querySelector('#time');
    //     startTimer(time, display);
    // };
</script>
@endsection