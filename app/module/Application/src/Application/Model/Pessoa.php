<?php

namespace Application\Model;

class Pessoa
{
    public $nome;
    public $idade;
    public $email;

    public function exchangeArray(array $data)
    {
        $this->nome = !empty($data['nome']) ? $data['nome'] : null;
        $this->idade = !empty($data['idade']) ? $data['idade'] : null;
        $this->email = !empty($data['email']) ? $data['email'] : null;
    }

}