@extends('layouts.dashboard')

@section('content')
    <div class="col-md-12">

        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Add Category</h4>
            </div>
            <div class="card-body">
                <form action="{{ url('/admin/categories') }}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Category name</label>
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
                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">

                                <select class="form-control @error('parent_id') is-invalid @enderror" name="parent_id">
                                    <option value="">Main Category</option>
                                    @if($categories)
                                        @foreach($categories as $category)
                                            <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('parent_id') }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Add Category</button>
                    <div class="clearfix"></div>
                </form>


            </div>
        </div>
    </div>
@endsection
