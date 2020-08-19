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
                                    <h3>Edit Post</h3>
                                </div>
                            </div>
                        </div>


                        <div class="card-body">
                            <form action="{{ url('/admin/posts', [$post->id]) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-title">
                                            <label>Title</label>
                                        </label>
                                        <input type="text" name="title" id="input-title"
                                               class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                               placeholder="{{ __('Title') }}" value="{{ old('title', $post->title) }}">
                                    </div>
                                </div>

                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-description">
                                            <label>Description</label>
                                        </label>
                                        <textarea type="text" name="description" id="input-description"
                                                  class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                                  placeholder="{{ __('Description') }}">
                                            {{ old('description', $post->description) }}</textarea>
                                    </div>
                                </div>


                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('body') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-body">
                                            <label>Body text</label>
                                        </label>
                                        <textarea type="text" name="body" id="input-body"
                                                  class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}"
                                                  placeholder="{{ __('Body') }}">
                                            {{ old('body', $post->body) }}</textarea>
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
                                <br />
                                @if ($errors->has('image')) <p class="alert alert-danger">{{ $errors->first('image') }}</p> @endif

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4">Save changes</button>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
