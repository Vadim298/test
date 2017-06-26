<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 26.06.17
 * Time: 12:17
 */
$pages = explode('|', $_SESSION['pages']);
if(is_array($pages)) {
    array_pop($pages);
    echo '<ol>';
    foreach ($pages as $page) {
        echo "<li>$page</li>";
    }
    echo '<ol>';
}
