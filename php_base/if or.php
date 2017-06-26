<?php
$a = mt_rand(-1, 10);
$b = mt_rand(-1, 10);
// И - &&
// ИЛИ - ||
// НЕ - !
/*
 if($a > 0 || $b > 0) {
    if ($a > $b) {
        echo $a;
    } else {
        echo $b;
    }
} else{
    echo 'pshol nahuy';
}
*/
if ($a <= 0 && $b <= 0) {
    echo 'poshol nahuy';
}

if ($a < $b) {
    echo $a;
} else {
    echo $b;
}