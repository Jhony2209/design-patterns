<?php

date_default_timezone_set("Brazil/East");

require "NotaFiscal.php";
require "Item.php";
require "NotaFiscalBuilder.php";

$geradorDeNotas = new NotaFiscalBuilder();

$geradorDeNotas->comEmpresa("Maxscalla");
$geradorDeNotas->comCnpj("1234");
$geradorDeNotas->addItem(new Item("tijolo",250));
$geradorDeNotas->addItem(new Item("cimento",250));
$geradorDeNotas->addItem(new Item("cimento",250));
$geradorDeNotas->addItem(new Item("cimento",250));
$geradorDeNotas->comObservacoes("tijolos amarelo ");
$geradorDeNotas->naData();

$notaFiscal = $geradorDeNotas->build();

echo "<pre>";

var_dump($notaFiscal);
?>
