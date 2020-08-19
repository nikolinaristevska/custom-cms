@extends('layouts.dashboard')
@section('content')


    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary btn-round text-white pull-right" href="/admin/users/create">Create new
                    user</a>
                <h4 class="card-title">Users</h4>
            </div>
            <div class="card-body">
                <div class="toolbar">
                </div>
                <table id="datatable" class="table">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{$user->getRoleUser->name}}</td>
                            <td>
                                <form action="{{ url('admin/users', [$user->id, 'edit']) }}">
                                    <button data-toggle="tooltip" title="Edit" type="submit" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                                        <i class="now-ui-icons ui-2_settings-90"></i>
                                    </button>
                                </form>
                            </td>
<td>
                                <form action="{{ url('/admin/users', [$user->id]) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button data-toggle="tooltip" title="Delete" type="submit" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                                        <i class="now-ui-icons ui-1_simple-remove"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
