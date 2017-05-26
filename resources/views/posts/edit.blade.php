@extends('layouts.primary')

@section('content')
    <h2>Edit post</h2>
    <form action="/posts/{{$post->id}}" method="post">
        {{csrf_field()}}
        {!! method_field('patch') !!}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
        </div>

        <div class="form-group">
            <label for="intro">Intro</label>
            <textarea class="form-control" type="text" name="intro" id="intro">{{$post->intro}}</textarea>
        </div>

        <div class="form-group">
            <label for="body_post">Main text</label><br>
            <textarea class="form-control" type="text" name="body_post" id="body_post">{{$post->body_post}}</textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>

        @include('layouts.error')

    </form>

@endsection