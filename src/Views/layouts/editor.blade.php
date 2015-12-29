<!DOCTYPE html>
<html ng-app="investigativeditor">
<head>
  <title>Article Editor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Latest compiled and minified CSS -->
  <link href='https://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="/vendor/investigatively/css/screen.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <meta name="article_id" content="@yield('article_id')">

  <div class="navbar-fixed">
    <nav class="in-navbar">
      <ul class="right hide-on-med-and-down">
          <li><a href="#!">Photos</a></li>
          <li><a href="#!">Tags</a></li>
      </ul>
      <ul id="slide-out" class="side-nav">
        <li><a href="#!">Photos</a></li>
        <li><a href="#!">Tags</a></li>
      </ul>
      <a data-activates="slide-out" class="button-collapse" ng-click="activateSideMenu()">
        <i class="medium material-icons">menu</i>
      </a>
    </nav>
  </div>
  

  @yield('content')

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.8/angular.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  <script type="text/javascript" src="/vendor/investigatively/js/editor.js"></script>
</body>
</html>