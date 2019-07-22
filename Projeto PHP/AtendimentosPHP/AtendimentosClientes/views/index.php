<?php include_once '../dao/AtendimentoDAO.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="bootstrap-4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<title>Atendimento Clientes</title>
</head>
<body>
	<header>
		<h1>Atendimentos Clientes</h1>
	</header>

	<div id="botoes">
		<a href="incluir-atendimento.php">
			<button>
				<i class="far fa-sticky-note fa-2x"></i> Incluir Atendimento
			</button>
		</a> <a href="#">
			<button type="button" onclick="atualizarCliente()">
				<i class="far fa-edit fa-2x"></i> Editar Atendimento
			</button>
		</a> <a href="#">
			<button type="button" onclick="excluirCliente()">
				<i class="far fa-trash-alt fa-2x"></i> Excluir Atendimento
			</button>
		</a>

	</div>
	<div id="pesquisar" style="text-align: center;">
		<form>
			<label>CPF: </label> <input type="text" id="pesquisarCPF"
				name="pesquisarCPF" class="form-control"
				style="width: 200px; display: inline;">
			<button type="submit" onclick="pesquisarAtendimento()">
				<i class="fas fa-search fa-2x"></i>
			</button>
		</form>
	</div>
	<table>
		<tr>
			<th>Cliente</th>
			<th>CPF/CNPJ</th>
			<th>Dt Atendimento</th>
			<th>Motivo</th>
			<th>Procedimetos</th>
		</tr>
		<?php
$pesquisarCPF = $_GET['pesquisarCPF'];
$dados = new RepositorioAtendimento();
$atendimentos = $dados->listAtendimentos($pesquisarCPF);
?>
		<?php foreach ($atendimentos as $atendimento) : ?>
			<tr class="linha-table">
			<td id="coluna-id">
					<?php	echo $atendimento['id'];	?>
				</td>
			<td>
					<?php	echo $atendimento['cliente'];	?>
				</td>
			<td>
					<?php	echo $atendimento['cpf'];	?>
				</td>
			<td>
					<?php	echo $atendimento['dataAtendimento'];	?>
				</td>
			<td>
					<?php	echo $atendimento['motivo'];	?>
				</td>
			<td>
					<?php	echo $atendimento['solucao'];	?>
				</td>
		</tr>
		<?php endforeach; ?>

	
	</table>
	<script type="text/javascript" src="js/index.js"></script>

</body>
</html>