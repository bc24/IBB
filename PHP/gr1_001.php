<!DOCTYPE html>
<html>
	<head>
		<?php
		  $h_faktor = 6;
		  $hinterFarbe = "green";
		?>
		<style>
			body{
				background-color: <?php echo $hinterFarbe; ?>  ;
			}
		</style>
	</head>
	<body>
		<?php echo "<h$h_faktor>Titelzeile </h$h_faktor>"; ?>
		
	</body>
</html>