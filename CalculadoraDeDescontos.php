<?php
require "Desconto5itens.php";
require "Desconto500reais.php";
require "SemDesconto.php";
require "Desconto300reais.php";
require "DescontoPorVendaCasada.php";
/**
 * A ordem das classes compromete a funcionalidade do chain of responsability
 */
class CalculadoraDeDescontos{
    public function desconto(Orcamento $orcamento){       
        $desconto5Itens = new Desconto5itens();
        $desconto500reais = new Desconto500reais();
        $desconto300reais = new Desconto300reais();
        $descontoPorVendaCasada = new DescontoPorVendaCasada();
        $semDesconto = new SemDesconto();
        
        $desconto5Itens->setProximo($desconto500reais);
        $desconto500reais->setProximo($desconto300reais);        
        $desconto300reais->setProximo($descontoPorVendaCasada); 
        $descontoPorVendaCasada->setProximo($semDesconto);

        $valorDoDesconto = $desconto5Itens->desconto($orcamento);

        return $valorDoDesconto;
        
        
    }
}
?>