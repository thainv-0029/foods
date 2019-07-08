@extends('auth.app')

@section('content')

<form class="login100-form validate-form flex-sb flex-w" action="{{ route('password.email')}}" method="POST">
                @csrf
            <span class="login100-form-title p-b-53">
                    {{ __('Fogot password') }}
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
                
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        {{ __('Email') }}
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Username is required">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100"></span>
                </div>
                <div class="container-login100-form-btn m-t-17">
                    <button class="login100-form-btn">
                        {{ __('Send email') }}
                    </button>
                </div>

                <div class="w-full text-center p-t-55">
                    <a href="{{ route('login') }}" class="txt2 bo1">
                            {{ __('Log in') }}
                        </a>
        
                    <span class="txt2">
                        {{ __('Or') }}
                    </span>

                <a href="{{ route('register') }}" class="txt2 bo1">
                        {{ __('Register now') }}
                    </a>
                </div>
            </form>
<div id="dropDownSelect1"></div>


@endsection

