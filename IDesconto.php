<?php
interface IDesconto{
    public function desconto(Orcamento $orcamento);
    public function setProximo(IDesconto $proximo);
}
?>