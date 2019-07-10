@extends('backend.layout')
@section('name', 'Edit a user')
@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Table</a></li>
                    <li class="active">Data table</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="card admin-page-form">
                <div class="card-header">
                    <strong>{{ __('User') }}</strong>
                </div>
                <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">{{ __('Username') }}</label></div>
                            <div class="col-12 col-md-9">
                                {{-- <p class="form-control-static">Username</p> --}}
                                <input type="text" id="name-input" name="name" value="{{ $user->name }}" class="form-control">

                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="email-input" class=" form-control-label">{{ __('Email') }}</label></div>
                            <div class="col-12 col-md-9">
                                {{-- <input type="email" id="email-input" name="email-input" placeholder="Enter Email"
                                    class="form-control"> --}}
                                    <input type="email" id="name-input" name="email" value="{{ $user->email }}" class="form-control" disabled>
                                {{-- <small class="help-block form-text">Please enter your email</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">{{ __('Role') }}</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="role[]" id="role" class="form-control">
                                    @foreach ($roles as $role)
                                    <option value="{!! $role->name !!}" @if(in_array( $role->name, $selectedRoles))
                                        selected="selected"
                                        @endif >{!! $role->name !!}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">{{ __('Address') }}</label>
                            </div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input"
                                    placeholder="Hanoi" class="form-control">
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="password-input" class=" form-control-label">{{ __('Password') }}</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="password" id="password-input" name="password" placeholder="Password"
                                    class="form-control">
                                {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input"
                                    class=" form-control-label">{{ __('Confirm Password') }}</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="password-input"
                                    name="password_confirmation" placeholder="Password" class="form-control">
                                {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                {{-- </div> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="submit-btn-group">
                                <button type="submit" class="btn btn-primary btn-md ">
                                    <i class="fa fa-dot-circle-o"></i>{{  __('Submit') }}
                                </button> 
                                &nbsp; &nbsp;
                                <a href="{{ route('admin') }}" type="reset" class="btn btn-danger btn-md">
                                    <i class="fa fa-ban"></i> {{ __('Cancel') }} </a>
                            </div>
                    </form>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

@endsection