@extends('layouts.master')


@section('topscript')

	<h1 class="blog-title">Edit Post</h1>

@stop


@section('content')

<div class="blog-post">
	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put', 'class' => 'form-horizontal')) }}
	  
	 	<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }} ">
		{{ Form::label('title', 'Title', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
			{{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title')) }}
			{{ $errors->has('title') ? $errors->first('title', "<span class='help-block'>:message</span>") : '' }}
			</div>
		</div>
		<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }} ">
		{{ Form::label('body', 'Body', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
			{{ Form::textarea('body', null, array('class' => 'form-control', 'row' => '5')) }}
			{{ $errors->has('body') ? $errors->first('body', "<span class='help-block'>:message</span>") : '' }}
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Save Changes</button>
			</div>
		</div>
	{{ Form::close() }}
</div>

@stop

@section('bottomscript')

@stop