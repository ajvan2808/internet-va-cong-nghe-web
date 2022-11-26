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
       <form method="POST" action="#">
            <input type="checkbox" name="chk1" value="en">English <br> 
            <input type="checkbox" name="chk2">Vietnam<br>
            <input type="submit" value="submit" name="submit"><br>
        </form>
        <?php
            if (isset($_POST['submit'])) 
            { // isset to check if the value is set before get it
                    if(isset($_POST['chk1']))
                        echo "checkbox 1 : " . $_POST['chk1'];
                    
                    if(isset($_POST['chk2']))
                        echo "checkbox 2 : " . $_POST['chk2'];
            }
        ?>

    </body>
</html>
