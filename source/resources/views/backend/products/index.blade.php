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
                        <a href="{{ route('products.create') }}" class="btn btn-success btn-create">
                            <i class="fa fa fa-plus-circle"></i>
                            {{ __('Add new product') }}
                        </a>

                        @if ($products->isEmpty())
                        <p> {{ __('There is no product.') }}</p>
                        @else

                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Quantity</th>
                                    {{-- <th>Create at</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{!! $product->id !!}</td>
                                    <td>
                                        {!!
                                        $product->name !!}
                                    </td>
                                    <td>
                                        @foreach ($categories as $category)
                                        @if($product->category_id == $category->id)
                                        {{ $category->category_des }}
                                        @endif
                                        @endforeach
                                    </td>
                                    <td>{!! $product->description !!}</td>
                                    <td>{!! $product->price !!}</td>
                                    {{-- <td>{!! $product->img !!}</td> --}}
                                    <td><img src="{{ asset('storage/img/upload/'.$product->img) }}"/></td>
                                    <td>{{ __('Updating') }}</td>
                                    {{-- <td>{!! $product->created_at !!}</td> --}}
                                    <td>
                                        <a href="{!! action('Admin\ProductController@edit', $product->id) !!}">
                                            <i class="fa fa fa-edit" style="color:green;font-size: 20px;margin-left:20px"></i>
                                        </a>
                                        <a href="{!! action('Admin\ProductController@delete', $product->id) !!}">
                                            <i class="fa fa fa-trash" style="cursor: pointer;color: red; font-size: 20px;margin-left:20px"></i>
                                        </a>
                                    </td>
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