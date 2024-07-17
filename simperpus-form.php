<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota Tambah</title>
</head>

<body>
    <?php
    if (@$_GET['id_anggota']) {
        include 'koneksi.php';
    
        $id_anggota = $_GET['id_anggota'];
        $query = "SELECT * FROM anggota WHERE id_anggota = '$id_anggota'";
        $anggota = mysqli_query($conn, $query);
        $a = mysqli_fetch_array($anggota);
    }
    ?>
    <form action="fungsi.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="Nama" value="<?= @$a['Nama'] ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:
                    <textarea name="Alamat"><?= @$a['Alamat'] ?></textarea>
                </td>
            </tr>
            <tr>
                <td>Telp</td>
                <td>: <input type="text" name="NomorTelpon" value="<?= @$a['NomorTelpon'] ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <input type="text" name="Email" value="<?= @$a['Email'] ?>"></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Submit">
        <a href="simperpus.php"></a>
    </form>
</body>

</html>
