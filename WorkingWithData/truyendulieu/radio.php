<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="radio.php" method="GET">
            <input type="RADIO" NAME="radGT">Nam<br>
            <input type="RADIO" NAME="radGT" VALUE="Nu">Nữ<br>
            <input type="SUBMIT" VALUE="Submit">
        </form>

            <?php
                if(isset($_GET['radGT'])){
                    echo "Gioi tinh : " . $_GET['radGT'];
                }
            ?>

    </body>
</html>
