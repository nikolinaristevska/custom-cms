@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary btn-round text-white pull-right" href="/admin/products/create">Create new product</a>
                    <h4 class="card-title ">Products</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>By User</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{ $product->title }}</td>
                                    <td> {{$product->getUser->name}}</td>
                                    <td> {{$product->getCategory->name}}</td>
                                    <td><img src="/assets/img/products/thumbnails/{{$product->image}}" class="ticket-user col-lg-3 col-sm-12">
                                    </td>
                                    <td>
                                        <form action="{{ url('admin/products', [$product->id, 'edit']) }}">
                                            <button data-toggle="tooltip" title="Edit" type="submit" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                                                <i class="now-ui-icons ui-2_settings-90"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ url('/admin/products', [$product->id]) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button data-toggle="tooltip" title="Delete" type="submit" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                                                <i class="now-ui-icons ui-1_simple-remove"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
