<?php
/**
+---------------------+
| Created by PhpStorm.|
+---------------------+
| User: vadym         |
+---------------------+
| Date: 03.07.17      |
+---------------------+
| Time: 15:03         |
+---------------------+
 */
require_once 'superuser.php';
class User
{
    /**
     * @var
     */
    public $name;
    public $login;
    public $password;

    /**
     * User constructor.
     * @param $n
     * @param $l
     * @param $p
     */
    function __construct($n='', $l='', $p='') {
        try {
            if($n == '' or $l == '' or $p == '')
                throw new Exception('Ввведены не все данные');
            $this->name = $n;
            $this->login = $l;
            $this->password = $p;
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
    function __clone(){
        $this->login = "Guest";
        $this->password  = "qwerty";
    }

    /**
     * function
     */
    public function userInfo() {
        echo "<p>Имя = " . $this->name,     '<br>';
        echo "Логин  = " . $this->login,    '<br>';
        echo "Пароль = " . $this->password, '<br>';
    }
}

/**
 * Users
 */
$Vadym = new User("Vadym", "Vadym1", "Vadym1");
$Vadym->userInfo();

$Vasya = new User("Vasya", "Vasya1", "Vasya1");
$Vasya->userInfo();

$Petya = new User("Petya", "Petya1", "Petya1");
$Petya->userInfo();

$Ivan = clone $Petya;
$Ivan ->userInfo();