{!! Form::open(array('route'=>'logout')) !!}

{{ method_field('POST') }}

{{ Form::submit('Logout', array('class' => 'btn btn-danger btn-block logout-btn-margin') ) }}

{!! Form::close() !!}