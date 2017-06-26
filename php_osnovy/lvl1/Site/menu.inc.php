<?php
$menu = array(
    "HOME"=>"index.php",
    "Page1"=>"index.php?id=page1",
    "Page2"=>"index.php?id=page2",
    "Page3"=>"index.php?id=page3",
    "Table"=>"index.php?id=table",
    "Calculator"=>"index.php?id=calc"
);
?>
<table width="100%">
    <tr>
        <td>
            <p>Меню</p>
            <?php
            getMenu($menu);
            ?>
        </td>
    </tr>
</table>