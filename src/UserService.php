<?php

/**
 * Classe responsável pela gestão de usuários, incluindo criação e busca de usuários por ID.
 */
class UserService {



    public function createUser($name, $email) {
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