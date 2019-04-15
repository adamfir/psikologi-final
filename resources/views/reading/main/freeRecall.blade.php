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
            <h5>Waktu: <span id="time">00</span> detik</h5>
        </div>
        <div>
            <p>{{Auth::user()->name}}</p>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center lg-12 md-12 mb-12" style="height:92vh">
        <div style="text-align:center">
            <div class="animateTanda">
                <h1><b>???</b></h1>
                <p>Isi tanpa harus berurutan</p>
            </div>
            <div class="animateInput">
                <form action="{{route($next,$nextParam)}}" method="post">
                    @csrf
                    @for ($i = 0; $i < 2; $i++)
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
    }
</script>
@endsection