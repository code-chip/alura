<?php

namespace Alura\Calisthenics\Domain\Student;

class FullName
{
    private string $firstName;
    private string $lastName;

    /**
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __toString()
    {
        return "{$this->firstName} {$this->lastName}";
    }
}