<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 03.07.17
 * Time: 17:22
 */
class SuperUser extends User
{
    public $role;
}
$Admin = new SuperUser("Krasavcheg", "root", "password");
$Admin->role = "admin";
$Admin->userInfo();
echo "Роль = " . $Admin->role;
