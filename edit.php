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

    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id">
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>NRP</td>
                <td><input type="text" name="nrp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>

</body>

</html>