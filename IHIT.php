<?php
class IHIT extends TemplateDeImpostoCondicional{
    
    public function DeveUsarOMaximo($orcamento)
    {
        return $this->ItensIguais($orcamento);
    }
    public function taxacaoMaxima($orcamento)
    {
        return (($orcamento->getValor() * 0.13) + 100);
    }
    public function taxacaoMinima($orcamento)
    {
        return $orcamento->getValor() * (0.01 * $this->QntItens($orcamento));
    }
    public function ItensIguais($orcamento)
    {
        $noOrcamento = Array();
        
        foreach($orcamento->getItens() as $item){            
            if(in_array($item->getNome(),$noOrcamento)) return true;
            else $noOrcamento[] = $item->getNome();
        }
        return false;
    }
    public function QntItens($orcamento)
    {        
        return count($orcamento->getItens());
    }
}
