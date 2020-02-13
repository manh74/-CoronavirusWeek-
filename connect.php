<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "corona";

$db = new mysqli($servername, $username, $password, $database);

$sql = "SELECT * from product";
$result = $db->query($sql)->fetch_all(MYSQLI_ASSOC);
?>