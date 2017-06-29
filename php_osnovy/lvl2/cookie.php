<?php
/**
 * Created by PhpStorm.
 * User: Vadym
 * Date: 22.06.17
 * Time: 14:03
*/
$visitCounter = 0;
if(isset($_COOKIE['visitCounter'])){
    $visitCounter = $_COOKIE['visitCounter'];
$visitCounter++;
}
if(isset($_COOKIE['lastVisit'])){
    $lastVisit = $_COOKIE['lastVisit'];
}

setcookie('visitCounter', $visitCounter, 0x7FFFFFFF);
setcookie('lastVisit',  date('d-m-Y H:i:s'),0x7FFFFFFF);
?>
<h1> Last visit </h1>
<?php
if($visitCounter == 1){
    echo '<p> Welcome';
} else {
    echo "<p> You came in  $visitCounter time";
    echo "<p> Last Visit: $lastVisit";
}
?>
<h1>COOKIE.PHP </h1>

