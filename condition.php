<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $name = "Pollyannia";
    $read = true;
    if (true) {
        $msg = "I have  read " . $name;
    } else $msg = "I have Not read" . $name;

    ?>


    <h1 style="text-align: center;">
        <?= $msg ?>
    </h1>

</body>

</html>