@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Available Blogs</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach($posts as $post)
                            <article>
                                <a href="#"><h6 style="text-transform: uppercase;">{{ $post->title }}</h6></a>
                                <div class="body">{{ $post->body }}</div>

                                <br/>

                                <form class="pull-right" method="post" action="posts/{{ $post->id }}">

                                    {{ csrf_field() }}

                                    {{ method_field('DELETE') }}

                                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-xs btn-success">UPDATE</a>

                                    <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;EDIT</button>

                                </form>

                                <br/>
                                <hr/>
                            </article>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
