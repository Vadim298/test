<?php
/**
 +---------------------+
 | Created by PhpStorm.|
 +---------------------+
 | User: vadym         |
 +---------------------+
 | Date: 03.07.17      |
 +---------------------+
 | Time: 17:18         |
 +---------------------+
 */
class A
{
    public $_a = 'protected';
    private  $_b = 'private';
    public function foo(){
        echo $this->_a;
        echo $this->_b;
    }
}
class B extends A{
    public function bar(){
        echo $this->_a;
        echo $this->_b;
    }
}
$o1 = new A();
$o1->_b;
