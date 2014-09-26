<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		// call base controller constructor
		parent::__construct();

		// run auth filter before all methods on this controller except index
		$this->beforeFilter('auth.basic', array('except' => array('index')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(4);
		return View::make('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails())
	    {
	    	Session::flash('errorNewPostMessage', 'Sorry, but for some reason the entered post could not be created.');
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    }
	    else
	    {
	    	Session::flash('successNewPostMessage', 'Another post bites the dust!');
	    	// save to DB
			$post = new Post();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();
			return Redirect::action('PostsController@index');
	    }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);

		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails())
	    {
	    	Session::flash('errorUpdateMessage', 'Your post could not be updated!');
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    }
	    else
	    {
	    	Session::flash('successUpdateMessage', 'Your post has been successfully updated!');
	    	// save to DB
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();
			return Redirect::action('PostsController@index');
	    }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::findOrFail($id)->delete();
		Session::flash('successMessage', 'Post successfully deleted');
		return Redirect::action('PostsController@index');
	}

}