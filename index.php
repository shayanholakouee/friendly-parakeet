<!doctype html>
<html lang="en">
<head>
    <title>Demo</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $books = [
                [
                        'name' => "Do androids dream of electric sheep",
                        'author' => "Philip K. Dick",
                        'purchaseUrl' => 'www.example.com'
                ],
                [
                        'name' => "The langoliers",
                        'author' => 'andy weir',
                        'purchaseUrl' => 'www.example.com'
                ],
                [
                    'name' => "the martins",
                    'author' => "andy weir",
                    'purchaseUrl' => 'www.example.com'
                ]

        ];
        function filter ($items, $key, $value)
        {
            $filteredItem = [];
            foreach ($items as $item){
                if ($item[$key] === $value)
                    $filteredItem[] = $item;
            }
          return $filteredItem;
        }
        $filteredBooks = filter($books,'author', 'andy weir');
    ?>
    <ul>
        <?php foreach ( $filteredBooks as $book) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl']; ?>">
                        <?= $book['name'] ?>
                    </a>
                </li>
        <?php endforeach; ?>
    </ul>
    <p>

    </p>
</body>
</html>