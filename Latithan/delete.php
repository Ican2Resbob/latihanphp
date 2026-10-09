<?php

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "latihanphp";

$connection = new mysqli($hostname, $username, $password, $databaseName);

//melakukan check connection ke database
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

//Membuat sql string untuk delete data ke database
$sql = "DELETE FROM `latihanphp`.`tabel_hero_mage` WHERE id = 13";

//Mengeksekusi query dan mengecek apakah berhasil
if ($connection->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}