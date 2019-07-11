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
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
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
                            <legend>{{ __('Edit product') }}</legend>
                            <div class="form-group">
                                <label for="name" class="control-label">{{ __('Name') }}</label>
                                <div class="">
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $product->name }}">
                                </div>
                            </div>
                            <div class="form-froup">
                                <label for="category" class="control-label">{{ __('Category') }}</label>
                                <select name="category" id="category" class="form-control" required>
                                    <option value="" selected disabled hidden>Choose here</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" 
                                        @if ($category->id == $product->category_id)
                                            {{ __('selected') }}
                                        @endif
                                        >{{ $category->category_des }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label">{{ __('Description') }}</label>
                                <div class="">
                                    <input type="text" class="form-control" id="description" name="description"
                                        value="{{ $product->description }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label">{{ __('Price') }}</label>
                                <div class="">
                                    <input type="text" class="form-control" id="price" name="price"
                                        value="{{ $product->price }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label">{{ __('Image') }}</label>
                                <div class="">
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="img" name="img"
                                            value="{{ $product->img }}">
                                        <label class="custom-file-label" for="img">{{ __('Choose file') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="submit" name="submit"
                                        class="btn btn-primary">{{ __('Submit') }}</button>
                                    <a href="{{ route('products') }}" type="reset"
                                        class="btn btn-danger">{{ __('Cancel') }}</a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        @endsection