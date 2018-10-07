<!doctype html>
<html lang="es">	
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale= 1">

		<title>Mi web</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>

	<body>

		<!--static nav bar-->
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" 
				aria-expanded="false" aria-control="navbar">	
					<span class ="sr-only"> Toggle navigation</span>
					<span class ="icon-bar"></span>
					<span class ="icon-bar"></span>
					<span class ="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Nicolea's web</a>
			  </div>

			  <div id="navbar" class="navbar-collapse collapse<">
			  	<ul class="nav navbar-nav">
					<li> <a href="#">Entradas</a></li>
					<li> <a href="#">Favoritos</a></li>
					<li> <a href="#">Contacto</a></li>
					<li> <a href="#">Mas</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="#">Iniciar sesión</a></li>
					<li> <a href="#">Registrese</a></li>
				</ul>
			  </div>
			</div>
		</nav>
		<!--static navbar fin-->

		<!--jumbotron-->
		<div class="container">
			<div class="jumbotron">
				<h1> Página de prueba</h1>
				<p>Esta página fue hecha para practicar programación</p>
			</div>
		</div>
		<!--jumbotron fin-->

		<!--otros componentes-->
		<div class="container">
		  <div class="row">

		  	<div class="col-md-4">
		  	  <div class="row">
		  	    <div class="col-md-12">

		  	      <!--Panel busqueda-->
		  	      <div class="panel panel-default">
		  	      	<div class="panel-heading">
		  	      	  <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Busqueda
		  	      	</div>
		  	      	<div class="panel-body">
		  	      	  <div class="form-group">
		  	      	  	<input type="search" class="form-control" placeholder="¿Que buscas?">
		  	      	  </div>
		  	      	</div>
		  	      </div>
		  	      <!--Panel busqueda fin-->

		  	    </div>
		  	  </div>

		  	  <div class="row">
		  	    <div class="col-md-12">
		  	      <!-- Panel filtro-->
		  	      <div class="panel panel-default">
		  	        <div class="panel-heading">
		  	          <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtro
		  	        </div>
		  	        <div class="panel-body">

		  	        </div>
		  	      </div>
		  	      <!-- Panel filtro fin-->	
		  	    </div>
		  	  </div>

		  	  <div class="row">
		  	    <div class="col-md-12">
		  	      <!-- Panel Archivos-->
		  	      <div class="panel panel-default">
		  	        <div class="panel-heading">
		  	          <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Archivo
		  	        </div>
		  	        <div class="panel-body">

		  	        </div>
		  	      </div>
		  	      <!-- Panel Archivos fin-->	
		  	    </div>
		  	  </div>


		  	</div>

		  	<div class="col-md-8">

	  	  	  <!--Muestra de entradas-->
	  	      <div class="panel panel-default">
	  	        <div class="panel-heading">
	  	      	  <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Ultimas entradas
	  	        </div>
	  	        <div class="panel-body">
	  	      	  <p>Todavia no hay entradas que mostrar</p>
	  	      	</div>
	  	  	  </div>
	  	  	  <!--Muestra de entradas fin-->
	  	    
	  	    </div>
	  	    
		  </div>

		</div>
		<!-- Otros componentes fin--> 

		<!-- using jquery version 2.2.4-->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>

</html>