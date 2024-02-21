<?php
// index.php

// Inclui o controlador e o modelo
include_once 'C:\xampp\htdocs\revisão-array\app\Controllers\CarroController.php';
include_once 'C:\xampp\htdocs\revisão-array\app\Models\CarroModel.php';

$carroController = new CarroController();

// Processa a adição de um novo carro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['modelo']) && isset($_POST['cor']) && isset($_POST['ano_fabricacao']) && isset($_POST['equipe'])) {
        $carroController->adicionarCarro($_POST['modelo'], $_POST['cor'], $_POST['ano_fabricacao'], $_POST['equipe']);
    }
}

// Processa a atualização de um carro existente
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_carro']) && isset($_POST['novo_modelo']) && isset($_POST['nova_cor']) && isset($_POST['novo_ano_fabricacao']) && isset($_POST['nova_equipe'])) {
    $id_carro = $_POST['id_carro'];
    $novo_modelo = $_POST['novo_modelo'];
    $nova_cor = $_POST['nova_cor'];
    $novo_ano_fabricacao = $_POST['novo_ano_fabricacao'];
    $nova_equipe = $_POST['nova_equipe'];
    
    $carroController->atualizarCarro($id_carro, array("modelo" => $novo_modelo, "cor" => $nova_cor, "ano_fabricacao" => $novo_ano_fabricacao, "equipe" => $nova_equipe));
}

// Processa a exclusão de um carro
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['excluir_carro'])) {
    $id_carro = $_POST['excluir_carro'];
    $carroController->excluirCarro($id_carro);
}

// Lista os carros
$carros = $carroController->listarCarros();
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
    <h2>Adicionar Carro</h2>
    <form action="" method="POST">
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" required><br>
        
        <label for="cor">Cor:</label>
        <input type="text" name="cor" required><br>

        <label for="ano_fabricacao">Ano de Fabricação:</label>
        <input type="number" name="ano_fabricacao" required><br>

        <label for="equipe">Equipe:</label>
        <input type="text" name="equipe" required><br>

        <button type="submit" value="Enviar">Adicionar Carro</button>
    </form>

        
    <h2>Atualizar Carro</h2>
    <form method="POST">
        <select name="id_carro">
            <?php foreach ($carros as $indice => $carro): ?>
                <option value="<?php echo $indice; ?>"><?php echo $carro['modelo']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="novo_modelo">Novo Modelo:</label>
        <input type="text" name="novo_modelo" required><br>
        
        <label for="nova_cor">Nova Cor:</label>
        <input type="text" name="nova_cor" required><br>

        <label for="novo_ano_fabricacao">Novo Ano de Fabricação:</label>
        <input type="number" name="novo_ano_fabricacao" required><br>

        <label for="nova_equipe">Nova Equipe:</label>
        <input type="text" name="nova_equipe" required><br>

        <button type="submit" value="Enviar">Atualizar Carro</button>
    </form>
</div>
</div>
<div class="container">
    <h2>Lista de Carros</h2>
    <ol>
        <?php foreach ($carros as $indice => $carro): ?>
            <li>
                <p><strong>Modelo:</strong> <?php echo $carro['modelo']; ?></p>
                <p><strong>Cor:</strong> <?php echo $carro['cor']; ?></p>
                <p><strong>Ano de Fabricação:</strong> <?php echo $carro['ano_fabricacao']; ?></p>
                <p><strong>Equipe:</strong> <?php echo $carro['equipe']; ?></p>
                <form action="" method="POST">
                    <input type="hidden" name="excluir_carro" value="<?php echo $indice; ?>">
                    <button type="submit">Excluir</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ol>
</div>

</body>
</html>
