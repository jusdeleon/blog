@extends('layouts.admin')

@section('content')
	
	<h1>Please login</h1>

	{{ Form::open(['route' => 'admin.login.post']) }}
		<ul>
			<li>
				{{ Form::label('email', 'Email') }}
				{{ Form::text('email') }}
				{{ $errors->first('email', '<p class="error">:message</p>') }}
			</li>
			<li>
				{{ Form::label('password', 'Password') }}
				{{ Form::password('password') }}
				{{ $errors->first('password', '<p class="error">:message</p>') }}
			</li>
			<li>
				{{ Form::submit('Log in') }}
			</li>
		</ul>
	{{ Form::close() }}

@stop