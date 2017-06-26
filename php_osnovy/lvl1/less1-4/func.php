<?php
$age = 25;
$GLOBALS['age']=25;

function sayHello($name){
    echo "<h1>Hello, $name!</h1>";
    $name = 'Vasya';
    //global $name;
    $GLOBALS['name']= 'Vasya';
}

/*проверить существует ли функция
if(function_exist(имя функции)){}*/
sayHello('John');
$name = 'Mike';
sayHello($name);
echo $name;//Vasya
?>