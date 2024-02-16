
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar pilotos</title>
</head>
<body>
    <h1>Listar pilotos</h1>
    <ul>
        <?php foreach($pilotos as $piloto): ?>
            <li><?php echo $piloto['cidade']; ?> - <?php echo $piloto['distancia']; ?> - <?php echo $piloto['pais']; ?>
                <form action="/piloto/excluir/<?php echo $piloto['id']; ?>" method="post" style="display: inline;">
                    <button type="submit">Excluir</button>
                </form>
                <a href="/piloto/editar/<?php echo $piloto['id']; ?>">Editar</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>