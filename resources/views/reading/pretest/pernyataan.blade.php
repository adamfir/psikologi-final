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
                <button type="submit" class="btn btn-danger" btn-lg btn-block
                    onclick="setJawaban('false')">Salah</button>
            </div>
            <div>
                <h3>{{$pernyataan[0]}}.</h3>
            </div>
            <div>
                <button type="submit" class="btn btn-primary" btn-lg btn-block
                    onclick="setJawaban('true')">Benar</button>
            </div>
        </div>
    </div>
</div>
<form action="{{route($next,['seri'=>$seri,'iterasi'=>$iterasi])}}" method="post">
    @csrf
    <input type="hidden" name="time_left" id="time_left" value="0">
    <input type="hidden" name="jawaban" id="jawaban" value="default">
    <button type="submit" id="submit_form"></button>
</form>

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
            document.getElementById('time_left').value=seconds;
            display.textContent = minutes + ":" + seconds;
            display.textContent = seconds;

            if (--timer < 0) {
                timer = 0;
                document.getElementById('submit_form').click();
                // window.location.href = @json(route($next,$nextParam));
            }
        }, 1000);
    }

    window.onload = function () {
        var time = 8,
            display = document.querySelector('#time');
        startTimer(time, display);
    };

    function setJawaban(jawaban){
        var input = document.getElementById('jawaban');
        input.value = jawaban;
        document.getElementById('submit_form').click();
    }
</script>
@endsection