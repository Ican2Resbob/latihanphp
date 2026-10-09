<?php

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "latihanphp";

$connection = new mysqli($hostname, $username, $password, $databaseName) or die("GAGAL KONEKSI GAESS");

$sql = "SELECT `id`, `Nama_Hero`, `Tipe_Hero`, `Damage` FROM `latihanphp`.`tabel_hero_mage` WHERE  `id`= 1";

$query = $connection->query($sql);

if ($query->num_rows > 0) {
    //iterasi data
    while ($row = $query->fetch_assoc()) {
        echo $row["Nama_Hero"];
    }
    var_dump($query);
}else {
    
}