@extends('layouts.master')

@section('topscript')
	<title>Ben Griffith | Blog</title>	
@stop

@section('content')
	
	<h1>Welcome <small>I hope you enjoy my blog!</small></h1>
	@foreach ($posts as $post)
		<h2 class="blog-post-title"><a href=" {{{ action('PostsController@show', $post->id) }}} ">{{{ $post->title }}}</a></h2>
		{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}} 
		<p class="blog-post-meta"></p>
		<p>{{{ $post->body }}}</p>
		<hr>
		<br>
	@endforeach
	{{ $posts->links() }}

@stop
