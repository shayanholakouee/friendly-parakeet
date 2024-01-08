<?php

$books = [
    [
        'name' => "Do androids dream of electric sheep",
        'author' => "Philip K. Dick",
        'purchaseUrl' => 'www.example.com',
        'releaseYear' => 1977
    ],
    [
        'name' => "The langoliers",
        'author' => 'andy weir',
        'purchaseUrl' => 'www.example.com',
        'releaseYear' => 2001
    ],
    [
        'name' => "the martins",
        'author' => "andy weir",
        'purchaseUrl' => 'www.example.com',
        'releaseYear' => 1990
    ]

];
$filteredBooks = array_filter($books, function ($books){
    return $books['releaseYear'] >=1950;
});

require "index.view.php";