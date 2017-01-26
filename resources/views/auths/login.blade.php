@extends('layouts.auths')

@section('title', 'Laravel Blog | Login')

@section('container')

<div class="row">
    <div class="col-md-6 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                Login Form
            </div>
            <div class="panel-body">

                {!! Form::open(array('route' => 'auth.validateLogin')) !!}

                {{ Form::label('email', 'E-mail Address :', array('class' => 'html-element-top-margin')) }}
                {{ Form::email('email', null, array('class' => 'form-control'))}}

                {{ Form::label('password', 'Password :', array('class' => 'html-element-top-margin')) }}
                {{ Form::password('password', array('class' => 'form-control'))}}

                {{Form::submit('Login', array('class' => 'btn btn-primary btn-block html-element-top-margin'))}}

                {!! Form::close() !!}
            </div>            

        </div>
    </div>
</div>

@endsection