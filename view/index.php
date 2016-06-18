<?php
require_once '../model/Usuario.php'; // acessar com Ctrl+Space.
    $usuario = new Usuario();
    $usuario->setNome("Deivson");
    $usuario->setEmail("dvs.santos@gmail.com");
    echo $usuario->getNome();
    echo $usuario->getEmail();
    
?>

