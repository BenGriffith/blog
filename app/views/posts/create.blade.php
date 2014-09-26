@extends('layouts.master')


@section('topscript')
	<title>Ben Griffith | Create Post</title>
@stop


@section('content')
	
	{{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-group', 'role' => 'form')) }}
		<h1>Create a New Post</h1>
		<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }} ">
			{{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Post Title')) }}
			{{ $errors->has('title') ? $errors->first('title', "<span class='help-block'>:message</span>") : '' }}
		</div>
		<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }} ">
		{{ Form::textarea('body', null, array('class' => 'form-control', 'row' => '5', 'placeholder' => 'Post Body')) }}
		{{ $errors->has('body') ? $errors->first('body', "<span class='help-block'>:message</span>") : '' }}
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Create Post</button>
		</div>
	{{ Form::close() }}
			
@stop


@section('bottomscript')


@stop