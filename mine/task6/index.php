<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 26.06.17
 * Time: 13:20
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
------------------------------------------------
Сделать черз сессии:
+2 поля - имя, адрес.
на странице так же показыва.тся адрес и имя
 */

session_start();

if (isset($_GET['logout'])) {
    session_destroy();
}

if (!empty($_SESSION['login'])) {
    header("location: profile.php");
} elseif (isset($_POST['login'], $_POST['password'])) {
    $userInfo = getUserInfo();
    $result = handlerAuth($_POST['login'], $_POST['password'], $userInfo);

    if ($result === true) {
        header("location: profile.php");
    } else {
        require_once 'form.php';
        echo $result;
    }
} else {
    require_once 'form.php';
}


function handlerAuth($login, $password, $userInfo) {

    foreach ($userInfo as $key => $value) {
        if ($login == $key) {
            if($password == $value[1]){
                $_SESSION['login']      = $value[0];
                $_SESSION['username']   = $value[2];
                $_SESSION['location']   = $value[3];
                return true;
            } else {
                return 'Fail password!';
            }
        }
    }

    return 'Sign in, please!';
}

function getUserInfo() {
    $userInfo = [];
    $users = file('db.txt');
    foreach ($users as $userRow){
        $user = explode('|', $userRow);
        $userInfo[$user[0]] = $user;
    }

    return $userInfo;
}
