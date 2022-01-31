<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms());