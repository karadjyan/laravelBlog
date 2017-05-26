@extends('layouts.primary')

@section('content')

    <div class="col-sm-12 blog-main">
        <div class="blog-post">
            <a class="btn btn-default" href="javascript:history.back();"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            <h2 class="blog-post-title">{{$post->title}}</h2>
            <p class="blog-post-meta">{{$post->created_at}}<br><span class="post_views label"><i class="fa fa-eye" aria-hidden="true"></i> view: {{$post->post_view}}</span></p>
            <p>{{$post->body_post}}</p>
        </div>
    </div>
@endsection