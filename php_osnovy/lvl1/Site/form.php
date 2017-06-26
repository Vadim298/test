<?php

if($_SERVER['REQUEST_METHOD']=="POST") {
    $name = trim(strip_tags($_POST['name']));
    $age = abs((int)$_POST['age']);
}
?>
<form action="form.php?id=1" method="post">
    <input type="text" name="name" value="<?=$name?>"><br>
    <input type="text" name="age" value="<?=$age?>"><br>
    <input type="submit">
</form>
<?php
if($name and $age){
    echo '<p> Ваше имя: '.$name;
    echo '<p> Ваш возраст: '.$age;
}
?>
