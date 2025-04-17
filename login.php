<?php
session_start();
require_once 'vendor/autoload.php';
require_once('twig_carregar.php');
require('inc/banco.php'); 

if (isset($_SESSION['login'])) {
    header('Location: compras.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE login = ?");
    $stmt->execute([$login]);
    $loginBanco = $stmt->fetch();

    if ($loginBanco && password_verify($senha, $loginBanco['senha'])) {
        $_SESSION['login'] = $loginBanco['login'];
        header('Location: compras.php');
        exit;
    } else {
        echo $twig->render('login.html', ['erro' => 'Usuário ou senha inválidos!']);
        exit;
    }
}

echo $twig->render('login.html');
