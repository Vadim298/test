

<?php
require_once 'form.php';


if (isset($_POST['numeric1'], $_POST['numeric2'], $_POST['numeric3'], $_POST['numeric4'], $_POST['rows'])) {
    $arrayNumeric = handler([$_POST['numeric1'], $_POST['numeric2'], $_POST['numeric3'], $_POST['numeric4']], $_POST['rows']);

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
 * @param array $arrayNumeric
 * @param int   $rows
 * @return array
 */
function handler($arrayNumeric, $rows = 10)
{
    $resultArray        = [];

    for ($i = 0; $i < $rows; $i++) {

        foreach ($arrayNumeric as &$newNumeric) {
            $newNumeric         *= 2;
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
