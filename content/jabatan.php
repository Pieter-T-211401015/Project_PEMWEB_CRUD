<?php
if (!defined('INDEX')) die("");
?>
<h2 class="judul">Data Jabatan</h2>
<a href="?hal=jabatan_tambah" class="tombol">Tambah</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Jabatan</th>
            <th>Nama Jabatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = mysqli_query($con, "SELECT * FROM jabatan ORDER BY nama_jabatan ASC");
        $no = 0;
        while ($data = mysqli_fetch_array($query)) {
            $no++;
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['id_jabatan']; ?></td>
            <td><?php echo $data['nama_jabatan']; ?></td>
            <td>
                <a class="tombol_edit" href="?hal=jabatan_edit&id=<?php echo $data['id_jabatan']; ?>">Edit</a>
                <a class="tombol_hapus" href="?hal=jabatan_hapus&id=<?php echo $data['id_jabatan']; ?>">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>