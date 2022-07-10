<?php

namespace Alura\Arquitetura;

class Indicacao
{
    private Aluno $indicante;
    private Aluno $indicado;

    /**
     * @param Aluno $indicante
     * @param Aluno $indicado
     */
    public function __construct(Aluno $indicante, Aluno $indicado)
    {
        $this->indicante = $indicante;
        $this->indicado = $indicado;
    }
}