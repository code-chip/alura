<?php

namespace Alura\Arquitetura\Testes;

use Alura\Arquitetura\Telefone;
use PHPUnit\Framework\TestCase;

class TelefoneTest extends TestCase
{
    public function testTelefoneComDddInvalidoNaoDeveExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectDeprecationMessage('DDD inválido');
        new Telefone('ddd', '2222222222');
    }

    public function testTelefoneComNumeroInvalidoNaoDeveExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectDeprecationMessage('Número de telefone inválido');
        new Telefone('24', 'número');
    }
}