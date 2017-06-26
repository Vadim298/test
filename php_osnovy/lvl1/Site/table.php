<?php
$count = 0;
function getTable($cols = 10, $rows = 10, $color = "yellow") {
    static $count = 0;
    echo '<table border="1">';
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>";
        for ($td = 1; $td <= $cols; $td++) {
            if ($td == 1 or $tr == 1) {
                echo "<th style='background-color:$color'>", $tr * $td, "</th>";
            } else {
                echo "<td>", $tr * $td, "</td>";
            }
        }
        echo "</tr>";
    }
    echo '</table>';
    $count++;
    $GLOBALS["count"] = $count;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <title>Таблица умножения</title>
</head>
<body>
<h1>Таблица умножения</h1>
<?php
getTable(5, 6, "red");
getTable();
getTable(8);
getTable(5, 5);
echo " " . $count . " ";
?>
</body>
</html>