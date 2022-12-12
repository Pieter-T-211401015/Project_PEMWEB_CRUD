<?php
if (!defined('INDEX')) die("");
$query = mysqli_query($con, "SELECT * FROM pekerja WHERE id_pegawai=$_GET[id]' ");
$data = mysqli_fetch_array($query);
?>

<h2 class="judul">Tambah Pegawai</h2>
<form action="?hal=pegawai_update" method="post" enctype="multipart/form-data">
    <input type="hideen" name="id" value="<?php echo $data['id_pegawai']; ?>">
    <div class="form-group">
        <label for="foto">foto</label>
        <input type="file" id="foto" name="foto">
        <img src="images/<?php echo $data['foto']; ?>" width="150">
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" id="nama" name="nama" value="<?php echo $data['nama_pegawai']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <?php
        if ($data['jenis_kelamin'] == "L") {
            $l = "checked";
            $p = "";
        } else {
            $l = "";
            $p = "checked";
        }
        ?>
        <input type="radio" id="jk" name="jk" value="L" <?php echo $l; ?>>Laki-laki
        <input type="radio" id="jk" name="jk" value="P" <?php echo $p; ?>>Perempuan
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <div class="input">
            <input type="date" id="tanggal" name="tanggal" value="<?php echo $data['tgl_lahir']; ?>">
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
                    if ($j['id_jabatan'] == $data['id_jabatan'])
                        echo "selected";
                    echo ">$j[nama_jabatan]</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <div class="input">
            <textarea style="width:100%;" rows="5" id="keterangan"
                name="keterangan"><?php echo $data['keterangan']; ?> </textarea>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol_simpan">
        <input type="reset" value="Batal" class="tombol_reset">
    </div>
</form>