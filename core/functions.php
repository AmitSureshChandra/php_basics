<?php

function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function view($name){
    return require "views/{$name}.view.php";
}