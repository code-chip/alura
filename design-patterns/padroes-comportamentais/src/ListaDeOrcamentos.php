<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\Finalizado;
use Exception;
use phpDocumentor\Reflection\Types\This;
use Traversable;

class ListaDeOrcamentos implements \IteratorAggregate
{
    /**
     * @var Orcamento[]
     */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }
    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function orcamentos(): array
    {
        return $this->orcamentos;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->orcamentos);
    }

    public function orcamentosFinalizados(): array
    {
        return array_filter(
            $this->orcamentos, fn(Orcamento $orcamento) => $orcamento->estadoAtual instanceof Finalizado
        );
    }
}