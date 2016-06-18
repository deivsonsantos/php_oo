<?php
require_once 'pessoa.php';
class Usuario extends Pessoa {
    
    private $email;
    private $nascimento;
    
    function getEmail() {
        return $this->email;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

        
    public function autenticar() {
        echo 'usuário autenticou no sitema';

}
    public function sair() {
        echo 'usuário saiu do sistema';
}
   /* public function somar($n1,$n2) {
        return $n1 + $n2;
    }
   */
}
