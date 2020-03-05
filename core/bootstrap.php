<?php 


App::bind('config', require 'config.php');

var_dump(App::get('config'));

/*
$app = [];

$app['config'] = require 'config.php';
*/

/*
require 'core/Router.php';

require 'core/Request.php';

require 'core/database/Connection.php';

require 'core/database/QueryBuilder.php';
*/

App::bind('database', new QueryBuilder(
	Connection::make(App::get('config')['database'])
));

/*	
$app['database'] = new QueryBuilder(
	Connection::make($app['config']['database'])
);
*/