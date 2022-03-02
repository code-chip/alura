<?php

use Alura\DesignPattern\Http\CurlHttpAdapter;
use Alura\DesignPattern\Http\ReactPhpHttpAdapter;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\RegistroOrcamento;

require 'vendor/autoload.php';

$registroOrcamento = new RegistroOrcamento(new ReactPhpHttpAdapter());
$registroOrcamento->registrar(new Orcamento());