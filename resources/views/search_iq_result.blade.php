@extends('layouts.custom1') 
@section('title')
    Cari hasil tes IQ dan Memory
@endsection
@section('styles')
    <style>
        .card {
            border: none;
            background-color: ;
        }
    </style>
@endsection
@section('content')
<div class="container">
    <div class="lg-3 md-3 mb-3">
        <div class="card">
            <div class="card-body" style="">
                <h4 class="card-title">Silahkan masukan email anda.</h4>
                <form action="{{ route('result.iq.search') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" required> 
                        @if ($errors->has('email'))
                            <small id="helpId" class="form-text text-muted"><p style="color:#FF8484">{{ $errors->first('email') }}</p></small>
                        @endif
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" name="" id="" class="btn btn-primary" btn-lg btn-block>Cari Hasil</button>
                    </div>
                </form>
            </div>
        </div>
        @if ($result = Session::get('result'))
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Hasil Tes IQ dan Memory</h4>
                <form action="#">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" placeholder="{{$result->name}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" placeholder="{{$result->email}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Skor IQ</label>
                            <input type="text" class="form-control" placeholder="{{$result->iq}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Klasifikasi IQ*</label>
                            <input type="text" class="form-control" placeholder="{{$result->iq_category}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Skor Memori</label>
                            <input type="text" class="form-control" placeholder="{{$result->memory}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Klasifikasi Memori*</label>
                            <input type="text" class="form-control" placeholder="{{$result->memory_category}}" disabled>
                        </div>
                </form>
                <br>
                <h4>*Keterangan klasifikasi untuk skor IQ dan Memori</h4><br>
                <table border=1>
                    <thead>
                        <th style="width:150px">Rentang Skor</th>
                        <th style="width:150px">Klasifikasi</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>140-169</td>
                            <td>Very Superior</td>
                        </tr>
                        <tr>
                            <td>120-139</td>
                            <td>Superior</td>
                        </tr>
                        <tr>
                            <td>110-119</td>
                            <td>High Average</td>
                        </tr>
                        <tr>
                            <td>90-109</td>
                            <td>Average</td>
                        </tr>
                        <tr>
                            <td>80-89</td>
                            <td>Low Average</td>
                        </tr>
                        <tr>
                            <td>70-79</td>
                            <td>Borderline</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection