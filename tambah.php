<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <br>

    <a href="index.php">KEMBALI</a>
    <br><br>

    <form action="tambah_aksi.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td>NRP</td>
                <td><input type="text" name="nrp"></td>
            </tr>

            <tr>
                <td>Alamat Palsu</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="TAMBAH"></td>
            </tr>
        </table>
    </form>
</body>

</html>