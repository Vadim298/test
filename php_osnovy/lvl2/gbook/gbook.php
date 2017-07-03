<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 30.06.17
 * Time: 16:54
 */

$db = mysqli_connect('localhost','root','killallhumans', 'gbook');

if(isset($_POST['name'], $_POST['email'], $_POST['mnsg']) &&
    !empty($_POST['name']) &&  !empty($_POST['email']) &&
    !empty($_POST['msg'])
){
    $name  = stripslashes (trim (htmlspecialchars ($_POST['name'], ENT_QUOTES)));
    $email = stripslashes (trim (htmlspecialchars ($_POST['email'],ENT_QUOTES)));
    $msg   = stripslashes (trim (htmlspecialchars ($_POST['msg'],  ENT_QUOTES)));

    $sql = "INSERT INTO msgs(
            name, email, msg)
    VALUES
        ('$name','$email','$msg')
    ";
    mysqli_query($db,$sql);

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}


if(isset($_GET['del']) && is_numeric($_GET['del'])){

    $del = $_GET['del'] * 1;

    $sql = "DELETE FROM msgs WHERE id=$del";
    mysqli_query($db,$sql);

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

?>

<html>
<head>
    <title>Гостевая книга</title>
</head>
<body>

<h1>Гостевая книга</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label>Ваше имя:<input type="text" name="name"/></label><br>
    <label>Ваш E-mail:<input type="text" name="email"/></label><br>
    <label>Сообщение:<textarea name="msg" cols="50" rows="5"></textarea></label><br>
    <input type="submit" value="Добавить!"/>
</form>



<?php
$sql = "SELECT * FROM msgs ORDER BY id DESC";
$res = mysqli_query($db, $sql);

mysqli_close($db);

$rows = mysqli_num_rows($res);
print "<p>: $rows</p>";

while($row = mysqli_fetch_assoc($res)){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $msg = nl2br($row['msg']);

    print <<<HTML
    <hr>
    <p><b><a href="mailto:$email">$name</a></b><br />$msg</p>
    <p align="right"><a href="{$_SERVER['PHP_SELF']}?del=$id"></a></p>
HTML;

}
?>

</body>
</html>

