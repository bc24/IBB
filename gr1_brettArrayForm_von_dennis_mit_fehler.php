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


// bewegen = neue Stelle mit Wert an alter Stelle füllen
//           dann alte Stelle mit nichts ersetzen 
//$spielstand[4][1] = $spielstand[2][1];
//$spielstand[2][1] = '&nbsp;';

if (isset($_POST['Von']) && isset($_POST['Nach']))
{  	$zugnr = $_POST['zugnummer'];

	$vonZeile = 9-(ord(substr($_POST['Von'],1,1))-48);
	$vonSpalte = ord(substr($_POST['Von'],0,1))-64;
	$nachZeile = 9-(ord(substr($_POST['Nach'],1,1))-48);
	$nachSpalte = ord(substr($_POST['Nach'],0,1))-64;
	
	echo "Jetzt kommt der $zugnr. Zug und damit ist ";
	if ($zugnr%2)
	{echo "Weiß ist dran";}else
		{echo "Schwarz ist dran";}
	print_r($_POST["neuspielstand"]);
	$spielstand = unserialize($_POST["neuspielstand"]);
	$spielstand[$nachZeile][$nachSpalte] = $spielstand[$vonZeile][$vonSpalte];
	$spielstand[$vonZeile][$vonSpalte] = "";
	$neuerspielstand = $spielstand;
}
else 
{
	
	echo "Erster Spielzug Weiß fängt an ";
	$zugnr = 1;
}




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
			float:left;
		}
		#eingabebereich{
		   border: solid black 1px;
		   float:left;
	
		
		   
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
		<div id="eingabebereich">
			<p>Hallo  .... bitte geben Sie Ihren Zug ein:</p>
			<form action="" method="POST">
			  <center>
			 <label>von</label>
			 <select name="Von" >
			 <?php
			 for ($spalten='A';$spalten <='H';$spalten++)
			 {
				 for($zeilen=1;$zeilen <=8;$zeilen++)
				 {
						echo "<option value=$spalten$zeilen".">"."$spalten$zeilen</option>"	;
				}		
			 }	
			?>	
				
				
			</select><br>
			 <label>nach</label><select name="Nach">
			  <?php
			 for ($spalten='A';$spalten <='H';$spalten++)
			 {
				 for($zeilen=1;$zeilen <=8;$zeilen++)
				 {
			echo "<option value=".$spalten.$zeilen.">".$spalten.$zeilen."</option> ";
				 }		
			 }
			 $zugnr++;
		echo "</center>
			</select><br>
			 <input type='submit' value='jetzt bewegen'><br>
			 <input type = 'hidden' name = 'zugnummer' value = '".$zugnr."'>";
			$n=serialize($neuerspielstand);
		    echo  "<input type = 'hidden' name = 'neuspielstand' value =' ".$n."'>";
			echo "</form>"	;	
			 ?>
		</div>
	</body>

</html>












