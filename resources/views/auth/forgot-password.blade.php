@extends('template')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 login-section-wrapper">
                <div class="brand-wrapper">
                    <img src="{{ asset('/images/logo.svg') }}" alt="logo" class="logo">
                </div>
                <div class="login-wrapper my-auto">
                <h1 class="login-title">Reset kata sandi</h1>
                @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.request') }}">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="masukan email valid">
                        @error('email') 
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input name="login" id="login" class="btn btn-block login-btn " type="submit" value="Reset">
                </form>
                <p class="login-wrapper-footer-text">Belum punya akun? <a href="{{ route('register') }}" class="text-reset">Register disini</a></p>
                </div>
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="{{ asset('/images/login.jpg') }}" alt="login image" class="login-img">
            </div>
        </div>
    </div>
@endsection