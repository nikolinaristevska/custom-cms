@extends('layouts.dashboard')
@section('content')
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header">
                <a data-toggle="tooltip" title="Add new settings" class="btn btn-primary" href="/admin/settings/create">Add</a>
            </div>
            <br>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        @foreach($settings as $setting)
                            <tbody style="">
                            <tr>
                                <td class=" text-primary">Title</td>
                                <td>{{$setting->title}}</td>

                            </tr>
                            <tr>
                                <td class=" text-primary">URL</td>
                                <td>{{$setting->url}}</td>

                            </tr>
                            <tr>
                                <td class=" text-primary">Email</td>
                                <td>{{$setting->email}}</td>

                            </tr>

                            <tr>
                                <td class=" text-primary">Address</td>
                                <td>{{$setting->address}}</td>

                            </tr>

                            <tr>
                                <td class=" text-primary">Phone</td>
                                <td>{{$setting->phone}}</td>

                            </tr>

                            <tr>
                                <td class=" text-primary">Facebook</td>
                                <td>{{$setting->facebook}}</td>

                            </tr>

                            <tr>
                                <td class=" text-primary">Twitter</td>
                                <td>{{$setting->twitter}}</td>

                            </tr>

                            <tr>
                                <td class=" text-primary">Instagram</td>
                                <td>{{$setting->instagram}}</td>

                            </tr>

                            <tr>
                                <td class=" text-primary">Linkedin</td>
                                <td>{{$setting->linkedin}}</td>

                            </tr>

                            <tr>
                                <td class=" text-primary">Image</td>
                                <td><img src="/assets/img/settings/thumbnails/{{$setting->image}}"
                                         class="ticket-user col-lg-3 col-sm-12">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <form action="{{ url('admin/settings', [$setting->id, 'edit']) }}">
                                        <button type="submit" rel="tooltip" class="btn btn-warning">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ url('/admin/settings', [$setting->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" rel="tooltip" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>

                        @endforeach

                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection
