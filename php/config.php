<?php
$host = '127.0.0.1';
$user = 'root';
$pass = 'root'; // eller ditt faktiske passord
$db   = 'camping_db';
$port = 3306;

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Tilkoblingsfeil: " . $conn->connect_error);
}
?>
