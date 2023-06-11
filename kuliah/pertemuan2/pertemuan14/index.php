<?php
require('functions.php');
$name = 'Home';

// cari siswa berdasarkan keyword,ketika tombol di klik
if(isset($_GET['search'])){
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM Mahasiswa
            WHERE 
            Nama LIKE '%$keyword' OR
            Jurusan LIKE '%$keyword' OR
            Email LIKE '%$keyword' 
            
            ";

$students = query($query);


}else{

//  siapkan data $students
$students = query("SELECT * FROM mahasiswa");
}



require('views/index.view.php');
