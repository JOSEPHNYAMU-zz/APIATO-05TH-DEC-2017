@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Post</div>

                    <div class="panel-body">

                        <form method="post" action="{{ $post->path() }}">
                            {{ csrf_field() }}

                            {{method_field('PATCH')}}

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Enter Title">
                                <small id="emailHelp" class="form-text text-muted">Provide Blog Title.</small>
                            </div>
                            <div class="form-group">
                                <label for="text">Blog Body</label>
                                <textarea rows="7" class="form-control" name="body" placeholder="Blog">{{$post->body}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">EDIT BLOG</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
