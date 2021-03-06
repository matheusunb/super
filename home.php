<?php
session_start();
?>

<!DOCTYPE HTML>
 <html lang="pt-br">

<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>SUPER ADM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="lib/js/jquery-3.5.1.min.js"></script>
</head>

<body>

	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
			  <div class="navbar-brand text-white">Agenda de Contatos</div>
			  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				<ul class="navbar-nav">
				  <li class="nav-item">
					<a class="btn btn-outline-primary me-2" href="home.php">Home</a>
				  </li>
				  <li class="nav-item">
					<a class="btn btn-outline-primary me-2" href="inclusao.php">Incluir</a>
				  </li>
				  <li class="nav-item">
					<a class="btn btn-outline-primary me-2" href="consulta.php">Consultar</a>
				  </li>
				</ul>
			  </div>
			</div>
		  </nav>
	</header>

	<section>
		<br><br><br><br>
		<div class="d-flex justify-content-center align-items-center mt-5">
			<img src="images/agenda-contatos-logo.png" width="25%">
		</div>		
	</section>

</body>

</html>