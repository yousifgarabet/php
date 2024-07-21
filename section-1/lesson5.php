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

    <?php
    // PHP Associative Array
    $books = [
        [
            "name" => "C# Programming",
            "author" => "C# expert",
            "releaseYear" => 2022,
            "purchaseUrl" => "www.books.com/csharp"
        ],
        [
            "name" => "Python Programming",
            "author" => "Python Expert",
            "releaseYear" => 2021,
            "purchaseUrl" => "www.books.com/python"
        ],
        [
            "name" => "Python Up & Running",
            "author" => "Python Expert",
            "releaseYear" => 2021,
            "purchaseUrl" => "www.books.com/python"
        ],
        [
            "name" => "PHP Programming",
            "author" => "php Expert",
            "releaseYear" => 2023,
            "purchaseUrl" => "www.books.com/python"
        ],

    ];
    ?>



    <h1>PHP Variable Function</h1>
    <?php
    // this is like a lambda function or anonymos function
    $filterByAuthor = function ($books, $author) {

        $fliteredBooks = [];

        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $fliteredBooks[] = $book;
            }
        }

        return $fliteredBooks;
    };

    $fliteredBooks = $filterByAuthor($books, 'Python Expert');
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




    <h1>PHP generic Function</h1>
    <?php
    // this is like a lambda function or anonymos function
    function filter($items, $key, $value)
    {

        $fliteredItems = [];

        foreach ($items as $item) {
            if ($item[$key] === $value) {
                $fliteredItems[] = $item;
            }
        }
        return $fliteredItems;
    }

    $fliteredBooks = filter($books, 'author', 'Python Expert');


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



    <h1>PHP generic Function with Lambda</h1>
    <?php
    // this is like a lambda function or anonymos function
    function filter2($items, $fn)
    {

        $fliteredItems = [];

        foreach ($items as $item) {
            if ($fn($item)) {
                $fliteredItems[] = $item;
            }
        }
        return $fliteredItems;
    }

    $fliteredBooks2 = filter2($books, function ($book) {
        return $book['releaseYear'] >= 2022;
    });
    ?>

    <ul>
        <?php foreach ($fliteredBooks2 as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) By - <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>