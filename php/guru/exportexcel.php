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
    <title>Document</title>
    <!-- css -->
    <style type="text/css">
        table th, table td {
            text-align: center;
        }
        table th {
            background-color: #f3f4f5;
        }
	</style>
</head>
<body>

    <?php
        // koneksi database
        include "../config/koneksi.php";

        // excel
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Data Absensi.xls");
    ?>

    <table>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Rombel</th>
            <th>Rayon</th>
            <th>Kehadiran</th>
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
            <td><?php echo $no++ . "."; ?></td>
            <td><?php echo $data['tanggal']; ?></td>
            <td><?php echo $data['nis']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['rombel']; ?></td>
            <td><?php echo $data['rayon']; ?></td>
            <td><?php echo $data['kehadiran']; ?></td>
        </tr>

            <?php 
                    } 
                } else {
            ?>
                <tr><td colspan="7">Data Tidak Ada</td></tr>
            <?php
                }
            ?>

            </table>

</body>
</html>