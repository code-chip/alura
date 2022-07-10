<?php

namespace Alura\Arquitetura;

class Telefone
{
    private string $ddd;
    private string $numero;

    /**
     * @param string $ddd
     * @param string $numero
     */
    public function __construct(string $ddd, string $numero)
    {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }


}