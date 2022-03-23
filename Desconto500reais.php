<?php
require_once "IDesconto.php";
class Desconto500reais implements IDesconto{
    private $proximoDesconto;

    public function desconto(Orcamento $orcamento){
        if($orcamento->getValor() == 500){
            return $orcamento->getValor() * 0.05 ." - Desconto > R$500,00.";
        }else{
            return $this->proximoDesconto->desconto($orcamento);
        }
    }

    public function setProximo(IDesconto $proximo){
        $this->proximoDesconto = $proximo;
    }
}
?>