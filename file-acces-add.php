<?php 

$file = fopen("makanan.txt", "a");
fwrite($file, "mie ayam \n");
fclose($file);
header('Location: file-acces.php');
?>