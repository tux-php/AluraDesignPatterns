<?php
require_once "IDesconto.php";
class Desconto5itens implements IDesconto{
    private $proximoDesconto;

    public function desconto(Orcamento $orcamento){
        if(count($orcamento->getItens()) >= 5){

            return $orcamento->getValor()*0.1 ."- Desconto >=5 Itens.";

        }else{
            return $this->proximoDesconto->desconto($orcamento);
        }
    }

    public function setProximo(IDesconto $proximo){
        $this->proximoDesconto = $proximo;
    }
}
?>