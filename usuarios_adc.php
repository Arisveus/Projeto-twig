<?php

require('inc/banco.php');

$login = $_POST['login'] ?? null;
$senha = $_POST['senha'] ?? null;

if($item) {
    // Prepara a consulta
    $query = $pdo->prepare('INSERT INTO usuarios (login,senha) VALUES(:login,:senha)');
    // Associa os valores dentro da consulta
    $query->bindValue(':login', $login);
    $query->bindValue(':senha', $senha);
    
    // Executa a consulta
    $query->execute();
}

header('location:usuarios.php');