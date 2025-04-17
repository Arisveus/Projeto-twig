<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    // Se não estiver logado, redireciona para a página de login
    header('Location: login.php');
    exit;
}
