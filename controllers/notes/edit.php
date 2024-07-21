<?php

use Core\App;
use Core\Database;

$currentUserId = 1;

$db = App::resolve(Database::class);


$id = $_GET['id']; // we should never send id inline directly from browser because milissious will easily destroy our DB
$query = "select * from posts where id = ?"; // we used ? to use not using id inline
$note = $db->query(
    "SELECT * from note where id = :id",
    [
        'id' => $id
    ]
)->findOrFail();


authorize($note['user_id'] !== $currentUserId);

views(
    'notes/edit.view.php',
    [
        'heading' => 'Edit Note',
        'errors' => [],
        'note' => $note,
    ]
);
