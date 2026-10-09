<?php

//contoh 1

// function luasSegitiga($luas, $tinggi){
//     //code
//     $luas = 0.5 * $luas * $tinggi;
//     return $luas;
// }

// echo luasSegitiga(5,3);

//contoh 2
function sum(...$input){
    $result = 0;
    foreach($input as $value){
        $result = $result + $value;
    }
    return $result;
}

echo sum(1,2,3,4,5,6,7,8,9,10);