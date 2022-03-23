<?php
class ISS extends TemplateDeImpostoCondicional
{
    public function DeveUsarOMaximo($orcamento)
    {
        return $orcamento->getValor() > 300;
    }

    public function taxacaoMinima($orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }

    public function taxacaoMaxima($orcamento)
    {
        return $orcamento->getValor() * 0.15;
    }
}
