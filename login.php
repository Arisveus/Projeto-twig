<?php
session_start();
require_once 'vendor/autoload.php';
require_once('twig_carregar.php');

$usuarios = [
    'admin' => '1234',
    'usuario' => 'senha'
];

// Se já estiver logado
if (isset($_SESSION['usuario'])) {
    header('Location: compras.php');
    exit;
}

// Se enviou o formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';
    
 // Consulta no banco de dados
 $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ?");
 $stmt->execute([$usuario]);
 $usuarioBanco = $stmt->fetch();

 if ($usuarioBanco && $usuarioBanco['senha'] === $senha) {
     $_SESSION['usuario'] = $usuarioBanco['usuario'];
     header('Location: compras.php');
     exit;
 } else {
     echo $twig->render('login.html', ['erro' => 'Usuário ou senha inválidos!']);
     exit;
 }
}

// Exibir formulário
echo $twig->render('login.html');