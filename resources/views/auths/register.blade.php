@extends('layouts.auths')

@section('title', 'Laravel Blog | Register')

@section('container')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel panel-heading">
                User Registration
            </div>
            <div class="panel panel-body">
                {!! Form::open(array('route' => 'auth.makeRegister')) !!}

                {{ Form::label('name', 'Username :')}}
                {{ Form::text('name', null, array('class' => 'form-control')) }}

                {{ Form::label('email', 'E-mail Address :', array('class' => 'html-element-top-margin')) }}
                {{ Form::email('email', null, array('class' => 'form-control'))}}

                {{ Form::label('password', 'Password :', array('class' => 'html-element-top-margin')) }}
                {{ Form::password('password', array('class' => 'form-control'))}}

                {{ Form::label('password_confirmation', 'Confirm Password :', array('class' => 'html-element-top-margin')) }}
                {{ Form::password('password_confirmation', array('class' => 'form-control'))}}


                {{Form::submit('Register', array('class' => 'btn btn-primary btn-block html-element-top-margin'))}}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection