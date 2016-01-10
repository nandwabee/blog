<!DOCTYPE html>
<html ng-app="investigativeditor">
<head>
  <title>{{$article->title}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Latest compiled and minified CSS -->
  <link href='https://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="/css/app.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <meta name="article_id" content="@yield('article_id')">

  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper white">
        <div class="container">
          <a href="/" class="brand-logo">
            <img src="/logo.png" style="max-height:60px" class="img-responsive">
          </a>
          <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>

          @if(Auth::check())
            @if(Auth::user()->admin())
              <ul id="nav-mobile" class="right hide-on-med-and-down add_post_link">
                <li><a href="/articles/new">New Article</a></li>
              </ul>
            @endif
          @endif
        </div>

        @include('layouts.mobile.sidemenu')
      </div>
    </nav>
  </div>
  

  <div class="container white">
    @if(Auth::check())
      @if(Auth::user()->admin())
        <div class="row article-action-row">
          <div class="col s12 m12 l12">
            <div class="row internal-row">
              <div class="col l2 s6 m3">
                <a href="/post/{{$article->id}}/edit" class="btn blue">Edit</a>
              </div>
              @if($article->status == 0)
                <div class="col l2 s6 m3">
                  <a href="/post/{{$article->id}}/publish" class="btn green">Publish</a>
                </div>
              @else
                <div class="col l2 s6 m3">
                  <a href="/post/{{$article->id}}/publish" class="btn red">Unpublish</a>
                </div>
              @endif
            </div>
          </div>
        </div>

        <div class="divider"></div>
      @endif
    @endif

    
      <article class="col l12 s12 m12">
        <h1 class="article-title">{{$article->title}}</h1>
        {!!$body!!}
      </article>
    
  </div>

  <script type="text/javascript" src="/js/vendor.js"></script>
  <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>