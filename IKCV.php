<?php
class IKCV extends TemplateDeImpostoCondicional{

    public function DeveUsarOMaximo($orcamento)
    {
        return $orcamento->getValor() > 500 && $this->listaItem($orcamento);
    }

    public function listaItem($orcamento)
    {
        foreach($orcamento->getItens() as $item)
        {
            if($item->getValor() > 100) return true;
        }
        return false;
    }

    public function taxacaoMaxima($orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }

    public function taxacaoMinima($orcamento)
    {
        return $orcamento->getValor() * 0.06;
    }
}
