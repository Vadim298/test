<?php
    require "lib.inc.php";
?>
<html>
<head>
    <title>Школьный портал</title>
</head>
<body>

<table width="100%" border="1">

    <tr>
        <td colspan="2" align="center">
            <?php
            include "top.inc.php";
            ?>
        </td>
    </tr>

    <tr>
        <td width="20%" valign="top">
            <?php
                include "menu.inc.php";
            ?>
        </td>
        <td>
            <?php
            $id = empty($_GET['id']) ? null : strip_tags($_GET['id']);
            switch($id){
                case 'page1':
                    include 'page1.php';break;
                case 'page2':
                    include 'page2.php';break;
                case 'page3':
                    include 'page3.php';break;
                case 'table':
                    getTable(); break;
                case 'calc':
                    include 'calculator.php';break;
                default:
                    echo '<p> Hello!';
            }
            ?>
        </td>
    </tr>

    <tr>
        <td colspan="2" align="center">
            <?php
            include "bottom.inc.php";
            ?>
        </td>
    </tr>
</table>

</body>
</html>