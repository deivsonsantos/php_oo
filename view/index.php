<?php
require_once '../model/Usuario.php'; // acessar com Ctrl+Space.
    $usuario = new Usuario();
    $usuario->nome = "Deivson";
    $usuario->email = "dvs.santos@gmail.com";
    $usuario->nascimento = "05/06/1945";
   // imprimir elemento por elemento. 
    echo $usuario->nome . $usuario->email. $usuario->nascimento;
   // print_r($usuario); // imprimir todo o conteudo da variável php.
   echo $usuario->somar(4,4);
    
?>

