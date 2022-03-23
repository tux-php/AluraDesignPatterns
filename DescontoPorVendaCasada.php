<?php
class DescontoPorVendaCasada implements IDesconto{
    private $proximoDesconto;

    public function desconto(Orcamento $orcamento){
        if($this->aconteceuVendaCasadaEm($orcamento)){
            return $orcamento->getValor() * 0.08 ."- Venda Casada";
        }else{
            $this->proximoDesconto->desconto($orcamento);
        }
    }

    public function aconteceuVendaCasadaEm(Orcamento $orcamento){        
        return $this->existe("CANETA", $orcamento) && $this->existe("LAPIS", $orcamento);
    }
    public function setProximo(IDesconto $proximo){
        $this->proximoDesconto = $proximo;
    }

    private function existe($nomeDoItem, Orcamento $orcamento){
        foreach($orcamento->getItens() as $item){
            if($item->getNome() == $nomeDoItem) return true;            
        }
        return false;
    }
}
?>