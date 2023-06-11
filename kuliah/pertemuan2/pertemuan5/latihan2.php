<?php
$binatang=[ '🐵','🦁','🐔','🐷','🦒'];
$makanan =['🍔','🍗','🍟','🥟','🧇'];
array_pop($makanan);
array_shift($makanan);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kebun binatang </title>
</head>
<body>
    <h2>Daftar binatang</h2>
    <ul>
        <?php for($i = 0; $i < 5; $i++ ) { ?>
        <li><?= $binatang [$i]; ?></li>
        <?php } ?>
    </ul>
    <h2>Daftar makanan </h2>
    <ul>
        <?php for($i = 0; $i < count($makanan); $i++ ) { ?>
        <li><?= $makanan [$i]; ?></li>
        <?php } ?>
    </ul>
    <h2>daftar binatang</h2>
    <ol>
        <?php foreach ($binatang as $b) { ?>
        <li><?= $b; ?></li>
        <?php } ?>

    <h2>daftar makanan</h2>
    </ol>
    <ol>
        <?php foreach ($makanan as $m) { ?>
        <li><?= $m; ?></li>
        <?php } ?>
    </ol>
    
</body>
</html>