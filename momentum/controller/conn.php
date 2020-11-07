<?php
$servername = "localhost";
$username = "u592694108_momen";
$password = "HIMAFIua123";
$dbname = "u592694108_momen";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection_failed  " . $conn->connect_error);
}
?>