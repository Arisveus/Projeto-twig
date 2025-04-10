<?php
//compras.php
require_once('twig_carregar.php');
require('inc/banco.php');

$dados = $pdo->query('SELECT * FROM usuarios');

// Busca as compras no banco
$user = $dados->fetchAll(PDO::FETCH_ASSOC);


echo $twig->render('usuarios.html', [
    'titulo' => 'Usuarios',
    'usuarios' => $user,
]);