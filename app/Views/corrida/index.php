
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar corridas</title>
</head>
<body>
    <h1>Listar corridas</h1>
    <ul>
        <?php foreach($corridas as $corrida): ?>
            <li><?php echo $corrida['cidade']; ?> - <?php echo $corrida['distancia']; ?> - <?php echo $corrida['pais']; ?>
                <form action="/corrida/excluir/<?php echo $corrida['id']; ?>" method="post" style="display: inline;">
                    <button type="submit">Excluir</button>
                </form>
                <a href="/corrida/editar/<?php echo $corrida['id']; ?>">Editar</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>