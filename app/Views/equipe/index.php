
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar equipes</title>
</head>
<body>
    <h1>Listar equipes</h1>
    <ul>
        <?php foreach($equipes as $equipe): ?>
            <li><?php echo $equipe['cidade']; ?> - <?php echo $equipe['distancia']; ?> - <?php echo $equipe['pais']; ?>
                <form action="/equipe/excluir/<?php echo $equipe['id']; ?>" method="post" style="display: inline;">
                    <button type="submit">Excluir</button>
                </form>
                <a href="/equipe/editar/<?php echo $equipe['id']; ?>">Editar</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>