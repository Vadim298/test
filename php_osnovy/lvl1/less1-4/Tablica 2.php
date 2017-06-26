<html>
<body>
<h2> Таблица умножения </h2>
<?php
//сделать таблицу улиткой
function getTable($cols = 10, $rows = 10, $color = 'yellow') {
    $table = "<table border = '1' align = 'left'>";
    for ($tr = 0; $tr <= $rows; $tr++) {
        $table .= "<tr>";
        for ($td = 0; $td <= $cols; $td++) {
            if ($tr == 0 xor $td == 0) {
                $table .= "<th style='background:$color'>" . ($tr + $td) . "</th>";
            } elseif ($tr == 0 and $td == 0) {
                $table .= "<th style='background:$color'>" . ($tr + $td) . "</th>";
            } else {
                $table .= "<td>" . ($tr + $td) . "</td>";
            }
        }
        $table .= "</tr>";
        $table = $table . "</tr>";
    }

    $table .= "</table>";

    return $table;
}

echo getTable();
?>
</body>
</html>
