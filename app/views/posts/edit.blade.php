@extends('layouts.master')

@section('topscript')
	<title>Ben Griffith | Edit Post</title>
@stop


@section('content')

	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put', 'class' => 'form-group')) }}
		<h1>Edit {{ $post->title}} </h1>
		<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }} ">
			{{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title')) }}
			{{ $errors->has('title') ? $errors->first('title', "<span class='help-block'>:message</span>") : '' }}
		</div>
		<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }} ">
			{{ Form::textarea('body', null, array('class' => 'form-control', 'row' => '5')) }}
			{{ $errors->has('body') ? $errors->first('body', "<span class='help-block'>:message</span>") : '' }}
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Save Changes</button>
		</div>
	{{ Form::close() }}

@stop
