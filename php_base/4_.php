<?php

    //while; for; foreach.

    $i = 1;

    if($i < 10){
        echo $i;
        $i++; // $i = $i +1     $i+=1
    }

    function dropDown()
    {
        $j = 1910;
        $select = '';
        while($j <= 2010) {
            $select .= '<option value="' . $j . '">' . $j . '</option>';
            $j++;
        }

        return $select;
    }
?>
<select>
    <?= dropDown() ?>
</select>


<select>
    <?php
        for($k = 1910; $k <= 2010; $k += 2){
           echo "<option value=\"$k\">$k</option>";
        }
    ?>
</select>