@extends('layouts.dashboard')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Settings</h4>

            </div>
            <div class="card-body">
                <div class="card-body">
                </div>
                <form action="{{ url('/admin/settings', [$settings->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-title">
                                    {{ __('Title') }}
                                </label>
                                <input type="text" name="title" id="input-title"
                                       class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                       placeholder="{{ __('Title') }}" value="{{ old('title', $settings->title) }}"
                                       required autofocus autocomplete>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-phone">
                                    {{ __('Phone') }}
                                </label>
                                <input type="text" name="phone" id="input-phone"
                                       class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                       placeholder="{{ __('Phone') }}" value="{{ old('phone', $settings->phone) }}"
                                       required autofocus autocomplete>
                            </div>
                        </div>

                        <div class="col-md-6 pr-1 ">
                            <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-address">
                                    {{ __('Address') }}
                                </label>
                                <input type="text" name="address" id="input-address"
                                       class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                       placeholder="{{ __('Address') }}"
                                       value="{{ old('address', $settings->address) }}"
                                       required autofocus autocomplete>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-8 pr-1 ">
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-email">
                                    {{ __('Email') }}
                                </label>
                                <input type="text" name="email" id="input-email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       placeholder="{{ __('Email') }}" value="{{ old('email', $settings->email) }}"
                                       required autofocus autocomplete>
                            </div>
                        </div>

                        <div class="col-md-4 pr-1">
                            <div class="form-group{{ $errors->has('url') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-url">
                                    {{ __('Url') }}
                                </label>
                                <input type="text" name="url" id="input-url"
                                       class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}"
                                       placeholder="{{ __('Url') }}" value="{{ old('url', $settings->url) }}"
                                       required autofocus autocomplete>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 pr-1 ">
                            <div class="form-group{{ $errors->has('facebook') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-facebook">
                                    {{ __('Facebook') }}
                                </label>
                                <input type="text" name="facebook" id="input-facebook"
                                       class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}"
                                       placeholder="{{ __('Facebook') }}"
                                       value="{{ old('facebook', $settings->facebook) }}"
                                       required autofocus autocomplete>
                            </div>
                        </div>

                        <div class="col-md-6 pr-1">
                            <div class="form-group{{ $errors->has('twitter') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-twitter">
                                    {{ __('Twitter') }}
                                </label>
                                <input type="text" name="twitter" id="input-twitter"
                                       class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}"
                                       placeholder="{{ __('Twitter') }}"
                                       value="{{ old('twitter', $settings->twitter) }}"
                                       required autofocus autocomplete>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6 pr-1">
                            <div class="form-group{{ $errors->has('instagram') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-instagram">
                                    {{ __('Instagram') }}
                                </label>
                                <input type="text" name="instagram" id="input-instagram"
                                       class="form-control{{ $errors->has('instagram') ? ' is-invalid' : '' }}"
                                       placeholder="{{ __('Instagram') }}"
                                       value="{{ old('instagram', $settings->instagram) }}"
                                       required autofocus autocomplete>
                            </div>
                        </div>

                        <div class="col-md-6 pr-1 ">
                            <div class="form-group{{ $errors->has('linkedin') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-linkedin">
                                    {{ __('Linkedin') }}
                                </label>
                                <input type="text" name="linkedin" id="input-linkedin"
                                       class="form-control{{ $errors->has('linkedin') ? ' is-invalid' : '' }}"
                                       placeholder="{{ __('Linkedin') }}"
                                       value="{{ old('linkedin', $settings->linkedin) }}"
                                       required autofocus autocomplete>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-4">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




@endsection
