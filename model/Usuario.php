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
    public function somar($n1,$n2) {
        return $n1 + $n2;
    }
}
