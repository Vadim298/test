<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 26.06.17
 * Time: 13:22
 */
session_start();
if (empty($_SESSION['login']) or empty($_SESSION['name'])or empty($_SESSION['address'])) {
    header('Location: index.php');
} else {
    echo  'Логин: ', $_SESSION['login'], '<br>',
    'Имя: ',$_SESSION['name'], '<br>',
    'Адрес: ',$_SESSION['address'], '<br>',
    '<a href="index.php?logout">Выход</a>';
}
