
<?php
$shop = false;
$money = true;
if($shop and $money === true)
{
    echo 'Зaхожу в магаз<br>';
}
else
    {
    echo 'Иду в киоск<br>';
    }
    echo '<hr>Иду на хату<br>';

    function vremya_rabotat($age)
    {
        if ($age >= 18 && $age <= 59)
        {
            return 'IDI RABOTAY';
        }
        elseif ($age < 18)
        {
            return 'RANO RABOTAT';
        }
        else
        {
            return 'Pizduy na pensiu';
        }
    }
    echo vremya_rabotat(mt_rand(1,90));
    echo '<br>';
$a = 1;
switch($a)
{
    case 0: echo 'zero';break;
    case 1: echo 'one';break;
    case 2: echo 'two';break;
    case 3: echo 'three';break;
    case 4: echo 'four';break;
    default: echo 'Dofiga';
}
?>
