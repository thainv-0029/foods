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
                    <form class="form-horizontal" method="post">
                        @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        @csrf
                        <fieldset>
                            <legend>{{ __('Create a new category') }}</legend>
                            <div class="form-group">
                                    <label for="name" class="control-label">{{ __('Name') }}</label>
                                    <div class="">
                                        <input type="text" class="form-control" id="name" name="name" disabled>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label for="description" class="control-label">{{ __('Description') }}</label>
                                <div class="">
                                    <input type="text" class="form-control" id="category_des" name="category_des">
                                </div>
                            </div>
                                <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                    <a href="{{ route('categories') }}" type="reset"
                                        class="btn btn-danger">{{ __('Cancel') }}</a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        @endsection