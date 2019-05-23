<?php

include '../connect.php';

$id_dosen = $_POST['id_dosen'];
$nama_dosen = $_POST['nama_dosen'];
$telp = $_POST['telp'];

$query = "UPDATE dosen SET nama_dosen = '$nama_dosen', telp = '$telp' WHERE id_dosen = $id_dosen";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);


if($num > 0)
{
    echo "Berhasil Update Data <br>";
}
else
{
    echo "Gagal Update Data <br>";
}
echo "<a href='Read.php'> Lihat Data</a>";

?>
