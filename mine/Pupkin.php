


<?php

function count_result($a, $b, $oper)
{
    if ($oper == "+") {
        $result = $a + $b;
    } elseif ($oper == "-") {
        $result = $a - $b;
    } elseif ($oper == "*") {
        $result = $a * $b;
    } elseif ($oper == "/") {
        if ($b == 0) {
            echo "You can't divide by 0";
            return false;
        }

        $result = $a / $b;
    } else {
        return false;
    }

    return $result;
}

$result = '';

$a = '';
$b = '';
$oper = '';

if (isset($_POST['a'], $_POST['b'], $_POST['oper'])) {

    $a = $_POST['a'];
    $b = $_POST['b'];
    $oper = $_POST['oper'];

    $countResult = count_result($a, $b, $oper);

    if ($countResult !== false) {
        $result = $countResult;
    }
}

?>

<html>
<head>
    <title> CALCULATE AND DO NOT HATE</title>
</head>
<body>
<form action="Pupkin.php" method="post">
    <input type="text" name="a" value="<?= $a ?>"><br>

    <label><input type="radio" name="oper" value="+" <?= $oper == '+' ? 'checked' : '' ?>> +</label>
    <label><input type="radio" name="oper" value="-" <?= $oper == '-' ? 'checked' : '' ?>> -</label>
    <label><input type="radio" name="oper" value="*" <?= $oper == '*' ? 'checked' : '' ?>> *</label>
    <label><input type="radio" name="oper" value="/" <?= $oper == '/' ? 'checked' : '' ?>> /</label><br>

    <input type="text" name="b" value="<?= $b ?>"><br>

    <input type="submit" value="="><br>
    <input type="text" name="result" value="<?= $result ?>"><br>
</form>
</body>
</html>

