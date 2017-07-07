<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 06.07.17
 * Time: 13:59
 */

/* ЗАДАНИЕ 2
- После вызова метода savePost проверьте, был ли запрос успешным?
- Если НЕТ, то присвойте переменной $errMsg строковое значение "Произошла ошибка при добавлении сообщения"
	перезапрос страницы выполнять НЕ НАДО
*/
$name = $gbook->clearData($_POST['name']);
$email = $gbook->clearData($_POST['email']);
$msg = $gbook->clearData($_POST['msg']);
if(!empty($name) and !empty($email) and !empty($msg)){
    $gbook-> savePost($name, $email, $msg);
    header("Location: gbook.php");
} else{
    $errMsg = 'Заполните все поля';
}
?>