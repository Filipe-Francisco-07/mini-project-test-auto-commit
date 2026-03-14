<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use UserService;

class UserServiceTest extends TestCase
{
    private $userService;

    protected function setUp(): void
    {
        $this->userService = new UserService();
    }

    public function testTestFunc_comportamentoEsperado()
    {
        $result = $this->userService->testFunc("João", "joao@email.com");
        $this->assertArrayHasKey("id", $result);
        $this->assertEquals("João", $result["name"]);
        $this->assertEquals("joao@email.com", $result["email"]);
    }

    public function testTestFunc_valoresLimite()
    {
        $result = $this->userService->testFunc("", "");
        $this->assertArrayHasKey("id", $result);
        $this->assertEquals("", $result["name"]);
        $this->assertEquals("", $result["email"]);
    }

    public function testTestFunc_entradasInvalidas()
    {
        $result = $this->userService->testFunc(null, null);
        $this->assertArrayHasKey("id", $result);
        $this->assertNull($result["name"]);
        $this->assertNull($result["email"]);
    }

    public function testFindUserById_comportamentoEsperado()
    {
        $result = $this->userService->findUserById(1);
        $this->assertEquals(1, $result["id"]);
        $this->assertEquals("Usuário Teste", $result["name"]);
        $this->assertEquals("teste@email.com", $result["email"]);
    }

    public function testFindUserById_valoresLimite()
    {
        $result = $this->userService->findUserById(0);
        $this->assertEquals(0, $result["id"]);
    }

    public function testFindUserById_entradasInvalidas()
    {
        $result = $this->userService->findUserById(null);
        $this->assertArrayHasKey("id", $result);
        $this->assertEquals(null, $result["id"]);
    }
}
