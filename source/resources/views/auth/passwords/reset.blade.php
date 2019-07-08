@extends('auth.app')

@section('content')

<form class="login100-form validate-form flex-sb flex-w" action="{{ route('password.update') }}" method="POST">
    @csrf
    <span class="login100-form-title p-b-53">
        {{ __('Fogotpassword') }}
    </span>
    {{--
                <a href="#" class="btn-face m-b-20">
                    <i class="fa fa-facebook-official"></i>
                    Facebook
                </a>

                <a href="#" class="btn-google m-b-20">
                    <img src="Login_v5/images/icons/icon-google.png" alt="GOOGLE">
                    Google
                </a> --}}

    <div class="p-t-13 p-b-9">
        <span class="txt1">
            {{ __('New Password') }}
        </span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Password is required">
        <input class="input100" type="password" name="password">
        <span class="focus-input100"></span>
    </div>
    <div class="p-t-13 p-b-9">
        <span class="txt1">
            {{ __('Confirm Password') }}
        </span>
    </div>
    <div class="wrap-input100 validate-input" data-validate="Password is required">
        <input class="input100" type="password" name="confirm_password">
        <span class="focus-input100"></span>
    </div>

    <div class="container-login100-form-btn m-t-17">
        <button class="login100-form-btn">
            {{ __('Submit') }}
        </button>
    </div>

    <div class="w-full text-center p-t-55">
        <a href="{{ route('login') }}" class="txt2 bo1">
            {{ __('Login') }}
        </a>

        <span class="txt2">
            {{ __('Or') }}
        </span>

        <a href="{{ route('register') }}" class="txt2 bo1">
            {{ __('Regisyter now') }}
        </a>
    </div>
</form>
<div id="dropDownSelect1"></div>


@endsection