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
    <h1>Books Recommendation</h1>
    <?php
    // PHP Array
    $books = [
        "Holy Bible",
        "C# Programming",
        "Python Programming"
    ];
    ?>

    <h1>Loop in PHP</h1>
    <ul>
        <?php

        foreach ($books as $book) {
            echo "<li>" . $book . "</li>";
        }
        ?>
    </ul>

    <!-- this is another way will give us same result -->

    <h1>Loop in PHP in another way</h1>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?> </li>;
        <?php endforeach ?>

    </ul>
    <ul>
        <li>Holy Bible</li>
        <li>C# programming</li>
        <li>Python Programming</li>
    </ul>

    <?php
    echo "The index of Book[1] = $books[1]<br>";
    ?>


    <?php
    // PHP Associative Array
    $books = [
        [
            "name" => "C# Programming",
            "author" => "C# expert",
            "purchaseUrl" => "www.books.com/csharp"
        ],
        [
            "name" => "Python Programming",
            "author" => "Pytho Expert",
            "purchaseUrl" => "www.books.com/python"
        ],

    ];
    ?>

    <h1>PHP Associative Array</h1>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li>Name: <?= $book['name'] ?></li>
            <li>Author: <?= $book['author'] ?></li>
            <li>purchaseUrl: <a href="<?= $book['purchaseUrl'] ?>"><?= $book['purchaseUrl'] ?></a> </li>
        <?php endforeach; ?>
    </ul>



</body>

</html>