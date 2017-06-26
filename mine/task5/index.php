<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 23.06.17
 * Time: 11:49
 */
/*На странице есть два блока (div),
в первом блоке (блок 1): форма с двумя полями (Логин и пароль)
и кнопкой Вход,
во втором блоке (блок 2): строка “Логин”
и кнопка “Выход“.В начале видна только форма,
туда вводится логин и пароль,нажимаем Вход и если логин пароль
верный, то скрываем (не показываем) блок 1,
а показываем блок 2 с именем пользователя и кнопкой выйти,
если логин/пароль не верные - выводим какой-то текст
ошибки об этом.Если мы залогинились и нажали Выход,
то исчезает второй блок и опять появляется блок 1.
 */

$userLogin = 'vadim';
$userPass = 'vadim1';

if (isset($_GET['logout'])) {
    unset($_COOKIE['login']);
    setcookie('login', null, -1);
}

if (!empty($_COOKIE['login']) && $_COOKIE['login'] == $userLogin) {
    header("location: profile.php");
} elseif (isset($_POST['login'], $_POST['password'])) {
    $result = handlerAuth($_POST['login'], $_POST['password']);

    if ($result === true) {
        setcookie('login', $_POST['login']);
        header("location: profile.php");
    } else {
        require_once 'form.php';
        echo $result;
    }
} else {
    require_once 'form.php';
}

function handlerAuth($login, $password) {
    global $userLogin;
    global $userPass;

    if($login == $userLogin and $password == $userPass){
        return true;
    } elseif($login != $userLogin and $password != $userPass){
        return 'Неверные логин и пароль';
    } elseif($login != $userLogin){
        return 'Неверный логин';
    } elseif($password != $userPass){
        return 'Неверный пароль';
    }
}
