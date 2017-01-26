@extends('layouts.posts')

@section('title', '| Show Post')

@section('container')
<div class="row">

    <div class="col-md-8">
        <h1>{{$post->title}}</h1>
        <p class="lead">{{$post->body}}</p>
    </div>

    <div class="col-md-4">
        <div class="well">

            <div class="row">
                <div class="col-sm-10">
                    Slug
                </div>
            </div>

            <div class="row">
                <div class="col-sm-10">
                    <a href="{{route('blog.single', $post->slug)}}"> Link to Blog</a>
                </div>
            </div>

            <div class="row html-element-top-margin">
                <div class="col-sm-10">
                    Created At
                </div>
            </div>

            <div class="row">
                <div class="col-sm-10">
                    {{date('d, M Y H:i:s', strtotime($post->created_at))}}
                </div>
            </div>

            <div class="row html-element-top-margin">
                <div class="col-sm-10">
                    Last Modified
                </div>
            </div>

            <div class="row">
                <div class="col-sm-10">
                    {{date('d, M Y H:i:s', strtotime($post->updated_at))}}
                </div>
            </div>            

        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6">
                {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-primary btn-block')) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'DELETE')) !!}
                {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) !!}
                {!! Form::close() !!}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                {!! Html::linkRoute('posts.index', 'All Posts', array(), array('class'=>'btn btn-default btn-block html-element-top-margin')) !!}
            </div>
        </div>        
    </div>

</div>
@endsection