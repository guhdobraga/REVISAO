<?php
// equipeModel.php

class equipeModel {
    private static $equipes = array(
        array("lider" => "Toto Wolff", "nome" => "Mercedes", "pais" => "Reino Unido", "patrocinadores" => "Petronas, INEOS", "pilotos" => array("Lewis Hamilton", "Valtteri Bottas")),
        array("lider" => "Christian Horner", "nome" => "Red Bull Racing", "pais" => "Reino Unido", "patrocinadores" => "Red Bull, Honda", "pilotos" => array("Max Verstappen", "Sergio Perez")),
        array("lider" => "Mattia Binotto", "nome" => "Scuderia Ferrari", "pais" => "Itália", "patrocinadores" => "Mission Winnow, UPS", "pilotos" => array("Charles Leclerc", "Carlos Sainz")),
        array("lider" => "Andreas Seidl", "nome" => "McLaren Racing", "pais" => "Reino Unido", "patrocinadores" => "McLaren, British American Tobacco", "pilotos" => array("Lando Norris", "Daniel Ricciardo")),
        array("lider" => "Laurent Rossi", "nome" => "Alpine F1 Team", "pais" => "França", "patrocinadores" => "Alpine, BWT", "pilotos" => array("Fernando Alonso", "Esteban Ocon")),
    );

    public static function listarEquipes() {
        return self::$equipes;
    }

    public static function adicionarEquipe($novaEquipe) {
        // Adiciona a nova equipe ao array
        self::$equipes[] = $novaEquipe;
    }

    public static function excluirEquipe($id) {
        // Remove a equipe com o ID especificado do array
        foreach (self::$equipes as $key => $equipe) {
            if ($equipe['id'] === $id) {
                unset(self::$equipes[$key]);
                break;
            }
        }
        // Reindexa o array para manter a consistência dos índices
        self::$equipes = array_values(self::$equipes);
    }

    public static function atualizarEquipe($id, $novosDados) {
        // Atualiza os dados da equipe com o ID especificado no array
        foreach (self::$equipes as &$equipe) {
            if ($equipe['id'] === $id) {
                $equipe = array_merge($equipe, $novosDados);
                break;
            }
        }
    }
}
