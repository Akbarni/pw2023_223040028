<?php
$angka=10;

// memeriksa apakah $angka itu bilangan ganjil//
//bilangan yang jika di bagi 2 sisanya 1//
function cek_ganjil_genap($angka){ //parameter
if($angka % 2==1) {
    return "$angka adalah bilangan ganjil";
} else{
    return "$angka adalah bilangan genap";
}

}

echo cek_ganjil_genap($angka); //argument

