<?php

// this way would work but it's not good way
// return [
//     '/php/' => 'controllers/index.php',
//     '/php/about' => 'controllers/about.php',
//     '/php/notes' => 'controllers/notes/index.php',
//     '/php/note' => 'controllers/notes/show.php',
//     '/php/notes/delete' => 'controllers/notes/delete.php',
//     '/php/notes/create' => 'controllers/notes/show.php',
//     '/php/contact' => 'controllers/contact.php',
// ];

$router->get('/php/', 'controllers/index.php');


$router->get('/php/about', 'controllers/about.php');
$router->get('/php/contact', 'controllers/contact.php');

$router->get('/php/notes', 'controllers/notes/index.php');
$router->get('/php/note', 'controllers/notes/show.php');
$router->delete('/php/note', 'controllers/notes/destroy.php');
$router->get('/php/notes/create', 'controllers/notes/create.php');
$router->get('/php/note/edit', 'controllers/notes/edit.php');
$router->patch('/php/note', 'controllers/notes/update.php');

$router->post('/php/notes/create', 'controllers/notes/store.php');

//dd($router);
