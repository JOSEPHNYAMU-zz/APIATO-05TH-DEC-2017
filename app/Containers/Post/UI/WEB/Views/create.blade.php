@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Blog</div>

                    <div class="panel-body">

                        <form method="POST" action="{{ route('web_post_store') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Title">
                                <small id="emailHelp" class="form-text text-muted">Provide Blog Title.</small>
                            </div>
                            <div class="form-group">
                                <label for="text">Blog Body</label>
                                <textarea rows="7" class="form-control" name="body" id="text" placeholder="Blog"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">ADD BLOG</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
