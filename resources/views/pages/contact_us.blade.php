@extends('layouts.static_pages')

@section('title', '| Contact Us')

@section('container')
<!-- "container" div starts here -->
<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    Contact Us
                </div>
                <div class="panel panel-body">

                    {!! Form::open(array('route' => 'pages.contact')) !!}
                    
                    {{ method_field('POST') }}
                    
                    {{ Form::label('title', 'Title :') }}
                    {{ Form::text('title', null, array('class' => 'form-control')) }}

                    {{ Form::label('email', 'Your E-mail Address :', array('class' =>'html-element-top-margin')) }}
                    {{ Form::text('email', null, array('class' => 'form-control')) }}

                    {{ Form::label('body', 'Body :', array('class' =>'html-element-top-margin')) }}
                    {{ Form::textarea('body', null, array('class' => 'form-control')) }}
                    
                    {{ Form::submit('Contact me', array('class' => 'btn btn-primary btn-block html-element-top-margin')) }}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
</div>
<!-- "container" div ends -->
@endsection