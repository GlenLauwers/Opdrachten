<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="" />
    <title>{{ $title }} - Webview</title>

    <!-- Style -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css')}}" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <header>
      <div class="container">
        <div class="logo">
          <h1><a href="{{ url('/') }}">Webview</a></h1>
        </div>

        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="  false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
  
          <div id="navbar" class="navbar-collapse collapse nav">
            <ul class="navigatie logout">
              <li><a href="#">Home</a></li>
              <li><a href="#">Over ons</a></li>
              <li><a href="#">Beveiliging</a></li>
              <li><a href="#">Contact</a></li>
            </ul>

            @if (Auth::user())
              <ul class="navigatie login">
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('/wordpress') }}">Wordpress</a></li>
                <li><a href="{{ url('/joomla') }}">Joomla</a></li>
                <li><a href="{{ url('/drupal') }}">Drupal</a></li>
                <li><a href="{{ url('/statisch') }}">Statisch</a></li>
              </ul>
            @endif
          </div> 
        
          <div class="gebruiker">
            @if (Auth::user())
              <p>U bent ingelogd als <a href="{{ url('/user') }}">{{Auth::user()->voornaam}} {{Auth::user()->familienaam}}</a> (<a href="{{ url('/logout') }}">Uitloggen</a>)</p>
            @endif

            @if (!Auth::user())
              <p>U bent nog niet ingelogd (<a href="{{ url('/login') }}">Inloggen</a>)</p>
            @endif
          </div>  
        </nav>    
      </div>
    </header>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="{{ asset('afbeeldingen/car/1.jpeg') }}" alt="Webview">
            
            <div class="carousel-caption">
              <p>Beheer je websites met één klik.</p>
            </div>
        </div>
      </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
  
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>

    <div class="container">
      @yield('content')
    </div>

    <div class="footer">
      <div class="container">
        
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="links">
          <p>©2016 <a href="{{ url('/') }}">Webview</a></p>
        </div>

        <div class="rechts">
          <p><a href="http://www.glenlauwers.be">www.glenlauwers.be</a></p>
        </div>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/lightbox.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js')}}"></script>
  </body>
</html>
