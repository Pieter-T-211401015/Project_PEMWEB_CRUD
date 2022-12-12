<?php
if (!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Jabatan</h2>
<form action="?hal=jabatan_insert" method="post">
    <div class="form-group">
        <label for="id_jabatan">ID Jabatan</label>
        <div class="input"><input type="text" id="id_jabatan" name="id_jabatan"></div>
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input"><input type="text" id="nama" name="nama"></div>
    </div>
    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol_simpan">
        <input type="reset" value="Batal" class="tombol_reset">
    </div>
</form>