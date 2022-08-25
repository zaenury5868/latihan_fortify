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
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <div class="form-group mb-4">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $request->email }}">
                        @error('email') 
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="password">Kata sandi</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="masukan kata sandi" autocomplete="new-passsword" >
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
                    <input name="login" id="login" class="btn btn-block login-btn " type="submit" value="Update">
                </form>
                </div>
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="{{ asset('/images/login.jpg') }}" alt="login image" class="login-img">
            </div>
        </div>
    </div>
@endsection