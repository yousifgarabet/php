<?php

use Core\App;
use Core\Database;

//$heading = "Note";

$db = App::resolve(Database::class);

$currentUserId = 1;

// find the item by id and delete it

$id = $_POST['id']; // we should never send id inline directly from browser because milissious will easily destroy our DB
$query = "select * from posts where id = ?"; // we used ? to use not using id inline
$note = $db->query(
    "SELECT * from note where id = :id",
    [
        'id' => $id
    ]
)->findOrFail();

//dd($note['user_id']);

authorize($note['user_id'] !== $currentUserId);

$db->query("delete from note where id = :id", [
    'id' => $_POST['id']
]);


// go to notes page
header("location: /php/notes");
exit();
