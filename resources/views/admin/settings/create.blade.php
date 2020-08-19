@extends('layouts.dashboard')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Settings</h4>
            </div>
            <div class="card-body">
                        <div class="card-body">
                            <form action="{{ url('/admin/settings/') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Title</label>
                                            <input type="text"
                                                   class="form-control @error('title') is-invalid @enderror"
                                                   name="title" value="{{ old('title') }}">
                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>





                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Phone</label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{old('phone')}}">
                                            @error('phone') <span class="invalid-feedback" role="alert"><strong>{{$errors->first('phone')}}</strong></span>@enderror
                                        </div>

                                    </div>

                                    <div class="col-md-6 pr-1">

                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Address</label>
                                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{old('address')}}">
                                            @error('address') <span class="invalid-feedback" role="alert"><strong>{{$errors->first('address')}}</strong></span>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                <div class="col-md-8 pr-1">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
                                    @error('email') <span class="invalid-feedback" role="alert"><strong>{{$errors->first('email')}}</strong></span>@enderror
                                </div>
                                </div>

                                <div class="col-md-4 pr-1">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Url</label>
                                        <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{old('url')}}">
                                        @error('url') <span class="invalid-feedback" role="alert"><strong>{{$errors->first('url')}}</strong></span>@enderror
                                    </div>
                                </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Facebook</label>
                                            <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{old('facebook')}}">
                                            @error('facebook') <span class="invalid-feedback" role="alert"><strong>{{$errors->first('facebook')}}</strong></span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 pr-1">

                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Twitter</label>
                                            <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{old('twitter')}}">
                                            @error('twitter') <span class="invalid-feedback" role="alert"><strong>{{$errors->first('twitter')}}</strong></span>@enderror
                                        </div>
                                        </div>
                                    </div>

                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Linkedin</label>
                                            <input type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" value="{{old('linkedin')}}">
                                            @error('linkedin') <span class="invalid-feedback" role="alert"><strong>{{$errors->first('linkedin')}}</strong></span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4 pr-1">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Instagram</label>
                                            <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{old('instagram')}}">
                                            @error('instagram') <span class="invalid-feedback" role="alert"><strong>{{$errors->first('instagram')}}</strong></span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">

                                            <div class="file_input_div">
                                                <div class="file_input">
                                                    <label
                                                        class="image_input_button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored">
                                                        <i class="material-icons">file_upload</i>
                                                        <input id="file_input_file" class="none" type="file" name="image"/>
                                                    </label>
                                                </div>
                                                <div id="file_input_text_div" class="mdl-textfield mdl-js-textfield textfield-demo">
                                                    <input class="file_input_text mdl-textfield__input" type="text" disabled readonly
                                                           id="file_input_text"/>
                                                    <label class="mdl-textfield__label" for="file_input_text"></label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                @if($errors->has('image'))
                                    <span style="color: red">{{ $errors->first('image') }}</span>
                                @endif

                                <button type="submit" class="btn btn-primary">Add Settings</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


@endsection
