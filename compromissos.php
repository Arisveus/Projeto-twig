<?php

//compromissos.php
require_once('twig_carregar.php');
require('inc/banco.php');

$dados = $pdo->query('SELECT * FROM compromissos ORDER BY titulo ASC');

// Busca as compras no banco
$compromissos = $dados->fetchAll(PDO::FETCH_ASSOC);


echo $twig->render('compromissos.html', [
    'titulo' => 'Compromissos',
    'compromissos' => $compromissos,
]);