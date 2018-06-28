@extends('layouts.master')

@section ('content')

    <div class="col-md-8 blog-main">
        @foreach($posts as $post)
            @include('post.post')
        @endforeach
    </div>

@endsection