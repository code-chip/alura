<?php

namespace Alura\Arquitetura;

class Indicacao
{
    private Aluno $indicante;
    private Aluno $indicado;
    private \DateTimeImmutable $data;

    /**
     * @param Aluno $indicante
     * @param Aluno $indicado
     */
    public function __construct(Aluno $indicante, Aluno $indicado)
    {
        $this->indicante = $indicante;
        $this->indicado = $indicado;
        $this->data = new \DateTimeImmutable();
    }
}