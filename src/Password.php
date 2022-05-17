<?php

namespace PaulinhoSupriano\passwordCryptPHP;

class Password
{
    /**
     * @param $password
     * @return false|string
     */
    public static function crypt($password)
    {
        if (empty($password)) {
            return false;
        }
        return \password_hash($password, PASSWORD_BCRYPT);
    }

    /**
     * @param $password Senha digitada
     * @param $hashCheck gerado anterior
     * @return bool TRUE/FALSE
     */
    public static function check($password, $hashCheck): bool
    {
        if (password_verify($password, $hashCheck)) {
            return true;
        }
        return false;
    }

    public static function randomPassword(int $lenght = 8)
    {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < $lenght; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }
}
