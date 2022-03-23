<?php
require_once "IDesconto.php";
class Desconto300reais implements IDesconto{
    private $proximoDesconto;

    public function desconto(Orcamento $orcamento){
        if($orcamento->getValor() == 300){

            return $orcamento->getValor() * 0.01 ." - Desconto > R$300,00.";

        }else{
            return $this->proximoDesconto->desconto($orcamento);
        }
    }

    public function setProximo(IDesconto $proximo){
        $this->proximoDesconto = $proximo;
    }

}
?>