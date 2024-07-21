<?php




use Core\App;
use Core\Database;
use Core\Validator;

$currentUserId = 1;

$db = App::resolve(Database::class);

// find the corresponding note
$id = $_POST['id'];
$note = $db->query(
    "SELECT * from note where id = :id",
    [
        'id' => $id
    ]
)->findOrFail();

//Authorize the current user to update the note
authorize($note['user_id'] !== $currentUserId);

//validate the form
$errors = [];
$validator = new Validator();
if (!$validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A Body of less than 1,000 characters is required';
}

if (count($errors)) {
    return views('notes/edit.view.php', [
        'heading' => 'Edit note',
        'errors' => $errors,
        'note' => $note,
    ]);
}

//if not validation error, update the record  in the note database table
$db->query('update note set body= :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body'],
]);

// redirect user to note
header('location: /php/notes');
