<?php
class ClientePF extends Cliente implements ClienteGrauImportancia
{
    protected $cpf;


    public function __construct($codigo='',$nome='',$endereco='',$telefone='',$email='', $tipo='', $cpf='', $grau_importancia='', $endereco_cobranca='')
    {
        parent::__construct($codigo,$nome,$endereco,$telefone,$email,$tipo,$endereco_cobranca);

        $this->setCpf($cpf)
             ->setGrauImportancia($grau_importancia)
        ;
    }

    public function setCpf($value)
    {
        $this->cpf = $value;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setGrauImportancia($valor)
    {
        $this->grau_importancia = $valor;
        return $this;
    }
    public function getGrauImportancia()
    {
        return $this->grau_importancia;
    }

}

?>