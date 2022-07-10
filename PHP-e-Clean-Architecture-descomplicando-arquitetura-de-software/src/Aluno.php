<?php

namespace Alura\Arquitetura;

class Aluno
{
    private Cpf $cpf;
    private string $nome;
    private Email $email;
    private array $telefones;

    /**
     * @param Cpf $cpf
     * @param string $nome
     * @param Email $email
     * @param array $telefones
     */
    public function __construct(Cpf $cpf, string $nome, Email $email, array $telefones)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
        $this->telefones = $telefones;
    }

    public function adicionarTelefone(string $ddd, string $numero)
    {
        $this->telefones[] = new Telefone($ddd, $numero);
    }

}