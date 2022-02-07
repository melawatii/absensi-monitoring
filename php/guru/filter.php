<!-- ketika blum login -->
<?php
    session_start();
    if (!isset($_SESSION['login'])) {
        header('Location: loginguru.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Data | ABSEN MONITORING</title>
    <!-- Logo -->
    <link rel="icon" href="../../img/download-removebg-preview (1).png">
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../../css/page1.css">
    <link rel="stylesheet" href="../../css/general.css">
    <link rel="stylesheet" href="../../css/responsive.css">
</head>
<body>

    <!-- ----- Pembuka Button Kembali ----- -->
    <div class="back">
        <div class="btn-back">
            <a href="index.php" class="btn read"><i class="fas fa-angle-double-left"></i></a>
        </div>
    </div>
    <!-- ----- Penutup Button Kembali ----- -->

    <!-- ----- Pembuka Filter Data Siswa ----- -->
    <div align="center" class="container">
        <!-- koneksi database -->
        <?php  
            include "../config/koneksi.php";
        ?>

        <div class="picture-filter">
            <div class="picture-left">
                <img src="../../img/undraw_data_input_fxv2-removebg-preview.png">
            </div>
            <div class="picture-right">
                <img src="../../img/undraw_Reading_list_re_bk72-removebg-preview.png">
            </div>
        </div>

        <form method="GET" action="index.php">
            <div class="text-filter">
                <span>FILTER DATA SISWA</span>
            </div>
            <table cellpadding="10" class="filter">
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal" required>
                    </td>
                </tr>
                <tr>
                    <td>Rombel</td>
                    <td>:</td>
                    <td>
                        <select name="rombel" class="filter-rombel" required>
                            <option value="">Pilih Rombel</option>
                                <!-- Kelas 10 -->
                                    <optgroup label="Kelas X">
                                        <option value="X BDP 1">X BDP 1</option>
                                        <option value="X BDP 2">X BDP 2</option>
                                        <option value="X OTKP 1">X OTKP 1</option>
                                        <option value="X OTKP 2">X OTKP 2</option>
                                        <option value="X RPL 1">X RPL 1</option>
                                        <option value="X RPL 2">X RPL 2</option>
                                        <option value="X RPL 3">X RPL 3</option>
                                        <option value="X RPL 4">X RPL 4</option>
                                        <option value="X RPL 5">X RPL 5</option>
                                        <option value="X TKJ 1">X TKJ 1</option>
                                        <option value="X TKJ 2">X TKJ 2</option>
                                        <option value="X TKJ 3">X TKJ 3</option>
                                        <option value="X TKJ 4">X TKJ 4</option>
                                        <option value="X MMD 1">X MMD 1</option>
                                        <option value="X MMD 2">X MMD 2</option>
                                        <option value="X HTL 1">X HTL 1</option>
                                        <option value="X TBG 1">X TBG 1</option>
                                        <option value="X TBG 2">X TBG 2</option>
                                    </optgrup>

                                <!-- Kelas 11 -->
                                    <optgroup label="Kelas XI">
                                        <option value="XI BDP 1">XI BDP 1</option>
                                        <option value="XI BDP 2">XI BDP 2</option>
                                        <option value="XI OTKP 1">XI OTKP 1</option>
                                        <option value="XI OTKP 2">XI OTKP 2</option>
                                        <option value="XI RPL 1">XI RPL 1</option>
                                        <option value="XI RPL 2">XI RPL 2</option>
                                        <option value="XI RPL 3">XI RPL 3</option>
                                        <option value="XI RPL 4">XI RPL 4</option>
                                        <option value="XI TKJ 1">XI TKJ 1</option>
                                        <option value="XI TKJ 2">XI TKJ 2</option>
                                        <option value="XI TKJ 3">XI TKJ 3</option>
                                        <option value="XI TKJ 4">XI TKJ 4</option>
                                        <option value="XI MMD 1">XI MMD 1</option>
                                        <option value="XI MMD 2">XI MMD 2</option>
                                        <option value="XI HTL 1">XI HTL 1</option>
                                        <option value="XI HTL 2">XI HTL 2</option>
                                        <option value="XI TBG 1">XI TBG 1</option>
                                        <option value="XI TBG 2">XI TBG 2</option>
                                    </optgrup>

                                <!-- Kelas 12 -->
                                    <optgroup label="Kelas XII">
                                        <option value="XII BDP 1">XII BDP 1</option>
                                        <option value="XII BDP 2">XII BDP 2</option>
                                        <option value="XII OTKP 1">XII OTKP 1</option>
                                        <option value="XII OTKP 2">XII OTKP 2</option>
                                        <option value="XII RPL 1">XII RPL 1</option>
                                        <option value="XII RPL 2">XII RPL 2</option>
                                        <option value="XII RPL 3">XII RPL 3</option>
                                        <option value="XII RPL 4">XII RPL 4</option>
                                        <option value="XII TKJ 1">XII TKJ 1</option>
                                        <option value="XII TKJ 2">XII TKJ 2</option>
                                        <option value="XII TKJ 3">XII TKJ 3</option>
                                        <option value="XII TKJ 4">XII TKJ 4</option>
                                        <option value="XII MMD 1">XII MMD 1</option>
                                        <option value="XII MMD 2">XII MMD 2</option>
                                        <option value="XII HTL 1">XII HTL 1</option>
                                        <option value="XII TBG 1">XII TBG 1</option>
                                    </optgrup>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button name="filter" class="btn-home filter">
                            <i class="fas fa-sort-amount-down"></i>
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <!-- ----- Penutup Filter Data Siswa ----- -->

</body>
</html>