<?php
//instead of defining this variable
//$heading = "Home page";

views(
    "index.view.php",
    [
        'heading' => 'Home Page' // we send it throught our views 
    ]
);
