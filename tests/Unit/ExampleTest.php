<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
require 'App\Http\Controllers\OperationsController.php';


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
    public function testSum():void{
        $this->assertequals(1,1);
    }

    public function testMult() {
        $a=5;
        $controlador = new \App\Http\Controllers\OperationsController();
        $resultado = $controlador->mult($a);
        $this->assertNotEquals(10, $resultado);
    }

    public function testCadenaMayus() {
        $cad='hola';
        $controlador = new \App\Http\Controllers\OperationsController();
        $resultado = $controlador->cadenaMayus($cad);
        $this->assertStringContainsString('po', $resultado);

    }

    public function testListaSum() {
        $a=-1;
        $b=-2;
        $c=-3;
        $d=-4;
        $controlador = new \App\Http\Controllers\OperationsController();
        $resultado = $controlador->listaSum([$a, $b, $c, $d]);
        $this->assertGreaterThan(0, $resultado);
    }

    public function testDiccionario() {
        $val=NULL;
        $controlador = new \App\Http\Controllers\OperationsController();
        $diccionario = ['clave' => $val];
        $resultado = $controlador->diccionario($diccionario, 'clave');
        $this->assertNotNull($resultado);
    }

    public function testNumPar() {
        $num=8;
        $controlador = new \App\Http\Controllers\OperationsController();
        $resultado = $controlador->numPar($num);
        $this->assertTrue($resultado);
    }
}
