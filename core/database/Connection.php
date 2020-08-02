<?php

class Connection
{
    public static function make($config){
        $dsn = "${config['connection']};dbname=${config['dbname']}";
        $user = $config['username'];
        $password = $config['password'];
        $options = $config['options'];
        return new PDO($dsn, $user, $password,$options);
    }
}