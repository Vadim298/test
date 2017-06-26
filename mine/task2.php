<html xmlns="http://www.w3.org/1999/html">
<body>
<h2> Таблица деления </h2>


    <?php
    function getTable($width=10, $height=10){
        $table = "<table border='1'>";
        for($tr = 1; $tr <= $width; $tr++ ){
            $table .= '<tr>';
            for($col = 1; $col <= $height; $col++){
                if($tr == 1 or $col == 1){
                    if ($tr == 1 or $col == 1) {
                        $table .= "<th >" .$tr * $col . "</th>";
                    } elseif ($tr == 1 and $col == 1) {
                        $table .= "<th>" . $tr / $col . "</th>";
                    } else {
                        $table .= "<td>" . $tr / $col . "</td>";
                    }
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
