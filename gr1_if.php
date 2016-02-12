<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CSS-Beispiel: Pseudoklasse first-of-type</title>
    <style>
	  table { border-collapse: collapse; }
	  td { width: 100px; height: 100px; border: thin solid; }
	  tr:nth-child(odd) td:nth-child(odd) {background: black;}
	  tr:nth-child(even) td:nth-child(even) {background: black;}
    </style>
  </head>
  <body>
    <h1>Schachbrett</h1>
    <table>
	<tbody>
	<?php
	  // for (start;ende;änderung)
		 for($zeile=1;$zeile<=8;$zeile++)
	// alternativ for($zeile=8;$zeile>=1;$zeile--)
		 {
			 echo "<tr><th>".(9-$zeile)."</th>";
			 for($spalte=1;$spalte<=8;$spalte++)
			 {
				 // if (bedingung)	  muss wahr oder falsch sein können
				 if ( $zeile == 2 || $zeile==7)
				 { $figur="Bauer"; }
				 if ( $zeile== 1 || $zeile == 8)
				 { $figur="Offizier"; }
				 if ($zeile > 2 && $zeile < 7)
				 { $figur="&nbsp;"; }
				 
				 echo"<td>$figur</td>";  // im td könnte man noch Z:$zeile-S:$spalte anzeigen lassen
			 }
		echo "</tr>";
		 }

	  echo "<tr><th></th>";
	  for($spalte=65; $spalte <= 72;$spalte++) // 65= A  , 72 = H
	  {
	  	echo "<th>".(chr($spalte))."</th>";
	  }
	  echo "</tr> ";
	  ?>
	</tbody>
	</table>
  </body>
</html>