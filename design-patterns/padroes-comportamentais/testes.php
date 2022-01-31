<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Orcamento;

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, "ISS");