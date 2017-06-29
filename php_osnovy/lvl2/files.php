<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 29.06.17
 * Time: 10:14
 */
    //print_r($_FILES);
    if ($_FILES['uf']['error']==0) {
        $t = $_FILES['uf']['tmp_name'];
        $n = $_FILES['uf']['name'];
        move_uploaded_file($t, $n);
    }
?>
<form action="files.php" method="post" enctype="multipart/form-data">
    <input type="file" name="uf">
    <input type="submit">
</form>
