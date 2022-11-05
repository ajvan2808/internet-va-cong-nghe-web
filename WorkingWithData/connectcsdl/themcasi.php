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
            $str = "insert into casi values('8','Nguyễn Xuân Tùng','2000-1-20')";
            
            if($connect->query($str)===true)
                echo "insert thành công";
            else
                echo "insert không thành công";
           $connect->close();
        ?>
    </body>
</html>
