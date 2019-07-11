@extends('backend.layout')
@section('title', 'All users')
@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Products</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Products</a></li>
                    <li class="active">List</li>
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
                            <a href="{{ route('categories.create') }}" class="btn btn-success btn-create">
                                <i class="fa fa fa-plus-circle"></i>
                                {{ __('Add new category') }}
                            </a>
    
                            @if ($categories->isEmpty())
                            <p> {{ __('There is no category.') }}</p>
                            @else
    
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Create at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{!! $category->id !!}</td>
                                    <td>
                                        <a href="{!! action('Admin\UserController@edit', $category->id) !!}">{!! $category->category_des !!}
                                        </a>
                                    </td>
                                    {{-- <td>{!! $user->category_id !!}</td>
                                    <td>{!! $product->description !!}</td>
                                    <td>{!! $product->price !!}</td>
                                    <td>{!! $product->img !!}</td>
                                    <td>{{ __('None') }}</td> --}}
                                    <td>{!! $category->created_at !!}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
    @endif

</div><!-- .content -->
</div>
@endsection