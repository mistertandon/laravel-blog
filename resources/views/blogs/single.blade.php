@extends('layouts.blogs')

@section('title', "| $post->title")

@section('container')
<div class="row">
    <div class="col-md-8 col-md-offset-2">

        <div class="jumbotron">
            <h2>{{$post->title}}</h2>
            <p>{{$post->body}}</p>
            <div class="row">
                <div class="col-sm-2">
                    {!! Html::linkRoute('blog.welcome', 'All Posts', array(), array('class' => 'btn btn-primary btn-block btn-sm')) !!}
                </div>
            </div>
        </div>

    </div>
</div>
@endsection