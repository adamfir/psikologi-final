@extends('layouts.custom1') 
@section('title')
    Recall 1
@endsection
@section('styles')
    <style>

    </style>
@endsection
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-end lg-12 md-12 mb-12" style="height:8vh">
        <div>
            <h5>Waktu: 5s</h5>
        </div>
        <div>
            <p>Halo, Adam Firdaus!</p>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center lg-12 md-12 mb-12" style="height:92vh">
        <div>
            <div class="form-group">
              <label for="">Tuliskan 3 kata terakhir pada kalimat terakhir</label>
              <input type="text"
                class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="animate3 d-flex justify-content-end">
                <a href="{{route('contoh.selesai')}}"><button type="submit" name="" id="" class="btn btn-primary" btn-lg btn-block>Kirim</button></a>
            </div>
        </div>
    </div>
</div>
@endsection