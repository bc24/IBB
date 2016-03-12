<?php

$spielstand = array(
        array('&nbsp;','A','B','C','D','E','F','G','H','&nbsp;'),
		array(8,'&#9820;','&#9822;','&#9821;','&#9819;','&#9818;','&#9821;','&#9822;','&#9820;',8),
		array(7,'&#9823;','&#9823;','&#9823;','&#9823;','&#9823;','&#9823;','&#9823;','&#9823;',7),
		array(6,'&nbsp;','&nbsp;','&nbsp;','&nbsp;','&nbsp;','&nbsp;','&nbsp;','&nbsp;',6),
		array(5,'&nbsp;','&nbsp;','&nbsp;','&nbsp;','&nbsp;','&nbsp;','&nbsp;','&nbsp;',5),
		array(4,'&nbsp;','&nbsp;','&nbsp;','&nbsp;','&nbsp;','&nbsp;','&nbsp;','&nbsp;',4),
		array(3,'&nbsp;','&nbsp;','&nbsp;','&nbsp;','&nbsp;','&nbsp;','&nbsp;','&nbsp;',3),
		array(2,'&#9817','&#9817','&#9817','&#9817','&#9817','&#9817','&#9817','&#9817',2),
		array(1,'&#9814','&#9816','&#9815','&#9813','&#9812','&#9815','&#9816','&#9814',1),
		array('&nbsp;','A','B','C','D','E','F','G','H','&nbsp;')
);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Schachspiel EBAS</title>
		<style>
		tr:nth-child(even) td:nth-child(odd),
		tr:nth-child(odd)  td:nth-child(even){
			background-color:silver;
		}
		tr:nth-child(1) td:nth-child(n),tr:last-child td:nth-child(n),
		tr:nth-child(n) td:nth-child(1),tr:nth-child(n) td:last-child
		{
			background-color: #EDDA74;
		}
		table{
			border-collapse: collapse;
		}
		</style>
		
	</head>
	<body>
		<?php
		echo "<table>";
		foreach($spielstand as $zeile) //holt aus $spielstand nacheinander alle
		                               // einzelnen zeile, die in eine temp Variable gesteckt werden
		{
			echo "<tr>";
			foreach($zeile as $zelle)
			{
				echo "<td>$zelle</td>";
			}
			echo "</tr>";	
		}
		echo "</table>";
		?>
		
	</body>

</html>