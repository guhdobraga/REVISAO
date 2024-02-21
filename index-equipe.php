<?php
// index.php

// Inclui o controlador e o modelo
include_once 'C:\xampp\htdocs\revisão-array\app\Controllers\EquipeController.php';
include_once 'C:\xampp\htdocs\revisão-array\app\Models\EquipeModel.php';

$equipesController = new EquipesController();

// Processa a adição de uma nova equipe
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['lider']) && isset($_POST['nome']) && isset($_POST['pais']) && isset($_POST['patrocinadores']) && isset($_POST['pilotos'])) {
        $equipesController->adicionarEquipe($_POST['lider'], $_POST['nome'], $_POST['pais'], $_POST['patrocinadores'], $_POST['pilotos']);
    }
}

// Processa a atualização de uma equipe existente
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_equipe']) && isset($_POST['novo_lider']) && isset($_POST['novo_nome']) && isset($_POST['novo_pais']) && isset($_POST['novos_patrocinadores']) && isset($_POST['novos_pilotos'])) {
    $id_equipe = $_POST['id_equipe'];
    $novo_lider = $_POST['novo_lider'];
    $novo_nome = $_POST['novo_nome'];
    $novo_pais = $_POST['novo_pais'];
    $novos_patrocinadores = $_POST['novos_patrocinadores'];
    $novos_pilotos = $_POST['novos_pilotos'];
    
    $equipesController->atualizarEquipe($id_equipe, array(
        "lider" => $novo_lider,
        "nome" => $novo_nome,
        "pais" => $novo_pais,
        "patrocinadores" => $novos_patrocinadores,
        "pilotos" => $novos_pilotos
    ));
}

// Processa a exclusão de uma equipe
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['excluir_equipe'])) {
    $id_equipe = $_POST['excluir_equipe'];
    $equipesController->excluirEquipe($id_equipe);
}

// Lista as equipes
$equipes = $equipesController->listarEquipes();
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
    <h2>Adicionar Equipe</h2>
    <form action="" method="POST">
        <label for="lider">Líder:</label>
        <input type="text" name="lider" required><br>
        
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="pais">País:</label>
        <input type="text" name="pais" required><br>

        <label for="patrocinadores">Patrocinadores:</label>
        <input type="text" name="patrocinadores" required><br>

        <label for="pilotos">Pilotos:</label>
        <input type="text" name="pilotos" required><br>

        <button type="submit" value="Enviar">Adicionar Equipe</button>
    </form>

    
    <h2>Atualizar Equipe</h2>
    <form method="POST">
        <select name="id_equipe">
            <?php foreach ($equipes as $indice => $equipe): ?>
                <option value="<?php echo $indice; ?>"><?php echo $equipe['nome']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="novo_lider">Novo Líder:</label>
        <input type="text" name="novo_lider" required><br>
        
        <label for="novo_nome">Novo Nome:</label>
        <input type="text" name="novo_nome" required><br>

        <label for="novo_pais">Novo País:</label>
        <input type="text" name="novo_pais" required><br>

        <label for="novos_patrocinadores">Novos Patrocinadores:</label>
        <input type="text" name="novos_patrocinadores" required><br>

        <label for="novos_pilotos">Novos Pilotos:</label>
        <input type="text" name="novos_pilotos" required><br>

        <button type="submit" value="Enviar">Atualizar Equipe</button>
    </form>
</div>
</div>

<div class="container">
    <h2>Lista de Equipes</h2>
    <ol>
        <?php foreach ($equipes as $indice => $equipe): ?>
            <li>
                <p>Nome: <?php echo $equipe['nome']; ?>, Líder: <?php echo $equipe['lider']; ?>, País: <?php echo $equipe['pais']; ?>, Patrocinadores: <?php echo $equipe['patrocinadores']; ?>, Pilotos: <?php echo $equipe['pilotos']; ?></p>
                <form action="" method="POST">
                    <input type="hidden" name="excluir_equipe" value="<?php echo $indice; ?>">
                    <button type="submit">Excluir</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ol>
</div>
</body>
</html>
