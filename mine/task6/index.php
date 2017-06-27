<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 26.06.17
 * Time: 13:20
 */

session_start();
/**
 * Выход из сессии
 */
if (isset($_GET['logout'])) {
    session_destroy();
}

/**
 * Проверка состояния аутентификации
 */
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
/**
 * @param $login
 * @param $password
 * @param $userInfo
 * @return bool|string
 */

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

/**
 * @return array
 */
function getUserInfo() {
    $userInfo = [];
    $users = file('db.txt');
    foreach ($users as $userRow){
        $user = explode(' | ', $userRow);
        $userInfo[$user[0]] = $user;
    }

    return $userInfo;
}
