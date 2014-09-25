<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		return View::make('/posts.index');
	}

	public function showLogin()
	{
		return View::make('layouts.user');
	}

	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) 
		{
			Session::flash('successMessage', 'Logged in! Start blogging!');
			return Redirect::intended(action('PostsController@index'));
		}
		else
		{
			Session::flash('errorMessage', 'Email or password not found.');
			return Redirect::action('HomeController@showLogin');
		}
	}

	public function doLogout() 
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}
	
}