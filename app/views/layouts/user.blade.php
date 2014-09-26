@extends('layouts.master')

@section('topscript')
    <title>Ben Griffith | Login</title>
@stop

@section('content')
            
    {{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-group', 'role' => 'form')) }}
        <h2>Please Log In</h2>
        <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
        </div>

{{ Form::close() }}
     
@stop