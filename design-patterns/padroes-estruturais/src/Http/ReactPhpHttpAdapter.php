<?php

namespace Alura\DesignPattern\Http;

class ReactPhpHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        echo "ReactPHP";
    }
}