@extends('layouts.custom1') 
@section('title')
    Upload Hasil Tes IQ & Memory
@endsection
@section('styles')
    <style>
        .login-box {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .card {
            border: none;
            background-color: ;
        }
    </style>
@endsection
@section('content')
<div class="container">
    <div class="d-flex justify-content-center align-items-center lg-3 md-3 mb-3" style="height:100vh">
        <div class="card">
            @if ($message = Session::get('success'))
                <h1>{{$message}}</h1>
            @endif
            <div class="card-body" style="width:50vw">
                <h4 class="card-title">Silahkan upload hasil tes IQ & Memory.</h4>
                <form action="{{ route('upload.iq.result.post') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="file" required> 
                        {{-- <label for="">file</label> --}}
                        @if ($errors->has('file'))
                            {{-- <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('file') }}</strong>
                            </span> --}}
                            <small id="helpId" class="form-text text-muted"><p style="color:#FF8484">{{ $errors->first('file') }}</p></small>
                        @endif
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" name="" id="" class="btn btn-primary" btn-lg btn-block>Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection