<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vb;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
        <?php
        $name ="Dark Matter";
        $read = false;
        ?>

    <h1>
        <?php 
         if ($read) {
           echo "You have read $name"; 
         }
         else if (!$read) {
            echo "You have not read $name";
         }
        ?>

        <?= "</br> $name" ?>
    </h1>
</body>
</html>