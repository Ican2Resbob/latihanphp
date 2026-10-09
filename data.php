<?php
// if(isset($_GET["name"])) {
//     $namaHero = $_GET["name"];
//     echo "Nama hero: " . $namaHero;
// }

if(isset($_POST["name"])) {
    $namaHero = $_POST["name"];
    echo "Nama hero: " . $namaHero;
}
?>

<form action="data.php" method="POST">
    Nama Hero: <input type="text" name="name" />
    <input type="submit" />
</form>