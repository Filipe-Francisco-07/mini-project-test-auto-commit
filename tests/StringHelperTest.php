<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use StringHelper;

class StringHelperTest extends TestCase
{
    private StringHelper $stringHelper;

    protected function setUp(): void
    {
        $this->stringHelper = new StringHelper();
    }

    public function test_slugify_com_texto_normal()
    {
        $result = $this->stringHelper->slugify("Texto Normal");
        $this->assertEquals("texto-normal", $result);
    }

    public function test_slugify_com_caracteres_especiais()
    {
        $result = $this->stringHelper->slugify("Texto!@#$% Especial");
        $this->assertEquals("texto-especial", $result);
    }

    public function test_slugify_com_espacos_excessivos()
    {
        $result = $this->stringHelper->slugify("   Texto   Com   Espacos   ");
        $this->assertEquals("texto-com-espacos", $result);
    }

    public function test_slugify_com_string_vazia()
    {
        $result = $this->stringHelper->slugify("");
        $this->assertEquals("", $result);
    }

    public function test_truncate_com_texto_menor_que_limite()
    {
        $result = $this->stringHelper->truncate("Texto", 10);
        $this->assertEquals("Texto", $result);
    }

    public function test_truncate_com_texto_igual_ao_limite()
    {
        $result = $this->stringHelper->truncate("Texto Limite", 12);
        $this->assertEquals("Texto Limite", $result);
    }

    public function test_truncate_com_texto_maior_que_limite()
    {
        $result = $this->stringHelper->truncate("Texto muito longo que precisa ser truncado", 20);
        $this->assertEquals("Texto muito longo...", $result);
    }

    public function test_truncate_com_limite_zero()
    {
        $result = $this->stringHelper->truncate("Texto", 0);
        $this->assertEquals("...", $result);
    }

    public function test_truncate_com_texto_vazio()
    {
        $result = $this->stringHelper->truncate("", 10);
        $this->assertEquals("", $result);
    }
}
