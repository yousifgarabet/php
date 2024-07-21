<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body {
            place-items: center;
            height: 100vb;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>


    <h1>PHP generic Function with Lambda</h1>
    <?php
    // this is like a lambda function or anonymos function

    ?>

    <ul>
        <?php foreach ($fliteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) By - <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>