<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic Calculating Digits</title>
</head>
<body>
	<form action="basic_calculate.php" method="post">
		<p>
			<label for="SH1">First digit</label>
			<input type="text" name="SH1"/>
		</p>
		<p>
			<label for="SH2"> Second digit</label>
			<input type="text" name="SH2"/>
		</p>

		<div>
			<input type="RADIO" NAME="method" value="+"> + <br>
			<input type="RADIO" NAME="method" value="-"> - <br>
			<input type="RADIO" NAME="method" value="x"> x <br>
			<input type="RADIO" NAME="method" value="/"> / <br>
		</div>
        
		<input type="submit" value="=" name="submit">

		<?php
			$rs;
			if(isset($_POST['submit'])){
				$SH1 = $_POST['SH1'];
				$SH2 = $_POST['SH2'];

				if(isset($_POST['method'])) {
					$operator = $_POST['method'];
					if($operator == "+")
						$rs = $SH1 + $SH2;
					elseif($operator == "-")
						$rs = $SH1 - $SH2;
					elseif($operator == "x")
						$rs = $SH1 * $SH2;
					elseif($operator == "/")
						$rs = $SH1 / $SH2;
				}
			}
			echo $rs;
		?>
	</form>
</body>
</html>