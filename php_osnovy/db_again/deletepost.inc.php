<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 06.07.17
 * Time: 13:59
 */
$id = abs((int) $_GET['del']);
if($id){
    $gbook->deletePost($id);
    header('Location: gbook.php');
}else{
    $errMsg = 'ШО ТЫ ТАМ ДЕЛАЕШЬ?';
}
?>