@if(Auth::guest())
{!! Html::linkRoute('login', 'Login') !!}                    
@else
{!! Form::open(array('route'=>'logout')) !!}

{{ method_field('POST') }}

{{ Form::submit('Logout', array('class' => 'btn btn-danger btn-block logout-btn-margin') ) }}

{!! Form::close() !!}
@endif