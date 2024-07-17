<?php 
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

include "koneksi.php";
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];
$email = $_POST['Email'];
$telp = $_POST['NomorTelpon'];

$query = "INSERT INTO anggota (Nama, Alamat, Email, NomorTelpon) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ssss", $nama, $alamat, $email, $telp);
mysqli_stmt_execute($stmt);

header('Location: simperpus.php');
?>
