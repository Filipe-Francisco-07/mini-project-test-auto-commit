<?php

require_once __DIR__ . "/src/Calculator.php";
require_once __DIR__ . "/src/UserService.php";
require_once __DIR__ . "/src/StringHelper.php";

$calc = new Calculator();

echo $calc->soma(10, 5) . PHP_EOL;

$userService = new UserService();
$user = $userService->createUser("Filipe", "filipe@email.com");

print_r($user);

$stringHelper = new StringHelper();
echo $stringHelper->slugify("Meu Texto de Teste") . PHP_EOL;