<?php

class Atendimento
{

    private $id;

    private $cliente;

    private $cpf;

    private $dataAtendimento;

    private $motivo;

    private $solucao;

    /**
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     *
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     *
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     *
     * @return mixed
     */
    public function getDataAtendimento()
    {
        return $this->dataAtendimento;
    }

    /**
     *
     * @return mixed
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     *
     * @return mixed
     */
    public function getSolucao()
    {
        return $this->solucao;
    }

    /**
     *
     * @param mixed $cliente
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     *
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     *
     * @param mixed $dataAtendimento
     */
    public function setDataAtendimento($dataAtendimento)
    {
        $this->dataAtendimento = $dataAtendimento;
    }

    /**
     *
     * @param mixed $motivo
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;
    }

    /**
     *
     * @param mixed $solucao
     */
    public function setSolucao($solucao)
    {
        $this->solucao = $solucao;
    }
}
