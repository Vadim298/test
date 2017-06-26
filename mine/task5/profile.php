<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 23.06.17
 * Time: 14:45
 */

if (empty($_COOKIE['login'])) {
    header('Location: index.php');
} else {
    echo  'Логин: ', $_COOKIE['login'], ' <a href="index.php?logout">Выход</a>';
}