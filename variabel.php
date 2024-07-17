<!DOCTYPE html>
<html>

<head>
    <title>Tampilan Variabel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Tampilan Variabel</h1>
        <?php
        include 'function.php';
        
        echo '<br>';
        $nama = 'Putra';
        $kelas = 'Informatika';
        $jmlh = 20;
        $harga = 10000;
        $tot = ($jmlh * $harga) / 1000;
        
        echo "<div class='alert alert-primary'>Halo, nama saya $nama, Jurusan $kelas</div>";
        echo "<div class='alert alert-primary'>Jumlah Siswa $jmlh, Dengan Uang Saku $harga</div>";
        echo "<div class='alert alert-primary'>Total Uang $tot Ribu </div>";
        
        if ($harga < 100) {
            echo '<div class="alert alert-danger">Uang Saku Lebih kecil</div>';
        } elseif ($harga <= 1000) {
            echo '<div class="alert alert-warning">tambah</div>';
        } else {
            echo '<div class="alert alert-info">gak tau</div>';
        }
        echo '<br>';
        switch (true) {
            case $harga <= 100:
                echo '<div class="alert alert-danger">Uang Saku Lebih kecil</div>';
                break;
        
            case $harga <= 20:
                echo '<div class="alert alert-danger">Uang Saku Lebih kecil</div>';
                break;
        
            case $harga <= 10:
                echo '<div class="alert alert-danger">Uang Saku Lebih kecil</div>';
                break;
        
            default:
                echo '<div class="alert alert-info">gak tau</div>';
                break;
        }
        echo '<br>';
        for ($umur = 1; $umur <= 10; $umur++) {
            echo '<div class="alert alert-primary">Saya Kelas ' . $kelas . " Saya sekarang $umur tahun</div>";
        }
        echo '<br>';
        $umur = 1;
        while ($umur <= 20) {
            echo '<div class="alert alert-primary">Saya Kelas ' . $kelas . " Saya sekarang $umur tahun</div>";
            $umur++;
        }
        
        echo '<br>';
        $umur = 1;
        do {
            echo '<div class="alert alert-primary">Saya Kelas ' . $kelas . " Saya sekarang $umur tahun</div>";
            $umur++;
        } while ($umur <= 20);
        echo '<br>';
        
        $nama = ['Abe', 'Cede', 'Eef', 'GH', 'IJE'];
        echo "<div class='alert alert-primary'>$nama[2]</div>";
        $i = 0;
        foreach ($nama as $value) {
            echo "<div class='alert alert-primary'>$value</div>";
            $i++;
            if ($i == 2) {
                break;
            }
        }
        
        echo '<br>';
        
        echo tambah(1, 2);
        
        echo '<br>';
        echo '<br>';
        $item = ['Abe', 'Cede', 'Eef', 'GH', 'IJE'];
        echo $item[0];
        
        echo '<pre>';
        print_r($nama);
        echo '</pre>';
        
        require_once 'connection.php';
        
        $query = 'SELECT * FROM mahasiswa';
        $result = $conn->query($query);
        
        echo "<table border='1' class='table table-striped'>
                    <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    </tr>";
        
        foreach ($result as $row) {
            echo "<tr>
                        <td>" .
                $row['NIM'] .
                "</td>
                        <td>" .
                $row['Nama'] .
                "</td>
                        </tr>";
        }
        
        echo '</table>';
        
        echo '<br>';
        foreach ($result as $row) {
            if ($row['NIM'] == '134') {
                echo "<div class='alert alert-primary'>NIM: " . $row['NIM'] . ', Nama: ' . $row['Nama'] . '</div>';
            }
        }
        echo '<br>';
        
        echo '<br>';
        foreach ($result as $key => $value) {
            if ($key == 0) {
                echo "<div class='alert alert-primary'>NIM: " . $value['NIM'] . ', Nama: ' . $value['Nama'] . '</div>';
            }
        }
        $conn->close();
        echo '<br>';
        echo '<br>';
        echo "<div class='alert alert-primary'>Rp. " . perikanan(300, 100) . ' rupiah</div>';
        ?>
    </div>
</body>

</html>