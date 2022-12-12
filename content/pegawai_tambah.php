<?php
if (!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Pegawai</h2>
<form action="?hal=pegawai_insert" method="post" enctype="multipart/form-data">
    <input type="hideen" name="id" value="<?php echo $data['id_pegawai']; ?>">
    <div class="form-group">
        <label for="foto">Foto</label>
        <div class="input">
            <input type="file" id="foto" name="foto">
        </div>
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" id="nama" name="nama">
        </div>
    </div>
    <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <input type="radio" id="jk" name="jk" value="L" <?php echo $l; ?>>Laki-laki
        <input type="radio" id="jk" name="jk" value="P" <?php echo $p; ?>>Perempuan
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <div class="input">
            <input type="date" id="tanggal" name="tanggal">
        </div>
    </div>

    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <div class="input">
            <select name="jabatan" id="jabatan">
                <option>-- Pilih Jabatan --</option>
                <?php
                $queryjabatan = mysqli_query($con, "SELECT * FROM jabatan");
                while ($j = mysqli_fetch_array($queryjabatan)) {
                    echo "<option value='$j[id_jabatan]'";
                    echo ">$j[nama_jabatan]</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol_simpan">
        <input type="reset" value="Batal" class="tombol_reset">
    </div>
</form>