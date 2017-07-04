<?php
/**
+---------------------+
| Created by PhpStorm.|
+---------------------+
| User: vadym         |
+---------------------+
| Date: 03.07.17      |
+---------------------+
| Time: 17:22         |
+---------------------+
 */

/**
 * Class SuperUser
 */
class SuperUser extends User
{
    public $role;
    public function __construct($n, $l, $p, $r) {
        parent::    __construct($n, $l, $p);
        $this->role     = $r;
    }
    public function userInfo() {
        parent::    userInfo();
        echo "Роль = "   . $this->role,     '<br>';
    }

}
$Admin = new SuperUser("Krasavcheg", "root", "password", "admin");
$Admin->userInfo();
