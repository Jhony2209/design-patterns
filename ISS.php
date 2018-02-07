<?php

class ISS extends TemplateDeImpostoCondicional {

    public function calcula(Orcamento $Orcamento) {
        if ($Orcamento->getValor() > 300) {
            return $Orcamento->getValor() * 0.15;
        } else {
            return $Orcamento->getValor() * 0.1;
        }
    }

    public function deveUsarOMaximo(Orcamento $Orcamento){
        return $Orcamento->getValor() > 300;
    }

    public function taxacaoMinima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.1;
        
    }

    public function taxacaoMaxima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.15;
        
    }
}

?>