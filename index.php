<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>DAFTAR MAHASISWA</h1>
    <br>

    <a href="tambah.php">Tambah Data</a>
    <br><br>


    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama Mahasiswa</th>
            <th>NRP</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        while ($d = mysqli_fetch_array($data)) :
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama_mhs']; ?></td>
                <td><?php echo $d['nrp']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a> |
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        endwhile;
        ?>
    </table>

</body>

</html>