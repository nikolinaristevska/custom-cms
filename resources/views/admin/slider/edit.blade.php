@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Edit slider {{$slider->title}}</h4>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <form action="{{ url('/admin/slider', [$slider->id]) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-title">
                                        {{ __('Title') }}
                                    </label>
                                    <input type="text" name="title" id="input-title"
                                           class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Title') }}" value="{{ old('title', $slider->title) }}"
                                           required autofocus autocomplete>
                                </div>
                            </div>

                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-description">
                                            {{ __('Description') }}
                                        </label>
                                        <input type="text" name="description" id="input-description"
                                               class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                               placeholder="{{ __('Description') }}" value="{{ old('description', $slider->description) }}"
                                               required autofocus autocomplete>
                                    </div>
                                </div>

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('link') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-link">
                                        {{ __('Link') }}
                                    </label>
                                    <input type="text" name="link" id="input-link"
                                           class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Link') }}" value="{{ old('link', $slider->link) }}"
                                           required autofocus autocomplete>
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
    </div>








@endsection
