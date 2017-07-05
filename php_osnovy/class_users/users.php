<?php
/**
+---------------------+
| Created by PhpStorm.|
+---------------------+
| User: vadym         |
+---------------------+
| Date: 05.07.17      |
+---------------------+
| Time: 12:56         |
+---------------------+
 */

function __autoload($name){
    require  strtolower($name).".class.php";
}

$Vadym = new User("Vadym", "Vadym1", "Vadym1");
$Vadym->getInfo();
checkObject($Vadym);

$Vasya = new User("Vasya", "Vasya1", "Vasya1");
$Vasya->getInfo();
checkObject($Vasya);

$Petya = new User("Petya", "Petya1", "Petya1");
$Petya->getInfo();
checkObject($Petya);

$Ivan = clone $Petya;
$Ivan ->getInfo();
checkObject($Ivan);

function checkObject($obj){
    if($obj instanceof User) {
        if ($obj instanceof SuperUser) {
            echo "<h3>Одмен</h3>";
        } else {
            echo "<h4>Юзырь </h4>";
        }
    } else {
        echo "<h1 >ЛЕВЫЙ ДЯДЯ</h1>";
    }
}
$Admin = new SuperUser("Krasavcheg", "root", "password", "admin");
$Admin->getInfo();
checkObject($Admin);

echo '<hr>', "Всего простых пользователей: " . User::$count.'<br>';
echo "Всего админов: ".SuperUser::$countSuper.'<br>';
