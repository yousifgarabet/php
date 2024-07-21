<?php
//instead of defining this variable
//$heading = "Home page";

$_SESSION['name'] = "Yousif";
views(
    "index.view.php",
    [
        'heading' => 'Home Page' // we send it throught our views 
    ]
);
