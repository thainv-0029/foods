{{-- @extends('master')
@section('title', 'All roles')
@section('content')
<div class="container	col-md-8	col-md-offset-2">
    <div class="panel	panel-default">
        <div class="panel-heading">
            <h2> All roles </h2>
        </div>
        @if (session('status'))
        <div class="alert	alert-success">
            {{	session('status')	}}
</div>
@endif
@if ($roles->isEmpty())
<p> There is no role.</p>
@else
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($roles as $role)
        <tr>
            <td>{!! $role->name !!}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
</div>
</div>
@endsection --}}

@extends('backend.layout')
@section('title', 'All Roles')
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

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert	alert-success">
                            {{	session('status')	}}
                        </div>
                        @endif
                        @if ($roles->isEmpty())
                        <p> There is no role.</p>
                        @else

                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                <tr>
                                    <td>{!! $role->name !!}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('roles.create') }}" class="btn btn-success">
                            <i class="fa fa fa-plus-circle"></i>
                            {{ __('Add new role') }}
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
    @endif

</div><!-- .content -->
</div>
@endsection