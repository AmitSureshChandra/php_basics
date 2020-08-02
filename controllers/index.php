<?php

try {
    $users = $app['database']->selectAll('users');
}
catch (Exception $exception){
    echo $exception->getMessage();
}

include 'views/index.view.php';