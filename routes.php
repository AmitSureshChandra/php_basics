<?php

use App\Controller;
use App\Controller\PageController;
use App\Controller\TaskController;

$router->get('','PageController@index');
$router->get('about','PageController@about');
$router->get('contact','PageController@contact');
$router->get('tasks','TaskController@index');
$router->post('tasks/store','TaskController@store');