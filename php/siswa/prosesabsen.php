<?php

// koneksi database
include "../config/koneksi.php";

function tambah($data)
{
    global $koneksi;
    $tanggal = htmlspecialchars($data['tanggal']);
    $nis = htmlspecialchars($data['nis']);
    $nama = htmlspecialchars($data['nama']);
    $rayon = htmlspecialchars($data['rayon']);
    $rombel = htmlspecialchars($data['rombel']);
    $kehadiran = htmlspecialchars($data['kehadiran']);
    $cover = upload();
    if (!$cover) {
        return false;
    }

    // query database
    mysqli_query($koneksi, "INSERT INTO siswa(gambar, tanggal, nis, nama, rombel, rayon, kehadiran) VALUES('$cover', '$tanggal','$nis','$nama','$rombel', '$rayon', '$kehadiran')");

    // pengalihan ke halaman awal
    echo "
        <script>
            alert('Data Anda Telah Direkam!');
            document.location.href = 'tampilanabsen.php';
        </script>
        ";
    
}

function upload()
{
    $nama = $_FILES["cover"]["name"];
    $ukuran = $_FILES["cover"]["size"];
    $error = $_FILES["cover"]["error"];
    $tmpName = $_FILES["cover"]["tmp_name"];

    // jika gambar blum di upload
    if ($error === 4) {
        echo "
            <script>
                alert ('Silakan Upload Gambar!');
            </script>
            ";
        return false;
    }

    // ekstensi gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode(".", $nama);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
            <script>
                alert ('Silakan Gambar Cover Dengan Ekstensi jpg, jpeg atau png!');
            </script>
            ";
        return false;
    }

    // ukuran gambar
    if ($ukuran > 1000000) {
        echo "
            <script>
                alert ('Ukuran Gambar Terlalu Besar!');
            </script>
            ";
        return false;
    }

    // nama pada gambar
    $namaBaru = uniqid();
    $namaBaru .= ".";
    $namaBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, '../guru/gambar/' . $namaBaru);
    return $namaBaru;
}

if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data Anda Telah Direkam!');
                document.location.href = 'tampilanabsen.php';
            </script>
            ";
    } else {
        echo " 
            <script>
                alert('Data Anda Gagal Direkam, Silahkan Coba Lagi!');
                document.location.href = 'absen.php';
            </script>
            ";
    }
}

?>