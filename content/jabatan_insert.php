<?php
if (!defined('INDEX')) die ("");

$query = mysqli_query($con, "INSERT INTO jabatan SET id_jabatan='$_POST[id_jabatan]', nama_jabatan = '$_POST[nama]' ");

if ($query){
    echo 'Data berhasil di simpan';
    echo "<meta http-equiv='refresh' content='1;url=?hal=jabatan'>";
} else {
    echo 'Tidak dapat menyimpan data';
    echo mysqli_error();
}