<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 30.06.17
 * Time: 16:54
 */
define("DB_HOST", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "killallhumans");

$db = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, 'gbook') or die(mysqli_error($db));

$sql = 'CREATE DATABASE gbook';
mysqli_query($db, "$sql") or die(mysqli_error($db));


$sql = "
CREATE TABLE msgs (
    id int(11) NOT NULL auto_increment,
    name varchar(50) NOT NULL default '',
    email varchar(50) NOT NULL default '',
    msg TEXT,
    PRIMARY KEY (id)
)";
mysqli_query($db, "$sql") or die(mysqli_error($db));

mysqli_close($db);

print '<p>Структура базы данных успешно создана!</p>';

