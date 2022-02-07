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
    <title>Daftar Data Kehadiran Siswa | ABSEN MONITORING</title>
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

    <!-- ----- Pembuka Header Data Siswa ----- -->
    <header>
        <div class="container-header">
            <div class="container-data">
                <nav id="nav">
                    <ul>
                        <li><a href="index.php"><i class="fas fa-clipboard-list"></i>Daftar Siswa</a></li>
                        <li><a href="tambah.php"><i class="fas fa-user-plus"></i>Tambah Data</a></li>
                        <li><a href="filter.php"><i class="fas fa-sort-alpha-up"></i>Filter</a></li>
                        <li><a href="../config/logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?');"><i class="fas fa-sign-out-alt"></i>Keluar</a></li>
                    </ul>
                </nav>
                <div class="header-menu">
                    <i class="fas fa-bars" id="menu"></i>
                </div>
                <div class="header-right">
                    <img src="../../img/download-removebg-preview (1).png" alt="">
                </div>
            </div>
        </div>
    </header>
    <!-- ----- Penutup Header Data Siswa ----- -->

    <!-- ----- Pembuka Table Data Siswa ----- -->
    <div class="container">
        <center class="tb-data">
            <div class="header">
                <span class="text-head heading">DATA KEHADIRAN SISWA</span>
            </div>
            <div class="export">
                <a href="exportexcel.php" target="_blank">
                    <button class="btn-home excel"><i class="far fa-file-excel"></i></button>
                </a>
                <a href="pdf.php" target="_blank">
                    <button class="btn-home pdf"><i class="far fa-file-pdf"></i></button>
                </a>
            </div>

            <!-- koneksi database -->
            <?php  
                include "../config/koneksi.php";
            ?>

            <div class="list-data">
                <table cellspacing="0" cellpadding="20" class="bx-data">
                    <tr>
                        <th>No</th>
                        <th>Bukti</th>
                        <th>Tanggal</th>
                        <th>NIS</th>
                        <th>Nama Lengkap</th>
                        <th>Rombel</th>
                        <th>Rayon</th>
                        <th>Kehadiran</th>
                        <th>Aksi</th>
                    </tr>

                <!-- query filter -->
                <?php  
                    $no = 1;
                    if (isset($_GET['filter'])) {
                        $tanggal = $_GET['tanggal'];
                        $rombel = $_GET['rombel'];
                        $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE tanggal='$tanggal' AND rombel='$rombel'");
                    } else {
                        $query = mysqli_query($koneksi, "SELECT * FROM siswa");
                    }

                    $row = mysqli_num_rows($query);

                    if ($row > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                ?>

                <tr>
                    <td style="font-weight: 500;"><?php echo $no++ . "."; ?></td>
                    <td>
                        <img src="gambar/<?= $data["gambar"]; ?>" alt="<?= $data["nama"]; ?>" style="width: 120px; border-radius: 3px;  ">
                    </td>
                    <td><?php echo $data['tanggal']; ?></td>
                    <td><?php echo $data['nis']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['rombel']; ?></td>
                    <td><?php echo $data['rayon']; ?></td>
                    <td><?php echo $data['kehadiran']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['nis']; ?>">
                            <button class="btn-home edit">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                        </a>
                        <a href="hapus.php?id=<?php echo $data['nis']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');">
                            <button class="btn-home hapus">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </a>
                    </td>
                </tr>

                <?php 
                        } 
                    } else {
                ?>
                    <tr><td colspan="9">Data Tidak Ada</td></tr>
                <?php
                    }
                ?>

                </table>
            </div>
        </center>
    </div>
    <!-- ----- Penutup Table Data Siswa ----- -->

    <script src="../../js/script.js"></script>

</body>
</html>