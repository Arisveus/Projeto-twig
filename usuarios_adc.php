<?php

require_once('vendor/autoload.php');
require('inc/banco.php');

$login = $_POST['login'] ?? null;
$senha = $_POST['senha'] ?? null;

if ($login && $senha) {
    $senhaHash = password_hash($senha);

    $query = $pdo->prepare('INSERT INTO usuarios (login, senha) VALUES (:login, :senha)');
    $query->bindValue(':login', $login);
    $query->bindValue(':senha', $senhaHash);
if($login && $senha) {
    // Prepara a consulta
    $query = $pdo->prepare('INSERT INTO usuarios (login,senha) VALUES(:login,:senha)');
    // Associa os valores dentro da consulta
    $query->bindValue(':login', $login);
    $query->bindValue(':senha', paswordHash($senha));
    
    // Executa a consulta
    $query->execute();
}

header('Location: usuarios.php');
