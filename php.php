<?php

/**
 * Classe responsável por gerenciar operações relacionadas a usuários,
 * incluindo a criação e a busca de usuários pelo ID.
 */
class UserService {

    public function testFunc($name, $email) {
        return [
            "id" => rand(1, 1000),
            "name" => $name,
            "email" => $email
        ];
    }

    public function findUserById($id) {
        return [
            "id" => $id,
            "name" => "Usuário Teste",
            "email" => "teste@email.com"
        ];
    }

}