@extends('layouts.dashboard')
@section('content')

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary btn-round text-white pull-right" href="/admin/posts/create">Create
                            new post</a>
                        <h4 class="card-title"> Posts</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table styled-table table-shopping" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>description</th>
                                </tr>
                                <thead class="">
                                <tbody>
                                @foreach($posts ?? '' as $post)
                                    <tr>
                                        <td class="td-name">
                                            <a href="{{ url('admin/posts', [$post->id, 'edit']) }}">{{$post->title}}</a>
                                            <br><small>by {{$post->getUser->name}}</small>
                                        </td>
                                        <td><img src="/assets/img/posts/thumbnails/{{$post->image}}" class="ticket-user col-lg-3 col-sm-12"></td>
                                        <td>{{$post->description}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>









@endsection
