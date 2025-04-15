<?php

session_start();
require_once 'vendor/autoload.php';
require_once('twig_carregar.php');
require('inc/banco.php');

// Se já estiver logado
if (isset($_SESSION['usuario'])) {
    header('Location: compras.php');
    exit;
}

// Se enviou o formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['login'] ?? '';
    $senha = $_POST['senha'] ?? '';
    
 // Consulta no banco de dados
 $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE login = ?");
 $stmt->execute([$usuario]);
 $usuarioBanco = $stmt->fetch();

 if ($usuarioBanco && $usuarioBanco['senha'] === $senha) {
     $_SESSION['login'] = $usuarioBanco['login'];
     header('Location: compras.php');
     exit;
 } else {
     echo $twig->render('login.html', ['erro' => 'Usuário ou senha inválidos!']);
     exit;
 }
}

// Exibir formulário
echo $twig->render('login.html');