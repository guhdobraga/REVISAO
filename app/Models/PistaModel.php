<?php
// PistaModel.php

class PistaModel {
    private static $pistas = array(
        array("id" => "1", "cidade" => "Paraguaçu Paulista", "distancia" => "1000KM", "pais" => "Brasil", "idioma" => ""),
        array("id" => "2", "cidade" => "Monaco", "distancia" => "3.337KM", "pais" => "Mônaco", "idioma" => ""),
        array("id" => "3", "cidade" => "Interlagos", "distancia" => "4.309KM", "pais" => "Brasil", "idioma" => ""),
        array("id" => "4", "cidade" => "Silverstone", "distancia" => "5.891KM", "pais" => "Reino Unido", "idioma" => ""),
        array("id" => "5", "cidade" => "Spa-Francorchamps", "distancia" => "7.004KM", "pais" => "Bélgica", "idioma" => ""),
        array("id" => "6", "cidade" => "Suzuka", "distancia" => "5.807KM", "pais" => "Japão", "idioma" => "")
    );

    public static function listarPistas() {
        return self::$pistas;
    }

    public static function adicionarPista($novaPista) {
        // Adiciona a nova pista ao array
        self::$pistas[] = $novaPista;
    }

    public static function excluirPista($id) {
        // Remove a pista com o ID especificado do array
        foreach (self::$pistas as $key => $pista) {
            if ($pista['id'] === $id) {
                unset(self::$pistas[$key]);
                break;
            }
        }
        // Reindexa o array para manter a consistência dos índices
        self::$pistas = array_values(self::$pistas);
    }

    public static function atualizarPista($id, $novosDados) {
        // Atualiza os dados da pista com o ID especificado no array
        foreach (self::$pistas as &$pista) {
            if ($pista['id'] === $id) {
                $pista = array_merge($pista, $novosDados);
                break;
            }
        }
    }
}
