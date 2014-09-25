@extends('layouts.master')


@section('topscript')
<title>Post | {{{ $post->title }}}</title>

@stop


@section('content')

<div class="container">
	<h1> {{{ $post->title }}} </h1>
	{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}
	<p> {{{ $post->body }}} </p>
	<p><a href="{{{ action('PostsController@index') }}}">Return to posts listing</a>
	<a href="{{{ action('PostsController@edit', $post->id) }}}" class="btn btn-success"><i class="fa fa-edit fa-lg"></i> Edit</a>
	<a href="#" id="btnDeletePost" class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</a>
</p>
</div>

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