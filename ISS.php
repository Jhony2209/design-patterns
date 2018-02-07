<?php

class ISS extends TemplateDeImpostoCondicional {

    function __construct($imposto = null) {
        parent::__construct($imposto);
    }

    public function deveUsarOMaximo(Orcamento $Orcamento) {
        return $Orcamento->getValor() > 300;
    }

    public function taxacaoMinima(Orcamento $Orcamento) {
        return $Orcamento->getValor() * 0.1;
    }

    public function taxacaoMaxima(Orcamento $Orcamento) {
        return $Orcamento->getValor() * 0.15;
    }

}

?>