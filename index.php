<?php
    require_once __DIR__ . '/classes/Movie.php';
    require_once __DIR__ . '/classes/Actor.php';

    $actor = new Actor('Christopher', 'Lloyd', '22-10-1938');
    
    $movies = [
        new Movie('Ritorno al futuro', 116, 1985, [$actor]),
        new Movie('Ritorno al futuro 2', 100, 1985, [$actor]),
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Videoteca</h1>
    <ul>
        <?php foreach($movies as $movie) { ?>
        <li>
            <h3><?= $movie->title; ?></h3>
            <div> Durata: <?= $movie->duration; ?></div>
            <div> Anno: <?= $movie->releaseYear; ?></div>
            <h4>Attori:</h4>
            <ul>
                <?php foreach($movie->actors as $actor) { ?>
                <li><?= $actor->getFullName(); ?></li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>
    </ul>
</body>
</html>