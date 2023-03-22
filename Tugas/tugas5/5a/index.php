<?php
$mahasiswa = [
  [
    "nama" => "Akbar Nur Iman",
    "nrp" => "223040028",
    "jurusan" => "Teknik Informatika",
    "email" => "akbarnuriman3@gmail.com",
    "gambar" => "1.png",
  ],
  [
    "nama" => "daffa aprilino",
    "nrp" => "223040025",
    "jurusan" => "Teknik Informatika",
    "email" => "daffaaprilino@gmail.com",
    "gambar" => "2.png",
  ],
  [
    "nama" => "Alvin Abdul Sahab",
    "nrp" => "223040026",
    "jurusan" => "Teknik Informatika",
    "email" => "Alvinabdul@gmail.com",
    "gambar" => "3.png",
  ],
  [
    "nama" => "Daniel Satya Ramadhan",
    "nrp" => "223040011",
    "jurusan" => "Teknik Informatika",
    "email" => "danielsatyaramadhan@gmail.com",
    "gambar" => "5.png",
  ],
  [
    "nama" => "davina putri kusuma",
    "nrp" => "223040016",
    "jurusan" => "Teknik Informatika",
    "email" => "davina@gmail.com",
    "gambar" => "4.png",
  ],
  [
    "nama" => "Farid Maulana Suherman",
    "nrp" => "223040008",
    "jurusan" => "Teknik Informatika",
    "email" => "faridsuherman@gmail.com",
    "gambar" => "6.png",
  ],
  [
    "nama" => "Muhammad al ghifari",
    "nrp" => "223040001",
    "jurusan" => "Teknik Informatika",
    "email" => "algifari@gmail.com",
    "gambar" => "7.png",
  ],
  [
    "nama" => "Muhammad fauzan swi putera",
    "nrp" => "223040033",
    "jurusan" => "Teknik Informatika",
    "email" => "fauzan@gmail.com",
    "gambar" => "8.png",
  ],
  [
    "nama" => "Gina Meirina",
    "nrp" => "223040006",
    "jurusan" => "Teknik Informatika",
    "email" => "ginamairina@gmail.com",
    "gambar" => "9.png",
  ],
  [
    "nama" => "indri tania lestari",
    "nrp" => "22304000",
    "jurusan" => "Teknik Informatika",
    "email" => "indri@gmail.com",
    "gambar" => "10.png",
  ],
];
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>

  <h1>Daftar Mahasiswa</h1>

  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
      </li>
      <li>Nama : <?= $mhs["nama"]; ?> </li>
      <li>NRP : <?= $mhs["nrp"]; ?> </li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?> </li>
      <li>Email : <?= $mhs["email"]; ?> </li>
    </ul>

  <?php endforeach; ?>

</body>

</html>