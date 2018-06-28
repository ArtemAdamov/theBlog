<div class="blog-post">
    <h4 class="blog-post-title"><a class="active-color" href="/post/{{$post->id}}">{{$post->title}}</a></h4>
    <p class="blog-post-meta">
        {{$post->user->name}} on
        {{$post-> created_at->toFormattedDateString()}}</p>

    <p>{{$post->body}}</p>
</div><!-- /.blog-post -->