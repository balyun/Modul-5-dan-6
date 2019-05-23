<?php 

    include '../connect.php';

    $query = "SELECT id_dosen, nama_dosen FROM dosen";
    $result = mysqli_query($connect, $query);

?>

<html>
        <head>
            <title></title>
        </head>
        <body>
            <form action="create.php" method="POST">
            <p>
                <label for="kode">Kode     :</label>
                <input id="kode" type="text" name="kode">
            </p>
            <p>
                <label for="matkul">Matakuliah  :</label>
                <input id="matkul" type="text" name="nama_matkul">
            </p>
            <p>
                <label for="sks">SKS  :</label>
                <input id="sks" type="text" name="sks">
            </p>
            <p>
                <label for="semester">Semester  :</label>
                <input id="semester" type="text" name="semester">
            </p>
            <p>
                <label for="matkul">Dosen Pengajar  :</label>
                <select name="id_dosen" id="nama_dosen">
                    <option value="NULL">--Pilih salah satu--</option>
                    <?php
                        while ($data = mysqli_fetch_assoc($result)) {
                            ?>
                        <option value="<?php echo $data['id_dosen']; ?>">
                            <?php echo $data['nama_dosen']; ?>
                        </option>
                        <?php
                        }
                    ?>
                </select>
            </p>
            <p>
                <input type="submit" value="Simpan" name="btnSimpan">
            </p>
        </form>
        </body>
    </html>