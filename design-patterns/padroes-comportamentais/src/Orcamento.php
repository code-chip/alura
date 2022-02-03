<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\EmAprovacao;
use Alura\DesignPattern\EstadosOrcamento\EstadoOrcamento;
use phpDocumentor\Reflection\Types\This;

class Orcamento
{
    public int $quantidadeItens;
    public float $valor;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
    }

    public function aplicaDescontoExtra()
    {
         $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprova();
    }

    public function reprova()
    {
        $this->estadoAtual->reprova();
    }

    public function finaliza()
    {
        $this->estadoAtual->finaliza();
    }
}