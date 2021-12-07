<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraMais;
use Alura\Solid\Model\Curso;
use Alura\Solid\Model\Pontuavel;

class Assistidor
{
    public function assistir(Pontuavel $conteudo)
    {
        $conteudo->assistir();
    }
}
