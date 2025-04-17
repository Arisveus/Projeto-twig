<?php
require('inc/banco.php');

$senha = '123456';
$hash = password_hash($senha, PASSWORD_DEFAULT);

$query = $pdo->prepare('INSERT INTO usuarios (login, senha) VALUES (?, ?)');
$query->execute(['admin', $hash]);

echo "Usuário admin com senha 123456 criado.";
