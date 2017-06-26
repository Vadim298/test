<?php

function danger_game($a, $b)
{
    if ($a <= 0 && $b <= 0) {
        return 'poshol nahuy';
    } elseif ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

echo danger_game(mt_rand(-10, 10), mt_rand(-10, 10));
