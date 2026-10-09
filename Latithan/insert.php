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

//Membuat sql string untuk insert data ke database
$sql = "INSERT INTO `latihanphp`.`tabel_hero_mage` (`Nama_Hero`, `Tipe_Hero`, `Damage`) 
        VALUES
        ('Kimmy', 'Scalling', 60),
        ('Aurora', 'Burst', 95),
        ('Lylia', 'Burst', 100),
        ('Harley', 'Burst', 90),
        ('Eudora', 'Burst', 85),
        ('Gord', 'Burst', 80),
        ('Lunox', 'Burst', 95),
        ('Vale', 'Scalling', 70),
        ('Pharsa', 'Burst', 90),
        ('Chang\'e', 'Scalling', 75)";

if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
