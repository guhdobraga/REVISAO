<?php
// pilotoModel.php

class pilotoModel {
    private static $pilotos = array(
    array("nome" => "Lewis Hamilton", "idade" => 37, "peso" => 70, "pais" => "Reino Unido", "equipe" => "Mercedes"),
    array("nome" => "Max Verstappen", "idade" => 24, "peso" => 67, "pais" => "Países Baixos", "equipe" => "Red Bull"),
    array("nome" => "Charles Leclerc", "idade" => 24, "peso" => 68, "pais" => "Mônaco", "equipe" => "Ferrari"),
    array("nome" => "Valtteri Bottas", "idade" => 32, "peso" => 76, "pais" => "Finlândia", "equipe" => "Mercedes"),
    array("nome" => "Lando Norris", "idade" => 22, "peso" => 68, "pais" => "Reino Unido", "equipe" => "McLaren"),
    array("nome" => "Carlos Sainz", "idade" => 27, "peso" => 70, "pais" => "Espanha", "equipe" => "Ferrari"),
    array("nome" => "Daniel Ricciardo", "idade" => 32, "peso" => 71, "pais" => "Austrália", "equipe" => "McLaren"),
    array("nome" => "Fernando Alonso", "idade" => 40, "peso" => 68, "pais" => "Espanha", "equipe" => "Alpine"),
    array("nome" => "Sergio Perez", "idade" => 32, "peso" => 64, "pais" => "México", "equipe" => "Red Bull"),
    array("nome" => "Esteban Ocon", "idade" => 25, "peso" => 66, "pais" => "França", "equipe" => "Alpine"),
    );

    public static function listarPilotos() {
        return self::$pilotos;
    }

    public static function adicionarPiloto($novaPiloto) {
        // Adiciona a nova piloto ao array
        self::$pilotos[] = $novaPiloto;
    }

    public static function excluirPiloto($id) {
        // Remove a piloto com o ID especificado do array
        foreach (self::$pilotos as $key => $piloto) {
            if ($piloto['id'] === $id) {
                unset(self::$pilotos[$key]);
                break;
            }
        }
        // Reindexa o array para manter a consistência dos índices
        self::$pilotos = array_values(self::$pilotos);
    }

    public static function atualizarPiloto($id, $novosDados) {
        // Atualiza os dados da piloto com o ID especificado no array
        foreach (self::$pilotos as &$piloto) {
            if ($piloto['id'] === $id) {
                $piloto = array_merge($piloto, $novosDados);
                break;
            }
        }
    }
}
