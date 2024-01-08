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
                //["hail mary"]
        ];
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl']; ?>">
                        <?= $book['name'] ?>
                    </a>
                </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>