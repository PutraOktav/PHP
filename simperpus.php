<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
</head>

<body>
    <a href="simperpus-form.php">Tambah</a>
    <?php
    require_once 'koneksi.php';
    $query = 'SELECT * FROM anggota';
    $result = $conn->query($query);
    $no = 1;
    ?>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nomer Telfon</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Menu</th>
        </tr>
        <?php foreach ($result as $key => $row){ ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row['Nama'] ?></td>
            <td><?= $row['NomorTelpon'] ?></td>
            <td><?= $row['Email'] ?></td>
            <td><?= $row['Alamat'] ?></td>
            <td>
                <a href="simperpus-form.php?id_anggota<?= $row['id_anggota'] ?>">[ Edit ]</a>
            </td>
        </tr>
        <?php 
                $no++;
        } ?>
    </table>
    <?php
    $conn->close();
    ?>

</body>

</html>
