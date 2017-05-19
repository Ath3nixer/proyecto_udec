<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Centro Tic</title>
<!-- Bootstrap -->
{!! Html::style('css/bootstrap.css')!!}
{!! Html::style('css/estilo.css')!!}
{!! Html::style('css/fondo.css')!!}
</head>
<body>
<div class="container-fluid">
  <div class="row">
      <div class="col-xs-6">
        <img src="img/udec.png" width="150" class="img-responsive" alt=""/>
      </div>
      <div class="col-xs-6 text-right">
        <br>
        <a href="https://www.facebook.com/" title="Facebook" target="_blank" width="50" height="50">
        <img src="img/facebook-icon.png" width="50" height="50" alt=""/></a>        
        <a href="https://www.twitter.com/" title="Twitter" target="_blank">
        <img src="img/twitter-icon.png" width="50" height="50" alt=""/></a>
        <a href="https://www.gmail.com/" title="Correo Electrónico" target="_blank">
        <img src="img/email-icon.png" width="50" height="50" alt=""/></a>        
      </div>
    </div>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="{{ url('/')}}">Centro TIC</a>
      </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/')}}">Inicio<span class="sr-only">(current)</span></a></li>
        <li class="dropdown"><a href=#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Centro TIC<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/quees')}}">¿Qué es?</a></li>
            <li><a href="{{ url('/mision')}}">Misión</a></li>
            <li><a href="{{ url('/vision')}}">Visión</a></li>
            <li class="divider"></li>
            <li><a href="{{ url('/area')}}">Áreas</a></li>
            <li class="divider"></li>
            <li><a href="{{ url('/equipo')}}">Equipo</a></li>
          </ul>
        </li>
        <li><a href="{{ url('/solicitudes')}}">Solicitudes</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/auth/login')}}">Iniciar Sesión</a></li>
        <li><a href="{{ url('/registro')}}">Registrarse</a></li>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!--imagen-->
<div class="container">
@yield('content')
<hr>    
</div>
  <div class="container-fluid">
    <div class="text-center col-md-6 col-md-offset-3">
      <h4>Prueba </h4>
      <p>Copyright copy - 2015 middot - All Rights Reserved middot - <a href="http://.com/" >My Website</a></p>
    </div>
  </div>
<div class="container-fluid"></div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
{!! Html::script('js/jquery-1.11.2.min.js')!!}
<!-- Include all compiled plugins (below), or include individual files as needed --> 
{!! Html::script('js/bootstrap.js')!!}
</body>
</html>