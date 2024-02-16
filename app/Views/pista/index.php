<!-- view/listarPistas.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Pistas</title>
</head>
<body>
    <h1>Listar Pistas</h1>
    <ul>
        <?php foreach($pistas as $pista): ?>
            <li><?php echo $pista['cidade']; ?> - <?php echo $pista['distancia']; ?> - <?php echo $pista['pais']; ?>
                <form action="/pista/excluir/<?php echo $pista['id']; ?>" method="post" style="display: inline;">
                    <button type="submit">Excluir</button>
                </form>
                <a href="/pista/editar/<?php echo $pista['id']; ?>">Editar</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
