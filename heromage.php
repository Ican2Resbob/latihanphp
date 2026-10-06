<?php

$heroMage = [
    "name" => ["zhask", "kadita"],
    "tipe" => ["offlaner", "burst"],
    "damage" => [86.2, 95.5],
];

//iterasi array
foreach ($heroMage as $key => $value) {
    foreach ($value as $val) {  
        echo $val;
        echo "<br>";
    }
    echo "<br>";
}








//     "Zhask",
//     "kadita",
//     "valir",
//     "vale"
// ];

// echo $heroMage[3];


// // var_dump($heroMage);