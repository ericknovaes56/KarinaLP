<?php

namespace App\Utils;

/**
 * 
 * Classe para manipulação de quebras de linha.
 * 
*/

class Br {

    /**
     * 
     * Gera uma string contendo uma quantidade especificada de quebras de linha.
     *
     * @param int $quantity [Opcional] A quantidade de quebras de linha a serem geradas. O padrão é 1.
     * @return string As quebras de linha geradas.
     * 
    */

    public static function gen(int $quantity = 1) {

        return str_repeat("\r\n", $quantity);

    }

}