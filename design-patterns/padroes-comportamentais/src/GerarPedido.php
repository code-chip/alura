<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\{Orcamento, Pedido};

class GerarPedido implements Command
{
    private float $valorOrcamento;
    private int $numeroDeItens;
    private string $nomeCliente;

    public function __construct(
        float $valorOrcamento,
        int $numeroDeItens,
        string $nomeCliente
    ) {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroDeItens = $numeroDeItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function execute()
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $this->numeroDeItens;
        $orcamento->valor = $this->valorOrcamento;

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $this->nomeCliente;
        $pedido->orcamento = $orcamento;

        echo "Cria pedido no banco de dados " . PHP_EOL;
        echo "Envia e-mail para cliente " . PHP_EOL;
    }
}