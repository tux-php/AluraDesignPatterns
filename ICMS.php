<?php
class ICMS extends TemplateDeImpostoCondicional{
    
    public function DeveUsarOMaximo($orcamento){
        return $orcamento->getValor() > 500;
    }

    public function taxacaoMinima($orcamento){
        return $orcamento->getValor() * 0.05;
    }

    public function taxacaoMaxima($orcamento){
        return $orcamento->getValor() * 0.15;
    }
}
?>