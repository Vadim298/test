<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 06.07.17
 * Time: 13:56
 *
**/

require 'GbookDB.php';
$gbook = new GbookDB();
$errMsg = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require 'savepost.inc.php';
}
if(isset($_GET['del'])){
    require 'deletepost.inc.php';
}
?>
<html>
<head>
    <title>Гостевая книга</title>
</head>
<body>
<h1>Гостевая книга</h1>
<?php
if($errMsg){
    echo $errMsg;
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <label>Ваше имя:<input type="text" name="name"/></label>><br>
    <label>Ваш e-mail:<input type="text" name="email"/></label><br>
    <label>Сообщение:<textarea name="msg" cols="50" rows="5"></textarea></label><br>
    <input type="submit" value="Добавить!"/>

</form>

<?php
include "detail.inc.php";
?>

</body>
</html>