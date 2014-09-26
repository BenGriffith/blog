<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Blog application">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/yeti-bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/blog.css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    @yield('topscript')
  </head>

  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://bengriffith.co">Ben Griffith</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href=" {{{ action('PostsController@index') }}} ">Blog</a></li>
            @if (Auth::check())
              <li><a href=" {{{ action('PostsController@create') }}} ">Create Post</a></li>
              <li><a href=" {{{ action('HomeController@doLogout') }}} ">Log Out</a></li>
            @else
              <li><a href=" {{{ action('HomeController@showLogin') }}} ">Log In</a></li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    @if (Session::has('successLoginMessage'))
      <div class="alert alert-success alert-dismissable center-block" id="fade_message"> 
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        {{{ Session::get('successLoginMessage') }}} 
      </div>
    @endif

    @if (Session::has('errorLoginMessage'))
      <div class="alert alert-danger alert-dismissable center-block" id="fade_message">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        {{{ Session::get('errorLoginMessage') }}}
      </div>
    @endif

    @if (Session::has('successUpdateMessage'))
      <div class="alert alert-success alert-dismissable center-block" id="fade_message">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        {{{ Session::get('successUpdateMessage') }}}
      </div>
    @endif

    @if (Session::has('errorUpdateMessage'))
      <div class="alert alert-danger alert-dismissable center-block" id="fade_message">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        {{{ Session::get('errorUpdateMessage') }}}
      </div>
    @endif

    @if (Session::has('successNewPostMessage'))
      <div class="alert alert-success alert-dismissable center-block" id="fade_message">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        {{{ Session::get('successNewPostMessage') }}}
      </div>
    @endif

    @if (Session::has('errorNewPostMessage'))
      <div class="alert alert-danger alert-dismissable center-block" id="fade_message">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        {{{ Session::get('errorNewPostMessage') }}}
      </div>
    @endif

    <div class="container col-md-6 col-md-offset-3">   
      @yield('content')
    </div>
      
   
    @yield('bottomscript')
   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script>
      $('#fade_message').delay(2000).fadeOut(1000);
    </script>
  </body>
</html>
