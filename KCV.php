<?php
class KCV extends TemplateDeImpostoCondicional{    

    public function DeveUsarOMaximo($orcamento){    
        //var_dump($this->temItemMaiorQue100ReaisNo($orcamento));die();    
        return $orcamento->getValor() > 500 && $this->temItemMaiorQue100ReaisNo($orcamento);
    }

    public function taxacaoMinima($orcamento){
        return $orcamento->getValor() * 0.06;
    }

    public function taxacaoMaxima($orcamento){
        return $orcamento->getValor() * 0.10;
    }

    public function temItemMaiorQue100ReaisNo(Orcamento $orcamento){
        foreach($orcamento->getItens() as $item){            
            if($item->getValor() > 100) return true;            
        }
        return false;
    }
}
?>