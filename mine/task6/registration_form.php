<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 27.06.17
 * Time: 8:47
 */
/**
 * Форма регистрации
 */
?>
<html>
<form action="registration_form.php" method="post">
    <label>Придумайте логин<input type="text" name="login"> </label><br>
    <label>Придумайте пароль <input type="password" name="password"> </label><br>
    <label>Ваше имя <input type="text" name="username"> </label><br>
    <label>Ваше место пребывания <input type="text" name="location"> </label><br>
    <label><input type="submit" value="отправить данные"> </label><br>
</form>
</html>
<?php
/**
 * Отправка данных с формы регистрации в документ
 * с логинами, паролями, именами и локациями
 */
if (isset($_POST['login'], $_POST['password'], $_POST['username'], $_POST['location'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $username = $_POST['username'];
        $location = $_POST['location'];
        file_put_contents('db.txt', "$login | $password | $username | $location\n", FILE_APPEND);
        header("location: index.php");
    }
?>

