<?php

require "Orcamento.php";
require "CalculadoraDeImpostos.php";
require "Imposto.php";
require "ICMS.php";
require "ISS.php";
require "KCV.php";
require "ICCC.php";


$reforma = new Orcamento(500);
$novoImposto = new ICCC();

$calculadora = new CalculadoraDeImpostos();

echo $calculadora->calcula($reforma, new ICMS());

echo "<br />";

echo $calculadora->calcula($reforma, new ISS());

echo "<br />";

echo $calculadora->calcula($reforma, new KCV());

echo "<br />";

echo $novoImposto->calcula($reforma);
?>