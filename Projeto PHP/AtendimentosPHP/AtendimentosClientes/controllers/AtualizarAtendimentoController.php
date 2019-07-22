<?php
require_once '../models/Atendimento.php';
require_once '../dao/AtendimentoDAO.php';

if (! empty($_POST)) {
    $atendimento = new Atendimento();
    $atendimento->setId($_POST['id']);
    $atendimento->setCliente($_POST['cliente']);
    $atendimento->setCpf($_POST['cpf']);
    $atendimento->setDataAtendimento($_POST['dataAtendimento']);
    $atendimento->setMotivo($_POST['motivo']);
    $atendimento->setSolucao($_POST['solucao']);

    $atualizarAtendimento = new RepositorioAtendimento();

    $atualizarAtendimento->atualizar($atendimento);
    header('Location: index.php');
    die();
}

?>