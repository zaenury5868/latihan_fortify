@extends('template')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 login-section-wrapper">
                <div class="brand-wrapper">
                    <img src="{{ asset('/images/logo.svg') }}" alt="logo" class="logo">
                </div>
                <div class="login-wrapper my-auto">
                    <p class="h3 fw-bolder mb-4">Register</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="name">Nama lengkap</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="masukan nama lengkap" >
                        </div>
                        <div class="form-group mb-4">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="masukan email valid" >
                            @error('email') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">Kata sandi</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="masukan kata sandi" autocomplete="new-password" >
                            @error('password') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">Konfirmasi kata sandi</label>
                            <input type="password" name="password_confirmation" id="password-confirm" class="form-control" placeholder="konfirmasi kata sandi" autocomplete="new-password" >
                        </div>
                        <input name="register" id="register" class="btn btn-block login-btn" type="submit" value="Register">
                    </form>
                    <p class="login-wrapper-footer-text">sudah punya akun? <a href="{{ route('login') }}" class="text-reset">Log in disini</a></p>
                </div>
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="{{ asset('/images/login.jpg') }}" alt="login image" class="login-img">
            </div>
        </div>
    </div>
@endsection