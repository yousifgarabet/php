<?php

use Core\App;
use Core\Validator;
use Core\Database;


$errors = [];

require base_path('Core/Validator.php');

$db = App::resolve(Database::class);

$validator = new Validator();
if (!$validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A Body of less than 1,000 characters is required';
}

if (!empty($errors)) {
    return views(
        'notes/create.view.php',
        [
            'heading' => 'Create Note',
            'errors' => $errors,
        ]
    );
}

if (empty($errors)) {
    $db->query("INSERT INTO note(body, user_id) VALUES(:body, :user_id)", [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);

    header('location: /php/notes');
    die();
}
