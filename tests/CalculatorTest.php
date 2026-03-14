<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Calculator;

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function test_soma_caminhoFeliz()
    {
        $result = $this->calculator->soma(2, 3);
        $this->assertEquals(5, $result);
    }

    public function test_soma_valoresLimite()
    {
        $result = $this->calculator->soma(PHP_INT_MAX, 1);
        $this->assertEquals(PHP_INT_MAX + 1, $result);
    }

    public function test_soma_entradasInvalidas()
    {
        $this->expectException(TypeError::class);
        $this->calculator->soma("string", 5);
    }

    public function test_subtrai_caminhoFeliz()
    {
        $result = $this->calculator->subtrai(5, 3);
        $this->assertEquals(2, $result);
    }

    public function test_subtrai_valoresLimite()
    {
        $result = $this->calculator->subtrai(PHP_INT_MIN, 1);
        $this->assertEquals(PHP_INT_MIN - 1, $result);
    }

    public function test_subtrai_entradasInvalidas()
    {
        $this->expectException(TypeError::class);
        $this->calculator->subtrai(5, "string");
    }

    public function test_multiplica_caminhoFeliz()
    {
        $result = $this->calculator->multiplica(2, 3);
        $this->assertEquals(6, $result);
    }

    public function test_multiplica_valoresLimite()
    {
        $result = $this->calculator->multiplica(PHP_INT_MAX, 2);
        $this->assertEquals(PHP_INT_MAX * 2, $result);
    }

    public function test_multiplica_entradasInvalidas()
    {
        $this->expectException(TypeError::class);
        $this->calculator->multiplica(5, "string");
    }

    public function test_divide_caminhoFeliz()
    {
        $result = $this->calculator->divide(6, 2);
        $this->assertEquals(3, $result);
    }

    public function test_divide_valoresLimite()
    {
        $result = $this->calculator->divide(PHP_INT_MAX, 1);
        $this->assertEquals(PHP_INT_MAX, $result);
    }

    public function test_divide_divisaoPorZero()
    {
        $this->expectException(Exception::class);
        $this->calculator->divide(5, 0);
    }

    public function test_divide_entradasInvalidas()
    {
        $this->expectException(TypeError::class);
        $this->calculator->divide(5, "string");
    }
}
