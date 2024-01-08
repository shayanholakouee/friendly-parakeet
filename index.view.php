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