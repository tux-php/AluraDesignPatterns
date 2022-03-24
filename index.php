<?php
require 'Orcamento.php';
require 'Item.php';
require 'CalculadoraDeImpostos.php';
require 'IImposto.php';
require 'TemplateDeImpostoCondicional.php';
require 'KCV.php';
require "ICMS.php";
require "ISS.php";
require "ICPP.php";
require "IKCV.php";
require "IHIT.php";
require 'CalculadoraDeDescontos.php';


$reforma = new Orcamento(501);
$reforma->addItem(new Item("CANETA",100));
$reforma->addItem(new Item("CANETA",100));
$reforma->addItem(new Item("CANETA",100));

$calculadora = new CalculadoraDeImpostos();
echo $calculadora->calcula($reforma,new IHIT());
echo "</br>";

/*
echo $calculadora->calcula($reforma, new ICMS());
echo "</br>";
echo $calculadora->calcula($reforma,new ISS());
echo "</br>";
echo $calculadora->calcula($reforma,new KCV());
echo "</br>";echo "</br>";
*/
//Descontos
echo "Calculadora de Descontos";
$calculadoradedesconcotos = new CalculadoraDeDescontos();
echo "</br>";
echo "Desconto";
$reforma->addItem(new Item("CANETA",101));
$reforma->addItem(new Item("LAPIS",50));
$reforma->addItem(new Item("Telha",50));
$reforma->addItem(new Item("Parafuzos",50));
$reforma->addItem(new Item("Janela de Vidro",50));
$reforma->addItem(new Item("Porta de Vidro",50));
echo "</br>";
echo "</br>";
echo $calculadoradedesconcotos->desconto($reforma);

?>