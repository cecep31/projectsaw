<?php
$host = "localhost";  // ip server mysql
$user = "root";		  // username mysql
$pass = "";			  // password mysql
$db   = "db_saw";    // db yang digunakan

$kon  = mysqli_connect($host, $user, $pass, $db);

// if($kon){
//     echo "Terkoneksi dengan MySQL Server <br>";
//     echo "Database $db bisa diakses";
//   }else{
//     echo "Koneksi Gagal Bro..";
//   }