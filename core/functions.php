<?php

function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function view($name,$data=[]){
    extract($data);
    return require "views/{$name}.view.php";
}