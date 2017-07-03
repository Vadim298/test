<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 30.06.17
 * Time: 14:44
 */
$db = mysqli_connect("localhost",
    "root",
    "killallhumans");

mysqli_select_db($db, "test_db")
    or die (mysqli_error($db));
mysqli_query($db, "SET NAMES 'utf8'");
$sql = "SELECT * FROM teachers";
$result = mysqli_query($db, "$sql")
    or die (mysqli_error($db));
mysqli_close($db);

while($row = mysqli_fetch_assoc($result)){
    echo $row["name"]."<br>";
}

/*echo '<pre>';
print_r ($row);
echo '</pre>';*/

