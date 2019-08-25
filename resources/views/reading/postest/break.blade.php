@extends('layouts.custom1') 
@section('title')
    Array Span Task Selesai
@endsection
@section('styles')
    <style>
        
    </style>
@endsection
@section('content')
<div class="container">
    <div class="d-flex justify-content-end align-items-end lg-6 md-6 mb-6" style="height:8vh">
        <div>
            <p>{{Auth::user()->name}}</p>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center lg-6 md-6 mb-6" style="height:92vh">
        <div>
            <h1>Reading Span Task Selesai</h1><br>
            <h3>Terima kasih anda telah menyelesaikan seluruh tes yang ada dalam Reading Span Task.</h3><br>
            <h3>Selanjutnya anda akan mengerjakan Corsi Block Tapping Task.</h3><br>
            <h3>Silahkan tekan tombol di bawah bila anda telah siap.</h3><br>
            <div class="d-flex justify-content-end">
            @if(Auth::user()->type == 0)
            <a href="{{route('tester.intro.instruksi')}}"><button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Mulai Corsi Block Tapping Task</button></a>
            @else
            <a href="{{route('tester.control.intro.instruksi')}}"><button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Mulai Corsi Block Tapping Task</button></a>
            @endif
            </div>
        </div>
    </div>
</div>
@endsection