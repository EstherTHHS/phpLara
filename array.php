<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php $songs = ["snow at the beach", "midnight Rain", "first love"] ?>
    <!-- <ul>
        <?php foreach ($songs as $song) {
            echo "<li><b>$song</b></li>";
        }
        ?>

    </ul> -->
    <h1>List of popular song in 2022 Dec</h1>
    <?php foreach ($songs as $song) : ?>
        <li><b><?= $song ?></b></li>
    <?php endforeach ?>

</body>

</html>