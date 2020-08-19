@extends('layouts.dashboard')
@section('content')

    <div class="content">

        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create User</h4>
                        </div>

                        <div class="card-body">
                            <form action="{{ url('/admin/users/') }}" method="post">
                                {{ csrf_field() }}

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                   name="name" value="{{ old('name') }}">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Email address</label>
                                            <input type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{ old('email') }}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Password</label>
                                            <input type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Repeat password</label>
                                            <input type="password"
                                                   class="form-control @error('re_password') is-invalid @enderror"
                                                   name="re_password">
                                            @error('re_password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('re_password') }}</strong>
                                    </span>
                                            @enderror

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <select class="form-control  @error('role_user_id') is-invalid @enderror"
                                                name="role_user_id"
                                                value="{{ old('role_user_id') }}">
                                            <option value="">Select Role</option>
                                            @foreach($roleusers as $roleuser)
                                                <option value="{{ $roleuser->id }}">{{ $roleuser->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('role_user_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('role_user_id') }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary ">Add User</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
