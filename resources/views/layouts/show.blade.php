@extends('layouts.master')
@section ('content')
    <div class="col-md-8 blog-main">
        <h1>{{$post->title}}</h1>

            <div>{{$post->body}}</div>
        <br>
        <div class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</div>
        <hr>
        <br>
        <div class="comment">

                @foreach($post->comments as $comment)
                        {{--<strong>{{$comment->created_ad->diffForHummans()}}</strong>--}}
                <article>
                    {{$comment->body}}

            </article>
                <br>
                    @endforeach

                    <div class="card">
                        <div class="card-block">
                            <form action="/post/{{$post->id}}/comments" method="Post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <textarea name="body" placeholder="Your comment is here" class="form-text" required ></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="new-button">Comment</button>
                                </div>
                            </form>
                            @include('layouts.errors')
                        </div>
                    </div>

        </div>
    </div>

@endsection