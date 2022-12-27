<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php $songs = [
        [
            'name' => 'snow at the beach',
            'writer' => 'T.S',
            'releaseDate' => 'November/2022',
            'link' => 'https://youtu.be/ycE7bUq3-2k'
        ],
        [
            'name' => 'first love',
            'writer' => 'utada hikaru',
            'releaseDate' => 'Apr/28/1999',
            'link' => 'https://youtu.be/o1sUaVJUeB0'
        ]
    ];
    ?>

    <?php foreach ($songs as $song) : ?>
        <li>
            <a href="<?= $song['link'] ?>">
                <?= $song['name'] ?></a>
            <span>releaseDate: <?= $song['releaseDate'] ?></span>

        </li>
    <?php endforeach ?>
</body>

</html>