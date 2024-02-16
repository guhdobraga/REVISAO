<?php
// corridaModel.php

class corridaModel {
    private static $corridas = array(
        "pista" => $pistas[0],
        "data" => "2024-06-15",
        "pilotos" => $pilotos,
        "carros" => $carros,
        "equipes" => $equipes
    );

    public static function listarCorridas() {
        return self::$corridas;
    }

    public static function adicionarCorrida($novaCorrida) {
        // Adiciona a nova corrida ao array
        self::$corridas[] = $novaCorrida;
    }

    public static function excluirCorrida($id) {
        // Remove a corrida com o ID especificado do array
        foreach (self::$corridas as $key => $corrida) {
            if ($corrida['id'] === $id) {
                unset(self::$corridas[$key]);
                break;
            }
        }
        // Reindexa o array para manter a consistência dos índices
        self::$corridas = array_values(self::$corridas);
    }

    public static function atualizarCorrida($id, $novosDados) {
        // Atualiza os dados da corrida com o ID especificado no array
        foreach (self::$corridas as &$corrida) {
            if ($corrida['id'] === $id) {
                $corrida = array_merge($corrida, $novosDados);
                break;
            }
        }
    }
}
