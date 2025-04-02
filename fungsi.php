<?php
$host = "localhost"; // Ganti dengan host database Anda
$user = "user"; // Ganti dengan username database Anda
$pass = "Tikanurf"; // Ganti dengan password database Anda
$dbname = "pwl07080"; // Ganti dengan nama database And
$koneksi = mysqli_connect("localhost","root","","pwl07080");
 

if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}

//mysqli_close($koneksi);
?>