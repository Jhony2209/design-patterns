<?php
    class NotaFiscal{
        private $empresa;
        private $cnpj;
        private $itens;
        private $valorBruto;
        private $valorImpostos;
        private $observacoes;
        private $dataEmissao;
        
        function __construct($nomeEmpresa,$nCnpj,$listaItens,$valorBruto,$valorImpostos,$obs,$data) {
            $this->empresa = $nomeEmpresa;
            $this->cnpj = $nCnpj;
            $this->itens = $listaItens;
            $this->valorBruto = $valorBruto;
            $this->valorImpostos = $valorImpostos;
            $this->observacoes = $obs;
            $this->dataEmissao = $data;
        }
        public function getEmpresa() {
            return $this->empresa;
        }
        public function getCnpj() {
            return $this->cnpj;
        }
    }


?>
