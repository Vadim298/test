<?php
    $login = 'vasya298';
    $password = 'pupkinoid';
    $email= 'vasya298@mail.hueil';
    $login = ucfirst( $login);
    $password = ucfirst( $password);
    echo $login, '<br>', $password, '<br>';
/* mktime(0,0,0,1,1,2011);
mktime(0,0,0,13,1,2010); ЭТО ВСЕ ВАРИАНТЫ ВЫВЕДЕНИЯ 01.01.2011. НА ЭКРАН
mktime(0,0,0,12,32,2010); */
$dt= mktime(0,0,0,2,15,1978);
//echo 'Сегодня ' . date("d-m-Y H:i:s");
$arr = getDate($dt);
echo '<pre>';
print_r($arr);
echo '</pre>', '<br>';
//echo time() - возвращает временную метку.
$now = time();
$birthday = mktime(0,0,0,7,10,2017);
$res_d = ($birthday - $now)/(60*60*24);
echo $res_d;