<?php

require "Orcamento.php";
require "Desconto.php";
require "Desconto5Itens.php";
require "Desconto500Reais.php";
require "Desconto300Reais.php";
require "SemDesconto.php";
require "Item.php";
require "CalculadoraDeImpostos.php";
require "CalculadoraDeDescontos.php";
require "Imposto.php";
require "TemplateDeImpostoCondicional.php";
require "ICMS.php";
require "ISS.php";
require "KCV.php";



$reforma = new Orcamento(490);

$calculadora = new CalculadoraDeImpostos();

echo $calculadora->calcula($reforma, new ICMS(new ISS()));

echo "<br />";

echo $calculadora->calcula($reforma, new ISS());

echo "<br />";

echo $calculadora->calcula($reforma, new KCV());

//Descontos

echo "<br /> Testes de Descontos <br />";

$calculaDeDescontos = new CalculadoraDeDescontos();

echo " Desconto <br />";

$reforma->addItem(new Item("Tijolo", 250));
$reforma->addItem(new Item("Cimento 100Kg", 250));
$reforma->addItem(new Item("Cimento 100Kg", 250));
$reforma->addItem(new Item("Cimento 100Kg", 250));

echo $calculaDeDescontos->desconto($reforma);
?>