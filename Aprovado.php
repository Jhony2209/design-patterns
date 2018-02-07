<?php

class Aprovado implements EstadoDeUmOrcamento {

    public function aplica(Orcamento $Orcamento) {
        $Orcamento->setValor($Orcamento->getValor() - $Orcamento->getValor() * 0.05);
    }

    public function aprova(Orcamento $Orcamento) {
        throw new Exception("este orçamento já foi aprovado");
    }

    public function reprova(Orcamento $Orcamento) {
        throw new Exception("este orçamento foi reprovado");
    }

    public function finaliza(Orcamento $Orcamento) {
        $Orcamento->setEstado(new Finalizado());
    }

}
?>


