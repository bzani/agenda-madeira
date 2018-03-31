<?php

 /**
 *    Classe responsavel pela consistencia e ajuste dos dados
 */
class ValidationModel {

    /**
    *     Trata pontuacao da string
    */
    static function alphaNum($data) {
        return preg_replace("([[:punct:]]| )",'',$data);
    }

    /**
    *    Trata caracteres nao numericos da string
    */
    static function numeric($data) {
        return preg_replace("([[:punct:]]|[[:alpha:]]| )",'',$data);
    }

    /**
     * Trata conteudo HTML/XML e especiais
     */
    static function cleanString($data) {
        return addslashes(strip_tags($data));
    }

    /**
    * Verifica se dados sao nulos
    */
    static function isEmpty($data) {
        if(!(strlen($data) > 0))
            return true;
        return false;
    }

    /**
    * Verifica se dados sao numericos
    */
    static function isNumeric($data) {
        $data = str_replace(',', '.', $data);
        if(!(is_numeric($data)))
            return false;
        return true;
    }

    /**
    * Verifica se dados sao numeros inteiros
    */
    static function isInteger($data) {
        if(!DataValidator::isNumeric($data))
            return false;
        if(preg_match('/[[:punct:]&^-]/', $data) > 0)
            return false;
        return true;
    }

}
