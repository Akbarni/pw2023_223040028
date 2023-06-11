<?php
require('functions.php');

$name = 'Home';

// koneksi ke db
$conn = mysqli_connect('localhost','root','','pw2023_223040028') or die ('KONEKSI GAGAL');

// query ke table mahsiswa

$result = mysqli_query($conn, "SELECT * FROM mahasiswa") or die (mysqli_error($conn));

$rows =[];
while ($row = mysqli_fetch_assoc($result)){
  $rows[]= $row;
}

// siapkan data $student

$students= $rows;



// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/index.view.php');
