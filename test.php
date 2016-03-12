<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Üben</title>
		<!--Variablen-->
	<?php
		$Breite = 30;			//	Spallten Breite
		$Hoehe =  30;			//	Spalten Höhe
		$Farbe1 = "white";		//	Farben des Schachbrettes
		$Farbe2 = "black";			
	
	?>
	
	<style>

	table{
	border-collapse:collapse;}
		<?php echo "td{ width:$Breite.px; height:$Hoehe.px;border: thin solid;}";
		echo "tr:nth-child(odd) td:nth-child(odd) {background:$Farbe1;}";
		echo "tr:nth-child(even) td:nth-child(even) {background:$Farbe2;}";
	
	?>
	
	</style>
	</head>
<body>
<?php
	$Vips 	= array(
			array("Turm","Springer","Läufer","Dame","König","Läufer","Springer","Turm");
			array ("Bauer","Bauer","Bauer","Bauer","Bauer","Bauer","Bauer","Bauer"); 
	)
	
	for ($zeile = 1;$zeile <=8; $zeile++)
	{
		echo "<tr><th>".(9-$zeile)."</th>";
		
			for($spalte=1;$spalte<=8;$spalte++)
			{
				if ( $zeile == 2 || $zeile==7)
				{
				$ausgabe= $Bauern[$zeile][$spalte];
				}
				elseif ($zeile ==1 || $zeile==8)
				{
					$ausgabe = $Vips[$zeile][$spalte];
				}
				elseif ($zeile > 2 && $zeile <7)
				{
				$ausgabe= "";
				}
			}
				echo "<td>$ausgabe</td>";
					
					
			
	
	echo "</tr>";
	}

	
for($spalte = 65;$spalte<=72;$spalte++)
{
	echo "<th>".(chr($spalte))."</th>";
	
}
	echo "</tr> ";
	
	
	
	
	?>
</body>	
	
		
		</html>