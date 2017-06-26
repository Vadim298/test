<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 22.06.17
 * Time: 12:31
 */
require_once 'form.php';

if (isset(
    $_POST['numeric1'],
    $_POST['numeric2'],
    $_POST['numeric3'],
    $_POST['numeric4'],
    $_POST['oper'],
    $_POST['operand'],
    $_POST['rows']
))
{
    $arrayNumeric = handler(
        [
            $_POST['numeric1'],
            $_POST['numeric2'],
            $_POST['numeric3'],
            $_POST['numeric4']
        ],
        $_POST['oper'],
        $_POST['operand'],
        $_POST['rows']
    );

    echo getTable($arrayNumeric);
}

/**
 * @param array $resultArray
 * @return string
 */
function getTable($resultArray)
{
    $table = '<table border = "1" align = "left">';

    foreach ($resultArray as $row) {

        $table .= '<tr>';

        foreach ($row as $td) {
            $table .= '<td>' . $td . '</td>';
        }

        $table .= '</tr>';
    }

    $table .= "</table>";

    return $table;
}

/**
 * @param array  $arrayNumeric
 * @param string $oper
 * @param int    $operand
 * @param int    $rows
 * @return array
 */
function handler($arrayNumeric, $oper, $operand, $rows = 10)
{
    $resultArray        = [];

    for ($i = 0; $i < $rows; $i++) {

        foreach ($arrayNumeric as &$newNumeric) {
            if ($oper == "+") {
                $newNumeric += $operand;
            } elseif ($oper == "-"){
                $newNumeric -= $operand;
            } elseif ($oper == "*"){
                $newNumeric *= $operand;
            } elseif ($oper = "/"){
                $newNumeric /= $operand;
                if($operand == 0){
                    echo "Не беси своим нолем";
                }
            }

            $resultArray[$i][]  = $newNumeric;
        }
    }

    return $resultArray;
}

/**
 * @param $name
 * @param mixed $default
 * @return string
 */
function getPost($name, $default = '')
{
    return empty($_POST[$name]) ? $default : $_POST[$name];
}
