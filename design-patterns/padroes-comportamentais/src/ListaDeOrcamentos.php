<?php

namespace Alura\DesignPattern;

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
}