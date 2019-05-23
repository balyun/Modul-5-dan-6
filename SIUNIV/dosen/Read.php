<?php

include '../connect.php';

$query = "SELECT * FROM dosen";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
<form action="Search.php" method="get">
    <input type="search" name="cari" placeholder="Masukkan pecarian...">
    <input type="submit" value="Cari">
</form>
    <table border='1'>
    <h2>Data Dosen</h2>
    <tr>
        <th>No.</th>
        <th>Nama Dosen</th>
        <th>Telepon</th>
        <th>Aksi</th>
        <th>Delete</th>
    </tr>

    <?php
        if($num > 0)
        {
            $no = 1;
            while($data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $data['nama_dosen'] . "</td>";
                echo "<td>" . $data['telp'] . "</td>";
                echo "<td><a href='Form-Update.php?id_dosen=" . $data['id_dosen'] . "'>Edit</a> | ";
                echo "<td><a href='Delete.php?id_dosen=" . $data['id_dosen'] . "'onclick='return confirm(\"Apakah Anda Yakin Ingin Menghapus Data ?\")' >Hapus</a></td>";              
                echo "</tr>";
                $no++;
            }
        }
        else
        {
            echo "<td colspan='3'> Tidak Ada Data</td>";
        }
    ?>

    </table>
</body>
</html>