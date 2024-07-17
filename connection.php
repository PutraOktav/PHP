<?php
$conn = new mysqli('localhost', 'root', '', 'vsga');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
