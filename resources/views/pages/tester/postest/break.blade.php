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
            <h1>Corsi Block Tapping Task Selesai</h1><br>
            <h3>Terima kasih anda telah menyelesaikan seluruh tes yang ada dalam Corsi Block Tapping Task.</h3><br>
            <h3>Seluruh Tes telah selesai selesai. Terima kasih telah berpartisipasi</h3><br>
            <!-- <div class="d-flex justify-content-end">
                <a href="{{route('tester.moodQuiz.instruksi')}}"><button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Mulai Mood Quiz</button></a>
            </div> -->
        </div>
    </div>
</div>
@endsection