@extends('template')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 login-section-wrapper">
                <div class="brand-wrapper">
                    <img src="{{ asset('/images/logo.svg') }}" alt="logo" class="logo">
                </div>
                <div class="login-wrapper my-auto">
                    <p class="h3 fw-bolder">Konfirmasi password</p>
                    <form method="POST" action="{{ url('user/confirm-password') }}">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="password">Kata sandi</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="masukan kata sandi" >
                            @error('password') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <input name="confirm" id="confirm" class="btn btn-block login-btn" type="submit" value="Konfirmasi">
                    </form>
                </div>
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="{{ asset('/images/login.jpg') }}" alt="login image" class="login-img">
            </div>
        </div>
    </div>
@endsection