<?php
	if(isset($_POST['submit'])) {
		if(!empty($_POST['checklist'])) {
			// Count selected options
			$checked_count = count($_POST['checklist']);
			echo "<br> You have selected: ".$checked_count."option(s): </br>";
			
			// Loop through selected checkbox in checklist
			foreach($_POST['checklist'] as $selected) {
				echo "<p>".$selected."</p>";
			}
		}
		else{
			echo "<b> None option have selected!";
		}
	}
?>