<?php 

// session login
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: loginguru.php');
    exit;
}

// koneksi database
include "../config/koneksi.php";

$id = $_GET['id'];

// query database
$hapus = mysqli_query($koneksi,"DELETE FROM siswa WHERE nis='$id'");

// kondisi
if ($hapus > 0) {
    echo "
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'index.php';
        </script>
        ";
}
else {
    echo "
        <script>
            alert('Data Gagal Dihapus!');
            document.location.href = 'index.php';
        </script>
        ";
}

?>