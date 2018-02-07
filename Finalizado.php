<?php

class Finalizado implements EstadoDeUmOrcamento {

    public function aplica(Orcamento $Orcamento) {
        throw new Exception("Um orçamento finalizado não pode receber desconto");
    }

    public function aprova(Orcamento $Orcamento) {
        throw new Exception("Apenas orçamentos em aprovaçao podem ser aprovados");
    }

    public function reprova(Orcamento $Orcamento) {
        throw new Exception("Orçamento reprovado");
    }

    public function finaliza(Orcamento $Orcamento) {
        throw new Exception("Apenas orçamentos aprovados pode ser finalizado");
    }

}
?>

