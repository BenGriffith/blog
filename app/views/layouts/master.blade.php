<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Font awesome icons -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/css/blog.css">

    @yield('topscript')
  </head>

  <body>
    <!-- Fixed navbar -->
    <div id="navbar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
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

    @if (Session::has('successMessage'))
      <div class="alert alert-success"> {{{ Session::get('successMessage') }}} </div>
    @endif
    @if (Session::has('errorMessage'))
      <div class="alert alert-danger"> {{{ Session::get('errorMessage') }}} </div>
    @endif
      
    @yield('content')
   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    @yield('bottomscript')
  </body>
</html>
