<?php
//array
//membuat array
$hari= array('senin','selasa','rabu');
$bulan=['januari','februari','maret'];
$myArray =['akbar',39,false];
$binatang=[ '🐵','🦁','🐔','🐷'];

//mencetak array
echo $hari[1]; //
echo "<hr>";
var_dump($hari);
echo "<hr>";
print_r($bulan);
echo "<hr>";
var_dump($myArray);
echo "<hr>";


//manupulasi array
//mengunakan index
$hari[] ='kamis';
$hari[] = "jum'at";
print_r($hari);
echo "<hr>";

//menambah elemen di akhir menggunkana array_push()

array_push($bulan,'april','mei','juni','juli');
print_r($bulan);
echo "<hr>";

//menambah elemen di depan 
array_unshift($binatang,'🐷');
print_r($binatang);
echo "<hr>";

//menghapus elemen di awal, mengunakan array-pop() 
array_pop($hari);
print_r($hari);
echo "<hr>";

//menghapus elemen di awal, menggunakan array_shift()
array_shift($hari);
print_r($hari);
echo "<hr>";

?>

