<?php
    if(count($_POST) > 0){
        $name = trim ($_POST['name']);
        $phone = trim ($_POST['phone']);
        $dt = date("Y-m-d H:i:s");

        if(strlen($name) <2){
            $msg = 'NE BESI SUKA';
        }
        elseif(strlen($phone) <7){
        $msg = 'SUKAAAA YARIK';
        }
        elseif(!is_numeric($phone)){
            $msg = 'Cifri nado bleat';
        }
        else {

            file_put_contents('Apps.txt', "$dt-|-$name-|-$phone\n", FILE_APPEND);
            $msg = 'POSHOL NAHUY OTSUDA I NE ZAHODI BOLSHE';
        }
    }
    else{
        $name = '';
        $phone = '';
        $msg = 'POSHOL NAHUY OTSUDA I NE ZAHODI BOLSHE';
    }

?>
<form method="post">
    Имя<br>
    <input type="text" name="name" value="<?php echo $name;?>"><br>
    Телефон<br>
    <input type="text" name="phone" value="<?php echo $phone;?>"<br>
    <input type="submit" value="Отправить">
</form>
    <?php
        echo $msg;
        ?>
