<?php

require('inc/banco.php');

$id = $_GET['id'] ?? null;

if($id) {
    // Prepara a consulta
    $query = $pdo->prepare('DELETE FROM compras WHERE id = :id');

    // Executa a consulta
    $query->execute([
        ':id' => $id
    ]);
}

header('location:compras.php');