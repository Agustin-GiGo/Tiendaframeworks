
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Framework 2020</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css"  href="{{ asset('/static/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css"  href="{{ asset('/static/css/datepicker3.css') }}">
	<link rel="stylesheet" type="text/css"  href="{{ asset('/static/css/styles.css') }}">



	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>MERCADO ITTG </span></a>
				@if (Route::has('login'))               
                    @auth
                        <a class="navbar-brand" href="{{ url('/home') }}" class="icon-bar">Inicio</a>
                    @else
                        <a class="navbar-brand" href="{{ route('login') }}" class="icon-bar">Iniciar Sesion</a>
                        @if (Route::has('register'))
                            <a class="navbar-brand" href="{{ route('register') }}" class="icon-bar">Registrar</a>
                        @endif
                    @endauth
            	@endif
				</ul>
			</div>
		</div><!-- /.container-fluid -->


	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Agustín Gómez Girón</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>

		<ul class="nav menu">
			<ul class="nav menu">
			<li><a href="Categorias"><em class="fa fa">&nbsp;</em>Categorias</a></li>
    		<li><a href="{{url('Usuarios')}}"><em class="fa fa">&nbsp;</em>Usuarios</a></li>
			<li><a href="Productos"><em class="fa fa">&nbsp;</em>Productos</a></li>
			</ul>
		</ul>
	</div>
		<!--Contenido de la tabla-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="panel panel-container">
			@yield('contenido')

			
		</div>
 	</div>	

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
