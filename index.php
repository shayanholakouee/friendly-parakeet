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
        $name = "Dark matter";
        $read = false;
        if ($read){
            $message = "you have read $name";
        } else {
            $message = "you have not $name";
        }
    ?>
    <h1>
        <?php echo $message; ?>
    </h1>
</body>
</html>