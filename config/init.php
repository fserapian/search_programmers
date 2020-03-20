<?php

// start session
session_start();

// include config file
require_once 'config.php';

// include helpers
require_once 'helpers/system_helper.php';

// autoload classes
spl_autoload_register(function ($className) {
    require_once 'lib/' . $className . '.php';
});
