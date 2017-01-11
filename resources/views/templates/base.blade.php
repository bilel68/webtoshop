<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  <link rel="stylesheet" href="/css/master.css">
</head>
<body>

<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">

    <div class="navbar-header">
      <a class="navbar-brand" href="#">Application</a>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li><a href="/">Home</a></li>
        <li><a href="contact">Contact</a></li>
        <li><a href="magasin">Magasin</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">

        @if (Auth::check())
          <li><a href="logout"><b>Logout</b></a></li>
        @else
          <li><a href="login"><b>Login</b></a></li>
          <li><a href="register">Register</a></li>
          <li><a href="panier">Panier</a></li>
        @endif

        </ul>
			</div>
      </ul>
    </div>
  </div>
</nav>

</body>
<div class="container">@yield('content')</div>
<footer>
  <p>Copyright : ITAkademy 2017</p>
  <a href="contact">Nous contacter</a>
</footer>
</html>
