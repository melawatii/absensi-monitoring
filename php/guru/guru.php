<?php

session_start();

// koneksi database
include "../config/koneksi.php";

// jika button sumbit ditekan
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // query database
    $sql = mysqli_query($koneksi, "SELECT username,password FROM loginguru WHERE username='$username' AND password='$password'");

    $num = mysqli_num_rows($sql);

    // kondisi login;
    if( $num > 0 ) {
        while($row = mysqli_fetch_array($sql)) {
            $_SESSION['login'] = true;
            echo "
            <script>
                alert('Login Berhasil!');
                document.location.href = 'index.php';
            </script>
            ";
        }
    } else {
        echo "
            <script>
                alert('Username/Password yang anda masukan salah!');
                document.location.href = 'loginguru.php';
            </script>
            ";
    }

}


?>