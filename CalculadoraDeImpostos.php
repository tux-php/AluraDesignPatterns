<?php
class CalculadoraDeImpostos{
    public function calcula(Orcamento $Orcamento,IImposto $imposto){        
                return $imposto->calcula($Orcamento);    
    }
}
?>