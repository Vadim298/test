<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 22.06.17
 * Time: 11:48
 */
?>
<form action="task3.php" method="post">
    <label>Множитель 1 <input type="text" name="numeric1" value="<?= getPost('numeric1') ?>"></label><br>
    <label>Множитель 2 <input type="text" name="numeric2" value="<?= getPost('numeric2')?>"></label><br>
    <label>Множитель 3 <input type="text" name="numeric3" value="<?= getPost('numeric3') ?>"></label><br>
    <label>Множитель 4 <input type="text" name="numeric4" value="<?= getPost('numeric4') ?>"></label><br>
    <label>Rows <input type="text" name="rows" value="<?= getPost('rows') ?>"></label><br>

    <input type="submit" value="отрисовать таблицу"/><br>

</form>


