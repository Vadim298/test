<?php
    $a = 50;
    $b = 50.5;
    $c = 'hello';
    $d = true;
    $r = 10;
    /*
    const PI = 3.14;
    echo $r * $r * PI;
    */
    $str1 = '$a kuku';
    $str2 = "$a kuku";
    //echo "<div class=\$c\">1</div>";
    //echo "$str1<br>$str2";
    $final = $str1 . $str2;
    echo $final;
    echo '<hr>';
    //+ - * / %
    $res1 = $a + $b;
    $res2 = $a - $b;
    $res3 = $a * $b;
    $res4 = $a / $b;
    echo "$res1<br>$res2<br>$res3<br>$res4<br>";
