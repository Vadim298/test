<?php
    if(count($_POST) > 0) {

        $name = $_POST['name'];
        $phone = $_POST['phone'];

        file_put_contents('Apps.txt', "$name $phone\n, FILE_APPEND");

        echo 'Wait for callback';
    }
?>
<form method="post">
    Name <br>
    <input type="text" name="name"><br>
    Phone<br>
    <input type="text" name="phone"<br>
    <input type="submit" value="send">
</form>