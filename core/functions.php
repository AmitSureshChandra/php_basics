<?php


function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function view($name,$data=[]){
    extract($data);
    return require "app/views/{$name}.view.php";
}

function redirect($path){
    header('location : /' . $path);
}