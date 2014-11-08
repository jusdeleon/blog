@extends('layouts.admin')

@section('content')
	
	<h1>Edit Post</h1>
	{{ Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method' => 'put']) }}
		@include('admin.posts.partials.form')
	{{ Form::close() }}

@stop