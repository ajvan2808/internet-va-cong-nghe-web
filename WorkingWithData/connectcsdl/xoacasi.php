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
        <form method="get" action="#">
            Mã ca sĩ<input name="macasi"></input><br>
            <input type="Submit" name="Submit" value="Xóa">
        </form>
        <?php
            if(isset($_GET['Submit']))
            {
                $macasi=$_GET['macasi'];
                include "connect.php";
                $str = "delete from casi where MaCaSi='$macasi'";
                if($connect->query($str)>0)
                   echo "Delete thành công";
                else
                   echo "Delete không thành công";
                $connect->close();
            }
        ?>
    </body>
</html>
