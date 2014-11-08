@extends('layouts.admin')

@section('content')
	
	@if ($posts->count())
		<ul>
			@foreach ($posts as $post)
				<li>
					{{ link_to_route('admin.posts.edit', $post->title, $post->id) }}
					{{ Form::open(['route' => ['admin.posts.destroy', $post->id], 'method' => 'delete', 'class' => 'destroy', 'onsubmit' => 'return confirm ("Are you sure?")']) }}
						{{ Form::submit('Delete') }}
					{{ Form::close() }}
				</li>
			@endforeach
		</ul>
	@endif

@stop