<?php

App::bind('config',require 'core/config.php');

App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));




