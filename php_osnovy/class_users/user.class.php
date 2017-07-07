<?php

/**
 * +---------------------+
 * | Created by PhpStorm.|
 * +---------------------+
 * | User: vadym         |
 * +---------------------+
 * | Date: 03.07.17      |
 * +---------------------+
 * | Time: 15:03         |
 * +---------------------+
 */
class User extends AUser
{
    const INFO_TITLE = 'Данные пользователя: ';
    /**
     * @var
     */
    public $name;
    public $login;
    public $password;
    static $count;

    /**
     * User constructor.
     * @param $n
     * @param $l
     * @param $p
     */
    public function __construct($n = '', $l = '', $p = '') {
        try {
            if ($n == '' or $l == '' or $p == '')
                throw new Exception('Ввведены не все данные');
            $this->name     = $n;
            $this->login    = $l;
            $this->password = $p;
            self::$count++;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        /**
         * function of cloning data
         */
    }

    public function __clone() {
        $this->login    = "Guest";
        $this->password = "qwerty";
        self::$count++;
    }

    /**
     * taking user info
     */
    function getTitle() {
        echo '<h3>' . (self::INFO_TITLE) . '</h3>';
    }

    function userInfo() {
        echo "Имя    = " . $this->name, '<br>';
        echo "Логин  = " . $this->login, '<br>';
        echo "Пароль = " . $this->password, '<br>';
    }

    function getInfo() {
        echo $this->getTitle() . $this->userInfo();
    }
}

