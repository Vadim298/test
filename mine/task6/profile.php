<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 26.06.17
 * Time: 13:22
 */
session_start();
if (empty($_SESSION['login'])) {
    header('Location: index.php');
} else {
    echo  'Логин: ', $_SESSION['login'], '<br>',
    'Имя: ',$_SESSION['username'], '<br>',
    'Адрес: ',$_SESSION['location'], '<br>',
    '<a href="index.php?logout">Выход</a>';
}
