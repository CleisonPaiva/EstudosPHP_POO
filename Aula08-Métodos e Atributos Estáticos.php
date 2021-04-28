<?php
class Login{
    public static $user;

    public static function verificalogin()
    {

        echo   'O usuario '.self::$user.' Está Logado!';
    }
    
}
Login::$user='Cleison Mendes';
Login::verificalogin();