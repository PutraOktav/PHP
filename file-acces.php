<?php 

$file = fopen("makanan.txt", "r");
while (!feof($file)) {
    $line = fgets($file);
    echo $line . "<br>";
}

fclose($file);

?>