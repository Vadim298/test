<?php



function table($arr)
{
    $table = '<table cellpadding="5" cellspacing="0" border="1">';
    foreach($arr as $value) {
        $table .= "<tr>";
        foreach ($value as $data) {
            $table .= "<td>" . $data . "</td>";
        }
        $table .= "</tr>";
    }
    $table .= "</table>";

    return $table;
}

function quard($width, $height)
{
//    $arr = array(
//        0 => [0, 1, 2, 3, 4,5],
//        1 => [15,16,17,18,19,6],
//        2 => [14,23,22,21,20,7],
//        3 => [13,12,11,10,9,8]
//    );

    $array = [];

    $number = 1;

    $vadim = 0;

    for ($row = 0; $row  < $height; ++$row) {
        for ($td = 0; $td < $width; ++$td) {

            if ($row == 0 || $row == ($height - 1)) {
                $array[$row][$td] = $number++;
            } elseif ($td == 0 || $td == ($width - 1)) {
                $array[$row][$td] = $number++;
            } elseif($vadim % 1) {
                $array[$row][$td] = $number++;
            } else {
                $array[$row][$td] = '';
            }
            ++$vadim;
        }
    }


    return table($array);
}

echo quard(7, 7);