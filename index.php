<?php

//$query = bootstrap.php';
//$database = bootstrap.php';

require 'vendor/autoload.php';
require 'core/bootstrap.php';

//die(var_dump($app));
// bunu sildi -- query builder classtan da sildi
//require 'Task.php';

//$router = new Router;

/*
require 'routes.php';

require $router->direct($uri);
*/

require Router::load('routes.php')->direct(Request::uri(), Request::method());