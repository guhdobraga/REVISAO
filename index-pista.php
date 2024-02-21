<?php
// index.php

// Inclui o controlador e o modelo
include_once 'C:\xampp\htdocs\revisão-array\app\Controllers\PistaController.php';
include_once 'C:\xampp\htdocs\revisão-array\app\Models\PistaModel.php';

$pistaController = new PistaController();

// Processa a adição de uma nova pista
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cidade']) && isset($_POST['distancia']) && isset($_POST['pais']) && isset($_POST['idioma'])) {
        $pistaController->adicionarPista($_POST['cidade'], $_POST['distancia'], $_POST['pais'], $_POST['idioma']);
    }
}

// Processa a atualização de uma pista existente
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_pista']) && isset($_POST['nova_cidade']) && isset($_POST['nova_distancia']) && isset($_POST['novo_pais']) && isset($_POST['novo_idioma'])) {
    $id_pista = $_POST['id_pista'];
    $nova_cidade = $_POST['nova_cidade'];
    $nova_distancia = $_POST['nova_distancia'];
    $novo_pais = $_POST['novo_pais'];
    $novo_idioma = $_POST['novo_idioma'];
    
    $pistaController->atualizarPista($id_pista, array("cidade" => $nova_cidade, "distancia" => $nova_distancia, "pais" => $novo_pais, "idioma" => $novo_idioma));
}

// Processa a exclusão de uma pista
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['excluir_pista'])) {
    $id_pista = $_POST['excluir_pista'];
    $pistaController->excluirPista($id_pista);
}

// Lista as pistas
$pistas = $pistaController->listarPistas();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pistas de Corrida</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h2>Adicionar Pista</h2>
        <form action="" method="POST">
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" required><br>
            
            <label for="distancia">Distância:</label>
            <input type="text" name="distancia" required><br>

            <label for="pais">País:</label>
            <input type="text" name="pais" required><br>

            <label for="idioma">Idioma:</label>
            <input type="text" name="idioma" required><br>

            <button type="submit" value="Enviar">Adicionar Pista</button>
        </form>

        
            <h2>Atualizar Pista</h2>
            <form method="POST">
                <select name="id_pista">
                    <?php foreach ($pistas as $indice => $pista): ?>
                        <option value="<?php echo $indice; ?>"><?php echo $pista['cidade']; ?></option>
                    <?php endforeach; ?>
                </select><br>

                <label for="nova_cidade">Nova Cidade:</label>
                <input type="text" name="nova_cidade" required><br>
                
                <label for="nova_distancia">Nova Distância:</label>
                <input type="text" name="nova_distancia" required><br>

                <label for="novo_pais">Novo País:</label>
                <input type="text" name="novo_pais" required><br>

                <label for="novo_idioma">Novo Idioma:</label>
                <input type="text" name="novo_idioma" required><br>

                <button type="submit" value="Enviar">Atualizar Pista</button>
            </form>
        </div>
    </div>

    <div class="container">
    <!-- Lista as pistas -->
    <h2>Lista de Pistas</h2>
    <ol>
        <?php foreach ($pistas as $indice => $pista): ?>
            <li>
                <p>Cidade: <?php echo $pista['cidade']; ?>, Distância: <?php echo $pista['distancia']; ?>, País: <?php echo $pista['pais']; ?>, Idioma: <?php echo $pista['idioma']; ?></p>
                <form action="" method="POST">
                    <input type="hidden" name="excluir_pista" value="<?php echo $indice; ?>">
                    <button type="submit">Excluir</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ol>
</div>
</body>
</html>
