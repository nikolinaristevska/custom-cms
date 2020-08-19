@extends('layouts.dashboard')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-10">
                                    <h4>Create Product</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/admin/products/') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}


                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                           name="title" value="{{ old('title') }}">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group bmd-form-group">
                                            <div class="file_input_div">
                                                <div class="file_input">
                                                    <label
                                                        class="image_input_button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored">
                                                        <i class="material-icons">file_upload</i>
                                                        <input id="file_input_file" class="none" type="file"
                                                               name="image"/>
                                                    </label>
                                                </div>
                                                <div id="file_input_text_div"
                                                     class="mdl-textfield mdl-js-textfield textfield-demo">
                                                    <input class="file_input_text mdl-textfield__input" type="text"
                                                           disabled readonly
                                                           id="file_input_text"/>
                                                    <label class="mdl-textfield__label"
                                                           for="file_input_text"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <select class="form-control @error('category_id') is-invalid @enderror"
                                                    name="category_id">
                                                @if($categories)
                                                    <option value="">Select Category</option>

                                                    @foreach($categories as $category)
                                                        <option
                                                            value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">

                                            <select class="form-control  @error('user_id') is-invalid @enderror"
                                                    name="user_id"
                                                    value="{{ old('user_id') }}">

                                                <option value="">Select User</option>
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}"
                                                            @if($user->id === Auth::user()->id) selected @endif>{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('country_id')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                @if($errors->has('image'))
                                    <span style="color: red">{{ $errors->first('image') }}</span>
                                @endif
                                <button type="submit" class="btn btn-primary">Create new product</button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
