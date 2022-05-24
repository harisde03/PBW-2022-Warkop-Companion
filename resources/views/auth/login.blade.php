@extends('layouts.base')

@section('title', 'Login')

@section('content')
    <div class="container-xl min-vh-90 vh-90">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <p class="text-center fs-3 my-2">Login</p>
                    </div>

                    <div class="card-body my-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-4">
                                <label for="email"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Alamat Email') }}</label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="password"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-8">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-9 offset-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-9 offset-md-3">
                                    <button type="submit" class="btn btn-coffee">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('register'))
                                        <a class="btn btn-link text-coffee text-decoration-none"
                                            href="{{ route('register') }}">
                                            {{ __('Belum Memiliki Akun?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
