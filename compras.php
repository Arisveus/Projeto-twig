<?php
//compras.php
require_once('obrigaLogin.php');
require_once('twig_carregar.php');
require('inc/banco.php');

$dados = $pdo->query('SELECT * FROM compras');

// Busca as compras no banco
$comp = $dados->fetchAll(PDO::FETCH_ASSOC);


echo $twig->render('compras.html', [
    'titulo' => 'Compras',
    'compras' => $comp,
]);