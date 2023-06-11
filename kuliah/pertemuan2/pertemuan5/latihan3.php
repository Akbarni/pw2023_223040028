<?php
$mahasiswa =[['Akbar','🦁','🍜'],['akbar',]];
echo $mahasiswa[1]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Daftar mahasisw</h2>
    <?php foreach ($mahasiswa as $m ) ?>
    <ul>
        <li>Nama : Akbar</li>
        <li>peliharaan : 🦁</li>
        <li>makana faporit :🍜</li>
    </ul>
    
</body>
</html>