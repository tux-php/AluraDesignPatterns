<?php
require_once "IDesconto.php";

class SemDesconto implements IDesconto{

     public function desconto(Orcamento $orcamento){
         return 0 ." - Sem desconto.";
     }

     public function setProximo(IDesconto $proximo){
         // Não faz nada.
     }
}
?>