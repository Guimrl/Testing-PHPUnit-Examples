<?php 

use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase {

    public function testEstadoInicialItem() {

        $item = new Item();

        //asserções do PHPUnit
        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }
    public function testGeteSetDescricao() {
        $descricao = 'Cadeira de plástico';

        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());
    }
    /**
     * @dataProvider dataValores
     */
    public function testGeteSetvalor($valor) {
        // $valor = 35.42;
        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());
    }
    // public function testItemValido() {

    //     $item = new Item();
        
    //     //submeter um item valido para o teste e retornar ok
    //     $item->setValor(55);
    //     $item->setDescricao('Cadeira de plástico');
    //     $this->assertEquals(true, $item->ItemValido());
    //     //submeter um item invalido para o teste e retornar false(descricao)
    //     $item->setValor(55);
    //     $item->setDescricao('');
    //     $this->assertEquals(false, $item->itemValido());
    //     //submeter um item invalido para o teste e retornar false(valor)
    //     $item->setValor(0);
    //     $item->setDescricao('Cadeira de plástico');
    //     $this->assertEquals(false, $item->ItemValido());
    // }
    public function dataValores() {
        return [
            [100],
            [-2],
            [0],
            [5]
        ];
    }
}



?>