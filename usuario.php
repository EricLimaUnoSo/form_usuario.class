<?php 
include_once './usuario.class.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $dtNasc = $_POST['dtNasc'];
    $tel = $_POST['tel'];

    $usuario = new Usuario(
        $nome, $email, $senha, $cpf, $dtNasc, $tel
        );
    
?>