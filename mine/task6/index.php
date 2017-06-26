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
file_get_contents('db.txt');

if (isset($_GET['logout'])) {
    session_destroy();
}

if    (!empty($_SESSION['login']) && $_SESSION['login'] == $userLogin
    /* && !empty($_SESSION['name']) && $_SESSION['name'] == $userName
    && !empty($_SESSION['address']) && $_SESSION['address'] == $userAddress */){
    header("location: profile.php");
} elseif (isset($_POST['login'], $_POST['password'] /*, $_POST['name'], $_POST['address'] */)) {
    $result = handlerAuth($_POST['login'], $_POST['password'], /* $_POST['name'], $_POST['address'] */);

    if ($result === true) {
        header("location: profile.php");
    } else {
        require_once 'form.php';
        echo $result;
    }
} else {
    require_once 'form.php';
}


function handlerAuth($login, $password, /* $name, $address */) {
    global $userLogin;
    global $userPass;
    /*global $userName;
    global $userAddress; */

    if($login == $userLogin and $password == $userPass /* and $name == $userName and $address == $userAddress */){
        $_SESSION['login']   = $_POST['login'];
        /*$_SESSION['name']    = $_POST['name'];
        $_SESSION['address'] = $_POST['address'];*/
        return true;
    } elseif($login != $userLogin or $password != $userPass or /* $name != $userName or $address != $userAddress*/ ){
        return 'Я не знаю, что неправильно, так шо, давай заново все вводи!';
    }
}
