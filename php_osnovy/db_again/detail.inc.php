<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 06.07.17
 * Time: 13:58
 */
$users = $gbook->getAll();
echo "<p>Всего записей: ".count($users);
foreach($users as $user){
    $id = $user['id'];
    $n = $user['name'];
    $e = $user['email'];
    $m = nl2br($user['msg']);
    $ip = $user['ip'];
    $dt = date('d-m-Y H:i:s',$user['datetime']*1);
    echo <<<LABEL
    <hr><p>
        <a href = "mailto:$e">$n</a> from[$ip] @ $dt
        <br>$m</p>
    <p align="right"></p>
        <a href="gbook.php?del=$id">Удалить</a></p>
LABEL;
}
?>