/**
 * Cria um usuário com um ID aleatório, nome e email fornecidos.
 * 
 * @param mixed $name O nome do usuário a ser criado.
 * @param mixed $email O email do usuário a ser criado.
 * @return mixed Um array contendo o ID, nome e email do usuário.
 */
<?php

class UserService
{


    public function createUser($name, $email)
    {
        return [
            "id" => rand(1, 1000),
            "name" => $name,
            "email" => $email
        ];
    }


    public function findUserById($id)
    {
        return [
            "id" => $id,
            "name" => "Usuário Teste",
            "email" => "teste@email.com"
        ];
    }

}