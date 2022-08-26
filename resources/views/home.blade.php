@extends('template')
@section('content')
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="card-body">
                        @if (!auth()->user()->two_factor_secret)
                            Aktifkan Two Factor Authentication
                            <form action="{{ url('user/two-factor-authentication') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Aktifkan</button>
                            </form>
                        @else
                            Matikan Two Factor Authentication
                            <form action="{{ url('user/two-factor-authentication') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary">Matikan</button>
                            </form>
                        @endif
                        @if (session('status') == 'two-factor-authentication-enabled')
                            <p>2FA telah diaktifkan. Buka aplikasi google authenticator dan pilih scan QR Code untuk
                                authentikasi.
                                {!! auth()->user()->twoFactorQrCodeSvg() !!}
                            <p>Simpan kode pemulihan ini di lokasi yang aman.
                                @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes, true)) as $code)
                                    {{ trim($code) }} <br>
                                @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
