<?php

   $capitals = [
       'Russia' => ['Moscow', 'Piter','Govno'],
       'France' => ['Paris','Kann', 'Marsel', 'Anju'],
       'England' => ['London', 'Liverpul', 'York']
   ];
   /* ul-li-ul-li  */
   echo '<ul>';

    foreach($capitals as $country => $towns){
        echo '<li>';

        echo $country;

        echo '<ol>';

        foreach($towns as $town){
            echo "<li>$town</li>";
        }
        echo '</ol></li>';
    }

    echo '</ul>';