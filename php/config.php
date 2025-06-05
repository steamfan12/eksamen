<?php

$DB_HOST = '127.0.0.1';
$DB_PORT = 3306;          
$DB_USER = 'root';
$DB_PASS = 'root';
$DB_NAME = 'camping_db';  

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

if ($mysqli->connect_error) {
    die("Tilkobling feilet: " . $mysqli->connect_error);
}

?>