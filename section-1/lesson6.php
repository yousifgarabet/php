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


// this is like a lambda function or anonymos function
function filter($items, $fn)
{

    $fliteredItems = [];

    foreach ($items as $item) {
        if ($fn($item)) {
            $fliteredItems[] = $item;
        }
    }
    return $fliteredItems;
}

$fliteredBooks2 = filter($books, function ($book) {
    return $book['releaseYear'] <= 2022 && $book['releaseYear'] >= 2021;
});

// we can also php build-in function
$fliteredBooks = array_filter($books, function ($book) {
    return $book['releaseYear'] <= 2022 && $book['releaseYear'] >= 2021;
});

require "lesson6.view.php";
