<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Catalogo | WEB</title>
<!-- Bootstrap -->
{!! Html::style('css/bootstrap.css')!!}
{!! Html::style('css/estilo.css')!!}
{!! Html::style('css/fondo.css')!!}
</head>
<body>
 <div class="container-fluid">
  <div class="row">
      <div class="col-xs-6">
        <img src="../img/udec.png" width="150" class="img-responsive" alt=""/> </div>
        <div class="col-xs-6 text-right">
        <br>
        <a href="https://www.facebook.com/" title="Facebook" target="_blank">
        <img src="../img/facebook-icon.png" width="50" height="50" alt=""/></a>        
        <a href="https://www.twitter.com/" title="Twitter" target="_blank">
        <img src="../img/twitter-icon.png" width="50" height="50" alt=""/></a>
        <a href="https://www.gmail.com/" title="Correo Electrónico" target="_blank">
        <img src="../img/email-icon.png" width="50" height="50" alt=""/></a>        
        </div>
    </div>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="{{ url('/monitor/index')}}">Centro TIC</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/monitor/perfil')}}">Perfil<span class="sr-only">(current)</span></a></li>
        <li><a href="{{ url('/monitor/horario')}}">Horario</a></li>
        <li><a href="{{ url('/monitor/solicitudes')}}">Solicitudes</a></li>
        <li><a href="{{ url('/monitor/recordatorios')}}">Recordatorio</a></li>
        <li><a href="{{ url('/monitor/informes')}}">Informes</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/')}}">Cerrar Sesión</a></li>
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
</div>
<div class="container-fluid">
    <div class="text-center col-md-6 col-md-offset-3">
      <h4>Prueba </h4>
    </div>
  </div>
<div class="container-fluid"></div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
{!! Html::script('js/jquery-1.11.2.min.js')!!}
<!-- Include all compiled plugins (below), or include individual files as needed --> 
{!! Html::script('js/bootstrap.js')!!}
</body>
</html>