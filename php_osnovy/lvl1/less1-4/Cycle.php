<?php
/*for (
1.partA(чаще всего счетчик);
2.partB(проверяет истинность, "маленький" if);
4.partC(php выполняет тут десйтвия, как правило тут изменяем счетчик))
{
    3.instruction 1;
    instruction 2;
    Бегает между part В и insruction   и part С пока в
    part B не станет false
} */
/*for($i = 1; $i <= 50; $i+=2)
{
    echo $i.'<br>';
}*/
/* $str = 'hello';
//$cnt = strlen($str);
for ($i = 0, $cnt = strlen($str); $i < $cnt; $i++) {
    echo $str{$i} . '<br>';
} */
//---------------------------------------------------------------------------------
/* while (условие)
{
    инструкция 1;
    инструкция 2;
    ............
}
$sum = 1
while ($<=30)
{
    $sum += 3;
    $i++;
    print($sum);
} */
/* $i = 1;
while($i<50)
{
    echo $i+=2;
    echo '<br>';
} */
?>
<html>
<body>
<h2> Таблица кривого деления</h2>

<form action="Cycle.php" method="post">
    <label>Количество колонок <input type="text" name="cols"></label><br>
    <label>Количество строк <input type="text" name="rows"></label><br>
    <input type="submit" value="отрисовать таблицу"/><br>
</form>

<?php
if (isset($_POST['cols'], $_POST['rows'])) {
    echo getTable($_POST['cols'], $_POST['rows']);
}

function getTable($cols = 10, $rows = 10, $color = 'yellow') {
    $table = "<table border = '1' align = 'left'>";
    for ($tr = 0; $tr <= $rows; $tr++) {
        $table .= "<tr>";
        for ($td = 0; $td <= $cols; $td++) {
            if ($tr == 0 or $td == 0) {
                $table .= "<td style='background:$color'>". ($tr?:$td) ."</td>";
            } else {
                $table .= "<td>" . round(($td / $tr), 2) . "</td>";
            }
        }
        $table .= "</tr>";
    }

    $table .= "</table>";

    return $table;

}
?>


</body>
</html>
