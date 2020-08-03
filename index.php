<?php

use App\Core\Request;
use App\Core\Router;

require 'core/functions.php';
require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::load()->direct(Request::uri(),Request::method());

