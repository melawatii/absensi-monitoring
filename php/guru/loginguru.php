<!-- ketika sudah login -->
<?php
    session_start();
    if (isset($_SESSION['login'])) {
        header('Location: index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Sebagai Guru | ABSEN MONITORING</title>
    <!-- Logo -->
    <link rel="icon" href="../../img/download-removebg-preview (1).png">
    <!-- CSS -->
    <link rel="stylesheet" href="../../css/general.css">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

    <!-- ----- Pembuka Button Kembali ----- -->
    <div class="back">
        <div class="btn-back">
            <a href="../../html/status.html" class="btn read"><i class="fas fa-angle-double-left"></i></a>
        </div>
    </div>
    <!-- ----- Penutup Button Kembali ----- -->

    <!-- ----- Pembuka Halaman Login ----- -->
    <div align="center" class="container">
        <span class="text-head">ABSEN MONITORING</span>
        <form action="guru.php" method="POST">
            <table class="login">
                <tr>
                    <td>
                        <input type="text" name="username" placeholder="Masukkan Username ..." required autocomplete="off" autofocus>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="password" id="password" placeholder="Masukkan Password ..." required autocomplete="off">
                        <span class="eye" onclick="executePassword()">
                            <i class="fas fa-eye" id="show"></i>
                            <i class="fas fa-eye-slash" id="hide"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn-home log" name="submit"><i class="fas fa-sign-in-alt"></i>Masuk</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <!-- ----- Penutup Halaman Login ----- -->

    <script src="../../js/script.js"></script>
    
</body>
</html>