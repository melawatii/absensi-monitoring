<?php

// koneksi database
include "../config/koneksi.php";

$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$rombel = $_POST['rombel'];
$rayon = $_POST['rayon'];
$kehadiran = $_POST['kehadiran'];

// query database
$update = mysqli_query($koneksi, "UPDATE siswa SET tanggal='$tanggal', nama='$nama', rombel='$rombel', rayon ='$rayon', kehadiran='$kehadiran' WHERE nis='$id'");

// kondisi
if ($update > 0) {
    echo "
        <script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
        </script>
        ";
}
else {
    echo "
        <script>
            alert('Data Gagal Diubah!');
            document.location.href = 'edit.php';
        </script>
        ";
}

?>