@extends('layouts.master')

@section('title')

<title>Ben Griffith | Login</title>

@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            
            {{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin', 'role' => 'form')) }}
                <h2>Please Log In</h2>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <br>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
            {{ Form::close() }}
        </div>
    </div> <!-- end row -->
</div> <!-- end container -->
@stop