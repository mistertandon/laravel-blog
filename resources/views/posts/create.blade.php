@extends('layouts.posts')

@section('title', '| Create Post')

@section('container')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel panel-heading">
                Create New Post
            </div>
            <div class="panel panel-body">
                {!! Form::open(array('route'=> 'posts.store')) !!}

                {{ Form::label('title', 'Title : ') }}
                {{ Form::text('title', null, array("class"=>"form-control")) }}

                {{ Form::label('slug', 'Slug :', array('class' => 'html-element-top-margin')) }}
                {{ Form::text('slug', null, array('class'=>'form-control'))}}

                {{ Form::label('category_id', 'Select Category :', array('class' => 'html-element-top-margin')) }}
                {{ Form::select('category_id', $categories, null, array('class' => 'form-control')) }}

                {{ Form::label('body', 'Body : ', array('class' => 'html-element-top-margin')) }}
                {{ Form::textarea('body',  null, array('class'=>'form-control')) }}

                {{ Form::submit('Create Post', array("class"=>"btn btn-success btn-lg btn-block", "style"=>"margin-top: 20px;")) }}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection