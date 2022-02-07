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
    <title>Edit Data Siswa | ABSEN MONITORING</title>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Logo -->
    <link rel="icon" href="../../img/download-removebg-preview (1).png">
    <!-- CSS -->
    <link rel="stylesheet" href="../../css/general.css">
    <link rel="stylesheet" href="../../css/page1.css">
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

    <!-- ----- Pembuka Edit Data Siswa ----- -->
    <div class="container">
    <div class="form">
        <div class="image-content">
            <img src="../../img/undraw_smart_home_re_orvn.png" class="box">
        </div>

        <?php
            // koneksi database
            include "../config/koneksi.php";
            // query
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$id'");
            while($d = mysqli_fetch_array($data)) {
        ?>

        <div class="form-content edit">
            <form method="POST" action="ubah.php">
                <table class="form-absen" cellpadding="10" class="box">
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $d['nis']; ?>">
                            <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Rayon</td>
                        <td>:</td>
                        <td>
                            <select name="rayon" required>
                                <option value="">Pilih Rayon</option>
                                <optgroup label="Ciawi">
                                    <option value="Cia 1">Cia 1</option>
                                    <option value="Cia 2">Cia 2</option>
                                    <option value="Cia 3">Cia 3</option>
                                    <option value="Cia 4">Cia 4</option>
                                    <option value="Cia 5">Cia 5</option>
                                </optgroup>
                                <optgroup label="Cibedug">
                                    <option value="Cib 1">Cib 1</option>
                                    <option value="Cib 2">Cib 2</option>
                                    <option value="Cib 3">Cib 3</option>
                                </optgroup>
                                <optgroup label="Cicurug">
                                    <option value="Cic 1">Cic 1</option>
                                    <option value="Cic 2">Cic 2</option>
                                    <option value="Cic 3">Cic 3</option>
                                    <option value="Cic 4">Cic 4</option>
                                    <option value="Cic 5">Cic 5</option>
                                    <option value="Cic 6">Cic 6</option>
                                    <option value="Cic 7">Cic 7</option>
                                </optgroup>
                                <optgroup label="Cisarua">
                                    <option value="Cis 1">Cis 1</option>
                                    <option value="Cis 2">Cis 2</option>
                                    <option value="Cis 3">Cis 3</option>
                                    <option value="Cis 4">Cis 4</option>
                                    <option value="Cis 5">Cis 5</option>
                                    <option value="Cis 6">Cis 6</option>
                                </optgroup>
                                <optgroup label="Sukasari">
                                    <option value="Suk 1">Suk 1</option>
                                    <option value="Suk 2">Suk 2</option>
                                </optgroup>
                                <optgroup label="Tajur">
                                    <option value="Taj 1">Taj 1</option>
                                    <option value="Taj 2">Taj 2</option>
                                    <option value="Taj 3">Taj 3</option>
                                    <option value="Taj 4">Taj 4</option>
                                    <option value="Taj 5">Taj 5</option>
                                </optgroup>
                                <optgroup label="Wikrama">
                                    <option value="Wik 1">Wik 1</option>
                                    <option value="Wik 2">Wik 2</option>
                                    <option value="Wik 3">Wik 3</option>
                                    <option value="Wik 4">Wik 4</option>
                                </optgroup>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Rombel</td>
                        <td>:</td>
                        <td>
                            <select name="rombel" required>
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
                        <td>Kehadiran</td>
                        <td>:</td>
                        <td>
                            <select name="kehadiran" required>
                                <option value="">Isi Kehadiran</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Sakit">Sakit</option>
                                <option value="Izin">Izin</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button class="btn-home edit" name="submit" onclick="return confirm('Apakah anda yakin ingin mengubah data ini ?');"><i class="far fa-edit"></i>Update</button></td>
                    </tr>             
                </table>
            </form>

            <?php 
                }
            ?>
            </div>
        </div>
    </div>
    <!-- ----- Penutup Edit Data Siswa ----- -->

</body>
</html>