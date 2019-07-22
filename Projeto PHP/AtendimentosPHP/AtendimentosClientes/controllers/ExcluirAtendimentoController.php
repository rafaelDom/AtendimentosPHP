<?php
require_once '../dao/AtendimentoDAO.php';

    $id = $_GET['id'];

    $excluirAtendimento = new RepositorioAtendimento();
    $excluirAtendimento->excluir($id);
    header('Location: ../views/index.php');
    die();

?>