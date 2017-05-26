@extends('layouts.primary')

@section('content')
    <h2>Publish post</h2>
    <form action="/post" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="intro">Intro</label>
            <textarea class="form-control" type="text" name="intro" id="intro"></textarea>
        </div>

        <div class="form-group">
            <label for="body_post">Main text</label><br>
            <textarea class="form-control" type="text" name="body_post" id="body_post"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Publish</button>
        </div>
        @include('layouts.error')
    </form>
@endsection