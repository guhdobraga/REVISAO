<?php
// index.php

// Inclui o controlador e o pista
include_once 'C:\xampp\htdocs\revisão-array\app\Controllers\CorridaController.php';
include_once 'C:\xampp\htdocs\revisão-array\app\Controllers\PistaController.php';
include_once 'C:\xampp\htdocs\revisão-array\app\Controllers\PilotoController.php';
include_once 'C:\xampp\htdocs\revisão-array\app\Controllers\EquipeController.php';
include_once 'C:\xampp\htdocs\revisão-array\app\Controllers\CarroController.php';
include_once 'C:\xampp\htdocs\revisão-array\app\Models\CorridaModel.php';
include_once 'C:\xampp\htdocs\revisão-array\app\Models\CarroModel.php';

$corridaController = new CorridaController();

// Processa a adição de um novo corrida
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['pista']) && isset($_POST['data']) && isset($_POST['pilotos']) && isset($_POST['carros']) && isset($_POST['equipe'])) {
        $corridaController->adicionarCorrida($_POST['pista'], $_POST['data'], $_POST['pilotos'], $_POST['carros'], $_POST['equipe']);
    }
}

// Processa a atualização de um corrida existente
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && isset($_POST['novo_pista']) && isset($_POST['nova_data']) && isset($_POST['novo_carros']) && isset($_POST['novo_pilotos']) && isset($_POST['nova_equipe'])) {
    $id = $_POST['id'];
    $novo_pista = $_POST['novo_pista'];
    $nova_data = $_POST['nova_data'];
    $novo_pilotos = $_POST['novo_pilotos'];
    $novo_carros = $_POST['novo_carros'];
    $nova_equipe = $_POST['nova_equipe'];
    
    $corridaController->atualizarCorrida($id, array("pista" => $novo_pista, "data" => $nova_data, "pilotos" => $novo_pilotos, "carros" => $novo_carros, "equipe" => $nova_equipe));
}

// Processa a exclusão de um corrida
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['excluir_corrida'])) {
    $id = $_POST['excluir_corrida'];
    $corridaController->excluirCorrida($id);
}

// Lista os corridas
$corridas = $corridaController->listarCorridas();

$pistaController = new PistaController();
$pilotoController = new PilotoController();
$equipesController = new EquipesController();
$carroController = new CarroController();



$pistas = $pistaController->listarPistas();
$pilotos = $pilotoController->listarPilotos();
$equipes = $equipesController->listarEquipes();
$carros = $carroController->listarCarros();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo 'id' está definido no POST
    if (isset($_POST['id'])) {
        // Obtém o índice da corrida selecionada
        $id = $_POST['id'];
        
        // Verifica se o índice existe no array de corridas
        if (array_key_exists($id, $corridas)) {
            // A corrida selecionada está no array de corridas, agora você pode acessar os dados dela
            $corrida_selecionada = $corridas[$id];
            
            // Exemplo de uso dos dados da corrida selecionada
            echo "Você selecionou a corrida na pista: " . $corrida_selecionada['pista'];
        } else {
            // O índice da corrida selecionada não existe no array de corridas
            echo "Erro: Corrida selecionada não encontrada.";
        }
    } else {
        // O campo 'id' não está definido no POST
        echo "Erro: Campo 'id' não foi enviado no formulário.";
    }
}
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
    <h2>Adicionar Corrida</h2>
    <form action="" method="POST">
        <label for="pista">Pista:</label>
        <select name="pista" required>
            <?php foreach ($pistas as $pista): ?>
                <option value="<?php echo $pista['cidade']; ?>"><?php echo $pista['cidade']; ?></option>
            <?php endforeach; ?>
        </select><br>
        
        <label for="data">Data:</label>
        <input type="text" name="data" required><br>

        <label for="pilotos">Pilotos:</label>
        <select name="pilotos" required>
            <?php foreach ($pilotos as $piloto): ?>
                <option value="<?php echo $piloto['nome']; ?>"><?php echo $piloto['nome']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="carros">Carros:</label>
        <select name="carros" required>
            <?php foreach ($carros as $carro): ?>
                <option value="<?php echo $carro['modelo']; ?>"><?php echo $carro['modelo']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="equipe">Equipe:</label>
        <select name="equipe" required>
            <?php foreach ($equipes as $equipe): ?>
                <option value="<?php echo $equipe['nome']; ?>"><?php echo $equipe['nome']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <button type="submit" value="Enviar">Adicionar Corrida</button>
    </form>

  
    <h2>Atualizar Corrida</h2>
    <form method="POST">
        <select name="id">
            <?php foreach ($corridas as $indice => $corrida): ?>
                <option value="<?php echo $indice; ?>"><?php echo $corrida['pista']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="novo_pista">Novo pista:</label>
        <select name="novo_pista" required>
            <?php foreach ($pistas as $pista): ?>
                <option value="<?php echo $pista['cidade']; ?>"><?php echo $pista['cidade']; ?></option>
            <?php endforeach; ?>
        </select><br>
        
        <label for="nova_data">Nova Data:</label>
        <input type="text" name="nova_data" required><br>

        <label for="novo_pilotos">Novo Pilotos:</label>
        <select name="novo_pilotos" required>
            <?php foreach ($pilotos as $piloto): ?>
                <option value="<?php echo $piloto['nome']; ?>"><?php echo $piloto['nome']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="novo_carros">Novo Carros:</label>
        <select name="novo_carros" required>
            <?php foreach ($carros as $carro): ?>
                <option value="<?php echo $carro['modelo']; ?>"><?php echo $carro['modelo']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="nova_equipe">Nova Equipe:</label>
        <select name="nova_equipe" required>
            <?php foreach ($equipes as $equipe): ?>
                <option value="<?php echo $equipe['nome']; ?>"><?php echo $equipe['nome']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <button type="submit" value="Enviar">Atualizar Corrida</button>
    </form>
</div>
</div>

<div class="container">
    <h2>Lista de Corridas</h2>
    <ol>
        <?php foreach ($corridas as $indice => $corrida): ?>
            <li>
                <p>pista: <?php echo $corrida['pista']; ?>, Cor: <?php echo $corrida['data']; ?>, Pilotos: <?php echo $corrida['pilotos']; ?>, Carros: <?php echo $corrida['carros']; ?>, Equipe: <?php echo $corrida['equipe']; ?></p>
                <form action="" method="POST">
                    <input type="hidden" name="excluir_corrida" value="<?php echo $indice; ?>">
                    <button type="submit">Excluir</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ol>
</div>
</body>
</html>

</body>
</html>
