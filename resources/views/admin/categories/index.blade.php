@extends('layouts.dashboard')

@section('content')

<div class="card">
    <div class="container">
        <div class="row justify-content-lg-start">
            <div class="col-md-8">
                @if($categories)
                    @if(count($categories) === 0)
                        <p>You don't have any categories</p>

                    @endif
                @endif

                <a href="/admin/categories/create" class="btn btn-primary">Create Category</a>
                <div class="card-category">
                    <ul>
                        @if($categories)
                            @foreach($categories as $category)
                                <li><a href="categories/{{ $category['id'] }}/edit">{{ $category['name'] }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
