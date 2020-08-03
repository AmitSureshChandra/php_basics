<?php

namespace App\Core;

class App
{

    protected static $registry = [];

    public static function bind($key, $value){
        static::$registry[$key] = $value;
    }

    public static function get($key){
        if (array_key_exists($key, static::$registry))
            return static::$registry[$key];
        throw new Exception('No registry found for requested key');
    }
}