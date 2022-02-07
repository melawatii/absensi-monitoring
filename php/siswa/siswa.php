<?php

session_start();

// koneksi database
include "../config/koneksi.php";

// jika button sumbit ditekan
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // query database
    $sql = mysqli_query($koneksi, "SELECT username,password,nama FROM loginsiswa WHERE username='$username' AND password='$password'");

    $num = mysqli_num_rows($sql);

    // echo $cek;
    if( $num > 0 ) {
        while($row = mysqli_fetch_array($sql)) {
            $_SESSION['login'] = true;
            $cek = $row['nama'];
            echo "
            <script>
                alert('Selamat datang $cek di Absensi Monitoring');
                document.location.href = 'absen.php';
            </script>
            ";
        }
    } else {
        echo "
            <script>
                alert('Username/Password yang anda masukan salah!');
                document.location.href = 'loginsiswa.php';
            </script>
            ";
    }

}


?>