<?php
# compras_editar.php
require_once('twig_carregar.php');
require('inc/banco.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Get = Visualizar o formulário
    $id = $_GET['id'] ?? null;

    if ($id) {
        $senha = $pdo->prepare('SELECT * FROM usuarios WHERE id = :id');
        
        $senha->execute([':id' => $id]);

        $dados = $senha->fetch();

        echo $twig->render('editar_user.html', [
            'titulo' => 'Usuarios',
            'dados' => $dados,
        ]);
    }
}
else {
    // Post = Gravar os dados
    $edit = $pdo->prepare('UPDATE usuarios SET senha = :senha WHERE id = :id');
    $edit->execute([
        ':senha' => $_POST['senha'],
        ':id' => $_POST['id'],
    ]);
    header('location:usuarios.php');
}