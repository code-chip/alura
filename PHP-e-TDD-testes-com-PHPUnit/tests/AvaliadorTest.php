<?php

namespace Alura\Leilao\Tests\Service;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;
use PHPUnit\Framework\TestCase;

class AvaliadorTest extends TestCase
{
    public function testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemCrescente()
    {
        //Arrumo a casa para o teste (Arrange - Give)
        $leilao = new Leilao('Fiat 147 0KM');

        $maria = new Usuario('Maria');
        $joao = new Usuario('João');

        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));

        $leiloeiro = new Avaliador();

        //Executa o código a ser testado (Act - When)
        $leiloeiro->avalia($leilao);

        $maiorValor = $leiloeiro->getMaiorValor();

        //Verifico se a saída é a esperada (Assert - Then)
        self::assertEquals(2500, $maiorValor);

        echo $maiorValor . PHP_EOL;
    }

    public function testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemDecrescente()
    {
        //Arrumo a casa para o teste (Arrange - Give)
        $leilao = new Leilao('Fiat 147 0KM');

        $maria = new Usuario('Maria');
        $joao = new Usuario('João');

        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($joao, 2000));

        $leiloeiro = new Avaliador();

        //Executa o código a ser testado (Act - When)
        $leiloeiro->avalia($leilao);

        $maiorValor = $leiloeiro->getMaiorValor();

        //Verifico se a saída é a esperada (Assert - Then)
        self::assertEquals(2500, $maiorValor);

        echo $maiorValor . PHP_EOL;
    }

    public function testAvaliadorDeveEncontrarOMenorValorDeLancesEmOrdemDecrescente()
    {
        //Arrumo a casa para o teste (Arrange - Give)
        $leilao = new Leilao('Fiat 147 0KM');

        $maria = new Usuario('Maria');
        $joao = new Usuario('João');

        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($joao, 2000));

        $leiloeiro = new Avaliador();

        //Executa o código a ser testado (Act - When)
        $leiloeiro->avalia($leilao);

        $menorValor = $leiloeiro->getMenorValor();

        //Verifico se a saída é a esperada (Assert - Then)
        self::assertEquals(2000, $menorValor);

        echo $menorValor . PHP_EOL;
    }

    public function testAvaliadorDeveEncontrarOMenorValorDeLancesEmOrdemCrescente()
    {
        //Arrumo a casa para o teste (Arrange - Give)
        $leilao = new Leilao('Fiat 147 0KM');

        $maria = new Usuario('Maria');
        $joao = new Usuario('João');

        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));

        $leiloeiro = new Avaliador();

        //Executa o código a ser testado (Act - When)
        $leiloeiro->avalia($leilao);

        $menorValor = $leiloeiro->getMenorValor();

        //Verifico se a saída é a esperada (Assert - Then)
        self::assertEquals(2000, $menorValor);

        echo $menorValor . PHP_EOL;
    }

    public function testAvaliadorDeveBuscar3MaioresLances()
    {
        $leilao = new Leilao('Fiat 147 0KM');
        $joao = new Usuario('João');
        $maria = new Usuario('Maria');
        $ana = new Usuario('Ana');
        $jorge = new Usuario('Jorge');

        $leilao->recebeLance(new Lance($ana, 1500));
        $leilao->recebeLance(new Lance($joao, 1000));
        $leilao->recebeLance(new Lance($maria, 2000));
        $leilao->recebeLance(new Lance($jorge, 1700));

        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);

        $maiores = $leiloeiro->getMaioresLances();
        static::assertCount(3, $maiores);
        static::assertEquals(2000, $maiores[0]->getValor());
        static::assertEquals(1700, $maiores[1]->getValor());
        static::assertEquals(1500, $maiores[2]->getValor());
    }
}