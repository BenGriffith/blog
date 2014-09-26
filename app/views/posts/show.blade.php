@extends('layouts.master')

@section('topscript')
<title>Ben Griffith | {{{ $post->title }}}</title>
@stop

@section('content')

	<h1> {{{ $post->title }}} </h1>
	<p> {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}} </p>
	<p> {{{ $post->body }}} </p>
	<p><a href="{{{ action('PostsController@edit', $post->id) }}}" class="btn btn-success"><i class="fa fa-edit fa-lg"></i> Edit</a> <a href="#" id="btnDeletePost" class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</a></p>
	<p><a href="{{{ action('PostsController@index') }}}">Return to All Posts</a></p>
	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete', 'id' => 'formDeletePost')) }}
	{{ Form::close() }}

@stop

@section('bottomscript')

<script>
	$('#btnDeletePost').on('click', function(e) {
		e.preventDefault();
		if (confirm('Are you sure you want to delete this post?')) {
			$('#formDeletePost').submit();
		};
	});
</script>

@stop