<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pegawai";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    echo "Koneksi Gagal :" . mysqli_connect_error();
}