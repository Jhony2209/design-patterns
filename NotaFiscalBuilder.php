<?php

class NotaFiscalBuilder
{

    private $empresa;
    private $cnpj;
    private $itens;
    private $valorBruto;
    private $valorImpostos;
    private $observacoes;
    private $dataEmissao;

    function __construct()
    {
        $this->valorBruto = 0;
        $this->valorImpostos = 0;
        $this->itens = array();
    }

    public function comEmpresa($nomeEmpresa)
    {
        $this->empresa = $nomeEmpresa;
    }

    public function comCnpj($nCnpj)
    {
        $this->cnpj = $nCnpj;
    }

    public function addItem(Item $novoItem)
    {
        $this->itens[] = $novoItem;
        $this->valorBruto += $novoItem->getvalor();
        $this->valorImpostos += $novoItem->getvalor() * 0.2;
    }

    public function comObservacoes($obs)
    {
        $this->observacoes = $obs;
    }

    public function naData($data = null)
    {
        if (is_null($data)) {
            $this->dataEmissao = date("Y-m-d h:i:s");
        } else {
            $thisdataEmissao = $data;
        }
    }

    public function build()
    {
        $nf = new NotaFiscal($this->empresa, $this->cnpj, $this->itens, $this->valorBruto, $this->valorImpostos, $this->observacoes, $this->dataEmissao);
        return $nf;
    }

}

?>
