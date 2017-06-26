<?php
    $a = 5;

    function print_some(){
        $a = 10;
        echo $a . '<br>';
    }

    echo $a . '<br>';
    print_some();
    echo $a , '<br>';
