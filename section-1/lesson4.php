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

    <h1>PHP Associative Array</h1>
    <ul>
        <?php foreach ($books as $book) : ?>
            <?php if ($book['author'] === 'php Expert') : ?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) By - <?= $book['author'] ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <h1>PHP Function to filter Associative Array</h1>
    <?php
    function filterByAuthor($books, $author)
    {
        $fliteredBooks = [];
        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $fliteredBooks[] = $book;
            }
        }

        return $fliteredBooks;
    }

    ?>

    <ul>
        <?php foreach (filterByAuthor($books, 'Python Expert') as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) By - <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>