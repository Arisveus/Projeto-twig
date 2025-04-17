<?php
// Carrega o carregador do Composer
require_once('vendor/autoload.php');

// Loader é quem carrega os arquivos HTML
$loader = new \Twig\Loader\FilesystemLoader('./templates');

// Criar o objeto Twig
$twig = new \Twig\Environment($loader);

// session_start();

// // Verifica se o usuário está logado
// if (!isset($_SESSION['login'])) {
//     // Redireciona para login
//     header('Location: login.php');
//     exit;
// }
