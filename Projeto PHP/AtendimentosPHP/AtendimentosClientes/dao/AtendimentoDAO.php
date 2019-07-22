<?php
require_once '../models/Atendimento.php';
require_once 'ConexaoSQL.php';

class RepositorioAtendimento
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::getConnection();
    }

    public function salvar(Atendimento $atendimento)
    {
        $cliente = $atendimento->getCliente();
        $cpf = $atendimento->getCpf();
        $dataAtendimento = $atendimento->getDataAtendimento();
        $motivo = $atendimento->getMotivo();
        $solucao = $atendimento->getSolucao();

        $sqlGravar = "INSERT INTO atendimento (cliente, cpf, dataAtendimento, motivo, solucao) VALUES(
    																'$cliente',
    																'$cpf',
    																'$dataAtendimento',
    																'$motivo',
    																'$solucao'
    												)
    								";
        $this->conexao->query($sqlGravar);
    }

    public function listAtendimentos($cpf)
    {
        if ($cpf == "") {
            $sqlBuscar = "select top 10 *from atendimento order by id desc";

            $resultado = $this->conexao->query($sqlBuscar);
        } else {
            $sqlBuscar = "select *from atendimento where cpf='$cpf'";

            $resultado = $this->conexao->query($sqlBuscar);
        }

        $atendimentos = [];

        while ($atendimento = $resultado->fetch()) {
            $atendimentos[] = $atendimento;
        }
        return $atendimentos;
    }

    public function excluir($id)
    {
        $sqlDeletar = "delete from atendimento where id = $id";

        $this->conexao->query($sqlDeletar);
    }

    public function atualizar(Atendimento $atendimento)
    {
        $id = $atendimento->getId();
        $cliente = $atendimento->getCliente();
        $cpf = $atendimento->getCpf();
        $dataAtendimento = $atendimento->getDataAtendimento();
        $motivo = $atendimento->getMotivo();
        $solucao = $atendimento->getSolucao();

        $sqlAtualizar = "update atendimento set cliente = '$cliente', cpf = '$cpf', dataAtendimento='$dataAtendimento', motivo='$motivo', solucao='$solucao' where id = $id";

        $this->conexao->query($sqlAtualizar);
    }

    public function pesquisar($id)
    {
        $sqlPesquisar = "select *from atendimento where id = $id";

        $resultado = $this->conexao->query($sqlPesquisar);

        $atendimentos = [];

        while ($atendimento = $resultado->fetch()) {
            $atendimentos[] = $atendimento;
        }
        return $atendimentos;
    }
}