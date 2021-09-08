<!DOCTYPE HTML>
 <html lang="pt-br">

<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>SUPER ADM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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

		<script language=javascript type="text/javascript">
			function newPopup(){
				var resultado = confirm("Deseja excluir o item: " + "itemSelecionado" + " ?");
				if (resultado == true) {
					alert("O item " + "itemSelecionado" + " será excluído da lista!");    
				}
				else{
					alert("Você desistiu de excluir o item " + "itemSelecionado" + " da lista!");
				}
			}
		</script>

	</header>

	<section>
		<div class="d-flex justify-content-center align-items-center mt-5"><h2>Lista de Contatos</h2></div>
		
		<div class="container">
			<div class="row justify-content-md-center mt-5">
				<table class="table table-striped table-dark col-md-6">
					<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">MCI</th>
						<th scope="col">Nome</th>
						<th scope="col">E-mail</th>
						<th scope="col">Telefone</th>
						<th scope="col">Ação</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row">1</th>
						<td>123</td>
						<td>A</td>
						<td>a@bb.com.br</td>
						<td>(61)99999-9999</td>
						<td>
							<a href="javascript:newPopup()"><button type="button" class="btn btn-danger">Excluir</button></a>
						</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>456</td>
						<td>B</td>
						<td>b@bb.com.br</td>
						<td>(61)99999-9999</td>
						<td>
							<a href="javascript:newPopup()"><button type="button" class="btn btn-danger">Excluir</button></a>
						</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>789</td>
						<td>C</td>
						<td>c@bb.com.br</td>
						<td>(61)99999-9999</td>
						<td>
							<a href="javascript:newPopup()"><button type="button" class="btn btn-danger">Excluir</button></a>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>		

	</section>

</body>

</html>