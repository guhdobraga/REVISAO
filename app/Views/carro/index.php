
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar carros</title>
</head>
<body>
    <h1>Listar carros</h1>
    <ul>
        <?php foreach($carros as $carro): ?>
            <li><?php echo $carro['modelo']; ?> - <?php echo $carro['cor']; ?> - <?php echo $carro['equipe']; ?>
                <form action="/carro/excluir/<?php echo $carro['id']; ?>" method="post" style="display: inline;">
                    <button type="submit">Excluir</button>
                </form>
                <a href="/carro/editar/<?php echo $carro['id']; ?>">Editar</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>