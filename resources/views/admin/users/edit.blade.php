@extends("layouts.dashboard")
@section('content')


    <div class="content">
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-12 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-8">
                                    <h4 class="mb-0">Edit User</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/admin/users', [$user->id]) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            <i class="w3-xxlarge fa fa-user"></i>{{ __('Name') }}
                                        </label>
                                        <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', $user->name) }}" required autofocus autocomplete>

                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                        <input type="email" name="email" id="input-email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', $user->email) }}" required autocomplete>

                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-password">{{ __('Password') }}</label>
                                        <input type="password" name="password" id="input-password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" value="">

                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-password-confirmation">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}" value="">
                                    </div>

                                    <div class="form-group">
                                        <label for="roleusers">Role</label>
                                        <select name="role_user_id" id="roleusers" class="form-control">
                                            @foreach ($roleusers as $roleuser)
                                                <option value="{{ $roleuser->id }}" @if($roleuser->id == $user->roleuser_id) selected @endif>{{ $roleuser->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary mt-4">Save changes</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
