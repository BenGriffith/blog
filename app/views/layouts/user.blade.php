@extends('layouts.master')

@section('title')

Login

@stop

@section('content')

<div class="container">

    {{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-horizontal')) }}
    <fieldset>
        <legend>Login</legend>
        <div class="form-group">
            <label for="email" class="col-lg-4 control-label">Email</label>
            <div class="col-lg-8">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <br>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </fieldset>
    {{ Form::close() }}

</div>
@stop