@extends('layouts.auth')
@section('title') Password Update @endsection

@section('content')

<div class="container-login100" style="background-image: url('{{ asset('images/bg-01.jpg') }}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form class="login100-form validate-form" method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <span class="login100-form-title p-b-37">
                    {{ __('Reset Password') }} | <a href="{{ url('/') }}">{{ config('app.name') }}</a>
                </span>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Your Email">
                    <input class="input100 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter Password">
                    <input class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Confirm Password">
                    <input class="input100" type="password" name="password_confirmation" required autocomplete="new-password">

                    <span class="focus-input100"></span>
                </div>

                

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
            
        </div>
    </div>

    <div id="dropDownSelect1"></div>

@endsection
