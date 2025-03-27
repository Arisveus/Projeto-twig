<?php

require_once('vendor/autoload.php');
require('inc/banco.php');
date_default_timezone_set('America/Sao_Paulo');

use Carbon\Carbon;

$titulo = $_POST['titulo'] ?? null;
$tiempo = $_POST['tiempo'] ?? null;

if($titulo && $tiempo) {
    $tiempo = Carbon::parse($tiempo);

    $query = $pdo->prepare('INSERT INTO compromissos (titulo,tiempo) VALUES(:titulo,:tiempo)');
    $query->bindValue(':titulo', $titulo);
    $query->bindValue(':tiempo', $tiempo->format('Y-m-d'));

    $query->execute();
}

header('location:compromissos.php');