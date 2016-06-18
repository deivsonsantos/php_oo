<?php

class Usuario {
    public $nome;
    public $email;
    public $nascimento;
    
    public function autenticar() {
        echo 'usuário autenticou no sitema';

}
    public function sair() {
        echo 'usuário saiu do sistema';
}
    
}
