@extends('layouts.custom1') 
@section('title')
    Login
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
            <div class="card-body" style="width:50vw">
                <h4 class="card-title">Selamat datang, silahkan masuk.</h4>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">email</label>
                        <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder=""> 
                        @if ($errors->has('email'))
                            {{-- <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span> --}}
                            <small id="helpId" class="form-text text-muted"><p style="color:#FF8484">{{ $errors->first('email') }}</p></small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder=""> 
                        @if ($errors->has('password'))
                            {{-- <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span> --}}
                            <small id="helpId" class="form-text text-muted"><p style="color:#FF8484">{{ $errors->first('password') }}</p></small>
                        @endif
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" name="" id="" class="btn btn-primary" btn-lg btn-block>Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection