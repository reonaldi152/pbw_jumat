<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>EDIT DATA MAHASISWA</h1>
    <br><br>

    <a href="index.php">KEMBALI</a>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
    while ($d = mysqli_fetch_array($data)) :
    ?>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama_mhs']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>NRP</td>
                    <td><input type="text" name="nrp" value="<?php echo $d['nrp']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    <?php
    endwhile;
    ?>
</body>

</html>