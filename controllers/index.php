<?php

try {
    $users = App::get('database')->selectAll('users');
}
catch (Exception $exception){
    echo $exception->getMessage();
}

include 'views/index.view.php';