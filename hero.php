<?php

//a = b
//a < b
//a > b
//a =< b
//a => b
//a != b



$namaHeroML = "Gloo";
$level = 5;

$skill = $level <=4 ? $namaHeroML." blm ada ulti" : $namaHeroML." sudah ada ulti";
echo $skill;


// switch ($level) {
//     case 2:
//         echo $namaHeroML. " blm ada ulti, baru ada skill 1";
//         break;
//     case 3:
//         echo $namaHeroML. " blm ada ulti, baru ada skill 2";
//         break;
//     case 4:
//         echo $namaHeroML. " sudah ada ulti";
//         break;
//     default:
//         echo "bot";
//         break;
// }


// if($level < 4){
//     echo $namaHeroML. " blm ada ulti";
// } else if($level >= 4) {
//     echo $namaHeroML. " sudah ada ulti";
// } else {
//     echo "bot";
// }
