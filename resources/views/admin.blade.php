@extends('layouts.admin-dashboard')

@section('content')
    <div class="delete-container">
        <div class="form-delete-container is-Responsive block">
            <form id="form-delete" action="" method="post">
                {{csrf_field()}}
                {!! method_field('delete') !!}
                <p>You really want to delete this record?</p>
                <button type="submit" class="btn btn-success">Submit</button>
                <a class="btn btn-danger" onclick="javascript: hideFormDelete();">Close</a>
            </form>
        </div>
    </div>
<div class="container">
    <div class="row">
<div class="col-md-12 ">
    <div class="panel panel-default">
        <div class="panel-heading">Admin Dashboard</div>
            <div class="panel-body">
                <ul class="list-group">
                    @foreach( $posts as $post)
                        <li class="list-group-item">
                            <a href="/posts/{{$post->id}}">{{$post->title}}</a>&#9;
                            <a class="btn btn-primary" href="admin/posts/{{$post->id}}/edit">Edit</a>
                            <a class="btn btn-danger" onclick="javascript: showFormDelete({{$post->id}});">Delete</a>
                        </li>
                    @endforeach
                </ul>
            </div>
    </div>
</div>
    </div>
</div>

@endsection
