<?php
class ICPP extends TemplateDeImpostoCondicional{

    public function DeveUsarOMaximo($orcamento)
    {
        return $orcamento->getValor() > 500;
    }

    public function taxacaoMaxima($orcamento)
    {
        return $orcamento->getValor() * 0.07;
    }

    public function taxacaoMinima($orcamento)
    {
        return $orcamento->getValor() * 0.05;
    }
}

?>