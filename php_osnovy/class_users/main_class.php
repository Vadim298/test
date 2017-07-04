<?php
/**
+---------------------+
| Created by PhpStorm.|
+---------------------+
| User: vadym         |
+---------------------+
| Date: 04.07.17      |
+---------------------+
| Time: 13:58         |
+---------------------+
 */
require 'user.php';
require 'superuser.php';
abstract class AUser
{
    abstract function getInfo();
}