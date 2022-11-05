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
        <?php
            include "connect.php";
            $str = "update casi set TenCaSi='Nguyễn Titi',NgaySinh='2022-10-30' where MaCaSi='CS07'";
            if($connect->query($str)>0)
                echo "update thành công";
            else
                echo "update không thành công";
            $connect->close();
        ?>
    </body>
</html>
