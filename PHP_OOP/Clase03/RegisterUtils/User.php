<?php
/**
 * Traemos una libreria externa que se conforma de utilidades
 * que se compone de utilidades para manejar los datos de
 * nuestros usuarios, haciendo uso de metodos estaticos dentro
 * de una class User
 * 
 */
namespace RegisterUtils;

class User
{

    public static function crypter($param)
    {
        return password_hash($param, PASSWORD_DEFAULT);
    }

    public static function emailVerify($param)
    {
        if(filter_var($param, FILTER_VALIDATE_EMAIL) == true) {
            return $param;
        }
        return null;
    }

}