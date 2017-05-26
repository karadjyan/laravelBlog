@extends('layouts.primary')

@section('content')
    <div class="row">
        @foreach( $posts as $post)
            <div class="col-md-4">
                <div class="block">
                    <h2>{{$post->title}}</h2>
                    <p><span class="post_views label"><i class="fa fa-eye" aria-hidden="true"></i> view: {{$post->post_view}}</span></p>
                    <p>{{$post->intro}}</p>
                    <p><a class="btn btn-default" href="/posts/{{$post->id}}" role="button">View more »</a></p>
                </div>
            </div>
        @endforeach
    </div>
@endsection