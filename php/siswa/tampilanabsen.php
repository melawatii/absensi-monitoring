<!-- ketika blum login -->
<?php
    session_start();
    if (!isset($_SESSION['login'])) {
        header('Location: loginsiswa.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Format Kehadiran | ABSEN MONITORING</title>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Logo -->
    <link rel="icon" href="../../img/download-removebg-preview (1).png">
    <!-- CSS -->
    <link rel="stylesheet" href="../../css/page1.css">
    <link rel="stylesheet" href="../../css/general.css">
</head>
<body>

    <!-- ----- Pembuka Button Log Out ----- -->
    <div class="log-out">
        <a href="../config/logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?');">
            <button class="btn-content"><i class="fas fa-sign-out-alt"></i></button>
        </a>
    </div>
    <!-- ----- Penutup Button Log Out ----- -->

    <!-- ----- Pembuka Button Kembali ----- -->
    <div class="back">
        <div class="btn-back">
            <a href="absen.php" class="btn read"><i class="fas fa-angle-double-left"></i></a>
        </div>
    </div>
    <!-- ----- Penutup Button Kembali ----- -->

    <!-- ----- Pembuka Tampilan Absen ----- -->
    <div class="container">
        <center class="view-absent">
            <div class="image-absent">
                <img src="../../img/undraw_Order_confirmed_re_g0if__1_-removebg-preview.png" alt="">
            </div>
            <div class="word-absent">
                <p>Tanggapan anda telah direkam,</p>
                <p>terimakasih telah mengisi absen kehadiran hari ini</p>
            </div>
        </center>
    </div>
    <!-- ----- Penutup Tampilan Absen ----- -->


</body>
</html>