
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar <?php $item?></title>
</head>
<body>
<h3>Editar item</h3>
<a href="compras.php">Voltar para a página de compras</a>
<form action="compras_edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $item->getId(); ?>">
    <input type="text" name="item" value="<?php echo $item->getItem(); ?>" placeholder="Item:">
    <input type="submit" value="Adicionar">
</form>
</body>
</html>