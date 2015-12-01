<?php
class ClientePJ extends Cliente implements ClienteGrauImportancia
{
    protected $cnpj;
    protected $grau_importancia;

    public function __construct($codigo='',$nome='',$endereco='',$telefone='',$email='', $tipo='',$cnpj='',$grau_importancia='',$endereco_cobranca='')
    {
        parent::__construct($codigo,$nome,$endereco,$telefone,$email,$tipo,$endereco_cobranca);

        $this->setCnpj($cnpj)
             ->setGrauImportancia($grau_importancia)
        ;
    }

    public function setCnpj($value)
    {
        $this->cnpj = $value;
        return $this;
    }

    public function getCnpj()
    {
        return $this->cnpj;
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