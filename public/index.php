<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

// this will automatically load file.php when required such as Database.php or Responce.php
spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});

// require base_path('Database.php');
// require base_path('Responce.php');

require base_path('bootstrap.php');

$router = new \Core\Router();
//require base_path('Core/router.php');


//$config = require('config.php');
//$db = new Database($config);
//$id = $_GET['id']; // we should never send id inline directly from browser because milissious will easily destroy our DB
//$query = "select * from posts where id = ?"; // we used ? to use not using id inline

//$posts = $db->query($query, [$id]);


// _method here is a unique name for an input we use in the forms to recognize if it's delete, update, ... 
//$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];

$routes = require base_path('routes.php');

// Always use absolute paths for consistency
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD']; // this is similar to the above line of code
//dd($method);
$router->route($uri, $method);
