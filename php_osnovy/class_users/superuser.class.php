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

//GetUserInfo отдает ассоциативный массив, в котором
// имена ячеек это имена свойсвт объекта, а значения
//ячеек это значения свойств объекта
class SuperUser extends User implements ISuperUser
{
    public $role;
    static $countSuper = 0;
    public function __construct($n, $l, $p, $r) {
        parent::    __construct($n, $l, $p);
        $this->role     = $r;
        self::$countSuper++;
        parent::$count--;
    }
    public function getInfo() {
        parent::    getInfo();
        echo "Роль = "   . $this->role,     '<br>';
    }
    function getUserInfo() {
        // TODO: Implement getUserInfo() method.
        $arr = array();
        foreach($this as $k=>$v){
            $arr[$k] = $v;
        }
        return $arr;
    }

}

