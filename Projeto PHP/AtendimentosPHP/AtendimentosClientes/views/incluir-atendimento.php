<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="bootstrap-4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<title>Incluir - Atendimento</title>
</head>

<form method="post">
	<h1>Incluir - Atendimento</h1>

	<label>Cliente:</label> <input type="text" name="cliente" id="cliente"
		class="form form-control"> <label>CPF/CNPJ:</label> <input
		type="text" name="cpf" id="cpf" class="form form-control"> <label>Data
		atendimento:</label> <input type="text" name="dataAtendimento"
		id="dataAtendimento" class="form form-control"> <label>Motivo:</label>
	<textarea rows="4" cols="5" name="motivo" id="motivo"
		class="form form-control"></textarea>

	<label>Procedimentos:</label>
	<textarea rows="4" cols="5" name="solucao" id="solucao"
		class="form form-control"></textarea>

	<button type="submit" class="btn btn-primary">Cadastrar</button>
	<button type="button" class="btn" onclick="index()">Cancelar</button>

</form>
<script type="text/javascript" src="js/utils.js"></script>

<?php include_once '../controllers/IncluirAtendimentoController.php';?>