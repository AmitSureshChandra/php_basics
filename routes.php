<?php

$router->get('','PageController@index');
$router->get('about','PageController@about');
$router->get('contact','PageController@contact');
$router->get('add-task','PageController@addTask');