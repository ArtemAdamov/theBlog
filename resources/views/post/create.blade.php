@extends('layouts.master')
@section('content')
    <div class="col-md-8 blog-main">
    <h1>Publish a post</h1>
        <hr>
        <form method="Post" action="/posts">
            {{  csrf_field() }}
            <div class="form-group">
                <label for="Title">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="Body">Body</label>
                <textarea name="body" id="body" class="form-control"></textarea>
            </div>
                     <button type="submit" class="btn  btn-primary">Publish</button>
        @include('layouts.errors')
        </form>

    </div>
    @endsection