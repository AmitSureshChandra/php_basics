<?php

require 'core/bootstrap.php';

die(var_dump($app));

require Router::load()->direct(Request::uri());

