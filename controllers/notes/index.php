<?php
//$heading = "My Notes";

use Core\App;
use Core\Database;

//instead of the following code
// $config = require base_path('config.php');
// $db = new Database($config);

// define db in this way for simplicity
$db = App::resolve(Database::class);

//$id = $_GET['id'];
$notes = $db->query("SELECT * from note where user_id =1",)->getAll();


views(
    "notes/index.view.php",
    [
        'heading' => 'My Notes',
        'notes' => $notes
    ]
);
