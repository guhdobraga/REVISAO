<?php
// Inclui o controlador e o modelo
include_once 'C:\xampp\htdocs\revisão-array\app\Controllers\PilotoController.php';
include_once 'C:\xampp\htdocs\revisão-array\app\Models\PilotoModel.php';

$pilotoController = new PilotoController();

// Processa a adição de um novo piloto
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nome']) && isset($_POST['idade']) && isset($_POST['peso']) && isset($_POST['pais']) && isset($_POST['equipe'])) {
        $pilotoController->adicionarPiloto($_POST['nome'], $_POST['idade'], $_POST['peso'], $_POST['pais'], $_POST['equipe']);
    }
}

// Processa a atualização de um piloto existente
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_piloto']) && isset($_POST['novo_nome']) && isset($_POST['nova_idade']) && isset($_POST['novo_peso']) && isset($_POST['novo_pais']) && isset($_POST['nova_equipe'])) {
    $id_piloto = $_POST['id_piloto'];
    $novo_nome = $_POST['novo_nome'];
    $nova_idade = $_POST['nova_idade'];
    $novo_peso = $_POST['novo_peso'];
    $novo_pais = $_POST['novo_pais'];
    $nova_equipe = $_POST['nova_equipe'];
    
    $pilotoController->atualizarPiloto($id_piloto, array("nome" => $novo_nome, "idade" => $nova_idade, "peso" => $novo_peso, "pais" => $novo_pais, "equipe" => $nova_equipe));
}

// Processa a exclusão de um piloto
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['excluir_piloto'])) {
    $id_piloto = $_POST['excluir_piloto'];
    $pilotoController->excluirPiloto($id_piloto);
}

// Lista os pilotos
$pilotos = $pilotoController->listarPilotos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corrida</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="container">
    <h2>Adicionar Piloto</h2>
    <form action="" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>
        
        <label for="idade">Idade:</label>
        <input type="number" name="idade" required><br>

        <label for="peso">Peso:</label>
        <input type="number" name="peso" required><br>

        <label for="pais">País:</label>
        <input type="text" name="pais" required><br>

        <label for="equipe">Equipe:</label>
        <input type="text" name="equipe" required><br>

        <button type="submit" value="Enviar">Adicionar Piloto</button>
    </form>

   
    <h2>Atualizar Piloto</h2>
    <form method="POST">
        <select name="id_piloto">
            <?php foreach ($pilotos as $indice => $piloto): ?>
                <option value="<?php echo $indice; ?>"><?php echo $piloto['nome']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="novo_nome">Novo Nome:</label>
        <input type="text" name="novo_nome" required><br>
        
        <label for="nova_idade">Nova Idade:</label>
        <input type="number" name="nova_idade" required><br>

        <label for="novo_peso">Novo Peso:</label>
        <input type="number" name="novo_peso" required><br>

        <label for="novo_pais">Novo País:</label>
        <input type="text" name="novo_pais" required><br>

        <label for="nova_equipe">Nova Equipe:</label>
        <input type="text" name="nova_equipe" required><br>

        <button type="submit" value="Enviar">Atualizar Piloto</button>
    </form>
</div>
</div>

<div class="container">
    <h2>Lista de Pilotos</h2>
    <ol>
        <?php foreach ($pilotos as $indice => $piloto): ?>
            <li>
                <p>Nome: <?php echo $piloto['nome']; ?>, Idade: <?php echo $piloto['idade']; ?>, Peso: <?php echo $piloto['peso']; ?>, País: <?php echo $piloto['pais']; ?>, Equipe: <?php echo $piloto['equipe']; ?></p>
                <form action="" method="POST">
                    <input type="hidden" name="excluir_piloto" value="<?php echo $indice; ?>">
                    <button type="submit">Excluir</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ol>
</div>
</body>
</html>
