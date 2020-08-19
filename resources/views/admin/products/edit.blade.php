@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title ">Edit product: {{$product->title}}</h4>
                </div>
                    <div class="card-body">
                        <form action="{{ url('/admin/products', [$product->id]) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-title">
                                        {{ __('Title') }}
                                    </label>
                                    <input type="text" name="title" id="input-title"
                                           class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Title') }}" value="{{ old('title', $product->title) }}"
                                           required autofocus autocomplete>
                                </div>
                            </div>

                            <div class="input-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        <span class="input-group-btn">
                            <span class="btn btn-info shiny btn-file">
                                <i class="btn-label fa fa-image"> </i> Browse... <input type="file" name="image">
                            </span>
                        </span>
                                <input type="text" class="form-control" readonly="">
                            </div>
                            <br/>
                            @if ($errors->has('image')) <p
                                class="alert alert-danger">{{ $errors->first('image') }}</p> @endif


                            <div class="pl-lg-4">
                            <div class="form-group">
                                <label for="user">User</label>
                                <select name="user" id="user" class="form-control">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" @if($user->id == $user->user_id) selected @endif>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">Save changes</button>
                            </div>

                        </form>
                    </div>

            </div>
        </div>
    </div>



@endsection
