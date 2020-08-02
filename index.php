<?php

require 'core/bootstrap.php';

require Router::load()->direct(Request::uri());

