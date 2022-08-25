@extends('template')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 login-section-wrapper">
                <div class="brand-wrapper">
                    <img src="{{ asset('/images/logo.svg') }}" alt="logo" class="logo">
                </div>
                <div class="login-wrapper my-auto">
                <h1 class="login-title">Register</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="name" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="email@example.com" >
                        @error('email') 
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="passsword" autocomplete="" >
                        @error('password') 
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="password">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password-confirm" class="form-control" placeholder="confirm passsword" autocomplete="new-password" >
                    </div>
                    <input name="register" id="register" class="btn btn-block login-btn" type="submit" value="Register">
                </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-wrapper-footer-text">Don't have an account? <a href="{{ route('login') }}" class="text-reset">Login here</a></p>
                </div>
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="{{ asset('/images/login.jpg') }}" alt="login image" class="login-img">
            </div>
        </div>
    </div>
@endsection