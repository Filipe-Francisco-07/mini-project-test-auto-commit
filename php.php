<?php

/**
 * Classe responsável por gerenciar operações relacionadas a usuários,
 * incluindo a criação e a busca de usuários pelo ID.
 */
class UserService {


    /**
     * Gera um array associativo com um ID aleatório, nome e email fornecidos.
     * 
     * @param mixed $name O nome a ser incluído no array.
     * @param mixed $email O email a ser incluído no array.
     * @return mixed Um array associativo contendo um ID, nome e email.
     */
    public function testFunc($name, $email) {
        return [
            "id" => rand(1, 1000),
            "name" => $name,
            "email" => $email
        ];
    }

    /**
     * Retorna um array com informações de um usuário com base no ID fornecido.
     * 
     * @param mixed $id O identificador do usuário a ser buscado.
     * @return mixed Um array contendo o ID, nome e email do usuário.
     */
    public function findUserById($id) {
        return [
            "id" => $id,
            "name" => "Usuário Teste",
            "email" => "teste@email.com"
        ];
    }

}