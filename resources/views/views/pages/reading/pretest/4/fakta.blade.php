@extends('layouts.custom1') 
@section('title')
    Pretest 1
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
            86% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        .animate1{
            top: 0vh;
            z-index: 1;
            opacity: 0;
            animation-name: fadeInOut;
            animation-duration: 4s;
        }
        .animate2{
            top: 0vh;
            margin-top: -4vh;
            z-index: 2;
            opacity: 0;
            animation-name: fadeInOut;
            animation-delay: 4s;
            animation-duration: 4s;
        }
        .animate3{
            top: 0vh;
            margin-top: -4vh;
            z-index: 3;
            opacity: 0;
            animation-name: fadeInOut;
            animation-delay: 8s;
            animation-duration: 4s;
        }
        .animate4{
            top: 0vh;
            margin-top: -4vh;
            z-index: 4;
            opacity: 0;
            animation-name: fadeInOut;
            animation-delay: 12s;
            animation-duration: 4s;
        }
        .animate5{
            top: 0vh;
            margin-top: -4vh;
            z-index: 5;
            opacity: 0;
            animation-name: fadeInOut;
            animation-delay: 16s;
            animation-duration: 4s;
        }
        .animate6{
            top: 0vh;
            margin-top: -4vh;
            z-index: 6;
            opacity: 0;
            animation-name: fadeInOut;
            animation-delay: 20s;
            animation-duration: 4s;
        }
        .animate-button{
            top: 0vh;
            z-index: 99;
            animation-name: fadeIn;
            animation-duration: 28s;
        }
    </style>
@endsection
@section('content')
<div class="container">
    <div class="d-flex justify-content-end align-items-end lg-6 md-6 mb-6" style="height:8vh">
        <div>
            <p>Halo, Adam Firdaus!</p>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center lg-6 md-6 mb-6" style="height:92vh">
        <div style="text-align:center">
            <div class="animate1">
                <h3>Gajah menggunakan belalainya untuk bernapas.</h3>
            </div>
            <div class="animate2">
                <h3>Belalainya digunakan juga mengambil makanan.</h3>
            </div>
            <div class="animate3">
                <h3>Bayi gajah dalam Bahasa Inggris disebut calf.</h3>
            </div>
            <div class="animate4">
                <h3>Bayi gajah memasukan belali ke mulutnya untuk menenangkan.</h3>
            </div>
            <div class="animate5">
                <h3>Gajah suka berguling di lumpur.</h3>
            </div>
            <div class="animate6">
                <h3>Kulit gajah keriput dan sangat sensitif.</h3>
            </div>
            <div class="animate-button d-flex justify-content-center">
                <a href="{{route('contoh.pertanyaan')}}"><button type="submit" name="" id="" class="btn btn-primary" btn-lg btn-block>Lanjutkan</button></a>
            </div>
        </div>
    </div>
</div>
@endsection