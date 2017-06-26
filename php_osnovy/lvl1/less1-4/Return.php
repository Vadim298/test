<?php
$a = 10;
$b = &$a;//ссылка на переменную
function foo ($val){
    //echo func_num_args();
    /*$args = func_get_args();
    print_r($args);*/
    //echo func_get_arg(2);
}
foo ('John');
$name = 'John';
foo ($name);
?>