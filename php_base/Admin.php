<?php

    $apps = file('Apps.txt');
    echo '<table>';

    foreach($apps as $line) {

        $arr = explode('-|-', $line);
        echo '<tr>';
        foreach ($arr as $one) {
            echo "<td>$one</td>";
        }

        echo '</tr>';
    }

        echo '</table>';


    ?>
<style>
    table, td{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
    }
</style>

