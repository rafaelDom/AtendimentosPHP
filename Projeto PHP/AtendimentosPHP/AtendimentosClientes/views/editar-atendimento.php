<?php require_once '../dao/AtendimentoDAO.php'; ?>

<?php $id = $_GET['id']; ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="bootstrap-4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<title>Editar - Atendimento</title>
</head>
<?php
$dados = new RepositorioAtendimento();
$atendimentos = $dados->pesquisar($id);
?>
<form method="post">
	<h1>Editar - Atendimento</h1>
<?php foreach ($atendimentos as $atendimento) : ?>
	<div id="id">
		<input type="text" name="id" id="id" class="form form-control"
			readonly="readonly" value="<?php	echo $atendimento['id'];?>">
	</div>
	<label>Cliente:</label> <input type="text" name="cliente" id="cliente"
		class="form form-control"
		value="<?php	echo $atendimento['cliente'];?>"> <label>CPF/CNPJ:</label>
	<input type="text" name="cpf" id="cpf" class="form form-control"
		value="<?php	echo $atendimento['cpf'];?>"> <label>Data atendimento:</label>
	<input type="text" name="dataAtendimento" id="dataAtendimento"
		class="form form-control"
		value="<?php	echo $atendimento['dataAtendimento'];?>"> <label>Motivo:</label>
	<textarea rows="4" cols="5" name="motivo" id="motivo"
		class="form form-control"><?php	echo $atendimento['motivo'];?></textarea>

	<label>Procedimentos:</label>
	<textarea rows="4" cols="5" name="solucao" id="solucao"
		class="form form-control"><?php	echo $atendimento['solucao'];?></textarea>

	<button type="submit" class="btn btn-primary">Cadastrar</button>
	<button type="button" class="btn" onclick="index()">Cancelar</button>
<?php endforeach; ?>
</form>
<script type="text/javascript" src="js/utils.js"></script>

<?php include_once '../controllers/AtualizarAtendimentoController.php';?>