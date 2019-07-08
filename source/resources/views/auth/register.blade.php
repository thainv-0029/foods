@extends('auth.app')

@section('content')

<form class="login100-form validate-form flex-sb flex-w" action="{{ route('register') }}" method="POST">
    @csrf
    @foreach ($errors->all() as $error)
        <p class="alert alert-danger form-alert">{{ $error }}</p>
    @endforeach

    <span class="login100-form-title p-b-53">
        {{ __('Register') }}
    </span>
    <div class="p-t-31 p-b-9">
        <span class="txt1">
            {{ __('Username') }}
        </span>
    </div>
    <div class="wrap-input100 validate-input" data-validate="Username is required">
        <input class="input100" type="text" name="name">
        <span class="focus-input100"></span>
    </div>
    <div class="p-t-31 p-b-9">
        <span class="txt1">
            {{ __('Email') }}
        </span>
    </div>
    <div class="wrap-input100 validate-input" data-validate="Email is required">
        <input class="input100" type="text" name="email">
        <span class="focus-input100"></span>
    </div>

    <div class="p-t-31 p-b-9">
        <span class="txt1">
            {{ __('PhoneNumber') }}
        </span>
    </div>
    <div class="wrap-input100 validate-input" data-validate="Phone number is required">
        <input class="input100" type="text" name="phone_number">
        <span class="focus-input100"></span>
    </div>

    <div class="p-t-13 p-b-9">
        <span class="txt1">
            {{ __('Password') }}
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
    <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
        <input class="input100" type="password" name="password_confirmation">
        <span class="focus-input100"></span>
    </div>

    <div class="container-login100-form-btn m-t-17">
        <button class="login100-form-btn">
            {{ __('Sign up') }}
        </button>
    </div>

    <div class="w-full text-center p-t-55">
        <span class="txt2">
            {{ __('Have an account?') }}
        </span>

        <a href="{{ route('login') }}" class="txt2 bo1">
            {{ __('Log in now') }}
        </a>
    </div>
</form>

<div id="dropDownSelect1"></div>


@endsection