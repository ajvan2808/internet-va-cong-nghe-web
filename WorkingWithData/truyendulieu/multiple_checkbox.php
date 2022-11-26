<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Retrieve multiple checkbox values</title>
    </head>
    <body>
       <form method="POST" action="#">
		<label class="heading"> Options </label>
            <input type="checkbox" name="checklist[]" value="C++"> <label> C++ </label> 
            <input type="checkbox" name="checklist[]" value="Java"> <label> Java </label> 
			<input type="checkbox" name="checklist[]" value="PHP"> <label> PHP </label> 
			<input type="checkbox" name="checklist[]" value="Python"> <label> Python </label> 
			<input type="checkbox" name="checklist[]" value="Golang"> <label> Golang </label> 
            <input type="submit" value="submit" name="submit"/><br>

            <?php include 'checkbox_value.php';?>
			
        </form>
    </body>
</html>