<?php

class Request{
    public static function uri(){
        return  $_SERVER['REQUEST_URI'];
    }
}
