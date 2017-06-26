<?php

class Lida
{
    //constant (константа)
    const MY_CITY  = 'Dnipro';

    //property (свойство)
    public $name = 'Lida';
    protected $_street = 'Lida';
    private $_surname = 'Deykalo';
    private $_gender = 'Female';

    public function __construct($street)
    {
        $this->_street = $street;
    }

    //method (метод)
    public function getFullName()
    {
        return $this->name . ' ' . $this->_getSurname() . ' '
            . self::getHello() . ' ' . self::MY_CITY;
    }

    protected function _getSurname()
    {
        return $this->_surname;
    }

    private function _getGender()
    {
        return $this->_gender;
    }

    public static function getHello()
    {
        return 'Hello';
    }
}

class Larisa extends Lida
{
    public $name = 'Larisa';

    public function getFullName()
    {
        return parent::getFullName();
    }
}

class Vadim extends Larisa
{
    public $name = 'Vadim';
}

$lida = new Larisa('Nikopolskaya');
echo $lida->getFullName();
echo Lida::MY_CITY;
//echo $lida->_getSurname(); //ERROR
//echo $lida->_getGender(); //ERROR
