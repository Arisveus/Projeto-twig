<?php

require('inc/banco.php');

$item = $_POST['item'] ?? null;

if($item) {
    // Prepara a consulta
    $query = $pdo->prepare('UPDATE compras SET item =:item  WHERE id = :id');

    $query->bindValue(':item', $item);
    // Executa a consulta
    $query->execute();
}

header('location:form.php');