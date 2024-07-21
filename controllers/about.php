<?php
// dd($_SESSION['name']);
$name = $_SESSION['name'];
views(
    "about.view.php",
    [
        'heading' => "About us by {$name}"
    ]
);
