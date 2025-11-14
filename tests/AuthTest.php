<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/data.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';

class AuthTest extends TestCase
{
    public function testLoginConCredencialesValidas(): void
    {
        global $usuarios_bbdd;
        $resultado = handleLogin('usuario1@taskflow.com', 'pass123', $usuarios_bbdd);
        $this->assertTrue($resultado);
    }

    public function testLoginConCredencialesInvalidas(): void
    {
        global $usuarios_bbdd;
        $resultado = handleLogin('usuario1@taskflow.com', 'pass_erroneo', $usuarios_bbdd);
        $this->assertFalse($resultado);
    }
}
