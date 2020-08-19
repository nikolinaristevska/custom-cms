@extends('layouts.dashboard')
@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary btn-round text-white pull-right" href="/admin/slider/create">Create new slider</a>
                    <h4 class="card-title ">Slider</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Link</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>{{$slider->id}}</td>
                                    <td>{{ $slider->title }}</td>
                                    <td>{!! $slider->link !!}</td>
                                    <td><img src="/assets/img/slider/thumbnails/{{$slider->image}}" class="ticket-user col-lg-3 col-sm-12">
                                    </td>
                                    <td>
                                        <form action="{{ url('admin/slider', [$slider->id, 'edit']) }}">
                                            <button data-toggle="tooltip" title="Edit" type="submit" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                                                <i class="now-ui-icons ui-2_settings-90"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ url('/admin/slider', [$slider->id]) }}" method="post">
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
