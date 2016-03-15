<!DOCTYPE html >
<html>
  <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/basestyle.php">
  <link rel="icon" href="favicon.ico" type="image/png">
  <title>Schach</title>
  </head>
  
  
  <body>
  
  <header><h1>Chess - the Art of War</h1></header>
  
	<div>
  
		<table>
			<?php
				
				$RookW = '&#9814;';
				$KnightW = '&#9816;';
				$BishopW = '&#9815;';
				$KingW = '&#9812;';
				$QueenW = '&#9813;';
				$PawnW = '&#9817;';
				$RookB = '&#9820;';
				$KnightB = '&#9822;';
				$BishopB = '&#9821;';
				$KingB = '&#9818;';
				$QueenB = '&#9819;';
				$PawnB = '&#9823;';
				
				$schachfeld = array(
					array('','A','B','C','D','E','F','G','H',''),
					array('8',$RookB,$KnightB,$BishopB,$QueenB,$KingB,$BishopB,$KnightB,$RookB,'8'),
					array('7',$PawnB,$PawnB,$PawnB,$PawnB,$PawnB,$PawnB,$PawnB,$PawnB,'7'),
					array('6','','','','','','','','','6'),
					array('5','','','','','','','','','5'),
					array('4','','','','','','','','','4'),
					array('3','','','','','','','','','3'),
					array('2',$PawnW,$PawnW,$PawnW,$PawnW,$PawnW,$PawnW,$PawnW,$PawnW,'2'),
					array('1',$RookW,$KnightW,$BishopW,$QueenW,$KingW,$BishopW,$KnightW,$RookW,'1'),
					array('','A','B','C','D','E','F','G','H',''),
				);
				
				// User sagt A2A4  Von = A2   Nach = A4
				if (isset($_GET['Von']) && isset($_GET['Nach'])) {
					$vonZeile = 9-(ord(substr($_GET['Von'],1,1))-48); // '2' zur Zahl 2 machen , nach ord hab ich 50 , 48 abzeihen, dann ..
					$vonSpalte = ord(substr($_GET['Von'],0,1))-64; // A
					$nachZeile = 9-(ord(substr($_GET['Nach'],1,1))-48); // 4
					$nachSpalte = ord(substr($_GET['Nach'],0,1))-64;  // A
				
					$schachfeld[$nachZeile][$nachSpalte] = $schachfeld[$vonZeile][$vonSpalte];
					$schachfeld[$vonZeile][$vonSpalte] = '';
				
				}
				else {
					echo "Noob!";
				}
				
				
				foreach($schachfeld as $zeile) //holt aus $spielstand nacheinander alle
												// einzelnen zeile, die in eine temp Variable gesteckt werden
				{
					echo "<tr>";
						foreach($zeile as $zelle)
						{
							echo "<td>$zelle</td>";
						}
					echo "</tr>";	
				}	
				
				// User Eingabefeld
				
				?>
				<div id="eingabebereich">
				<p>Hallo  .... bitte geben Sie Ihren Zug ein:</p>
				<form action="" method="GET" >
				<label>von</label>
				<select name="Von" size="4">
				<?php
					for($i='A';$i<='H';$i++)
					{  
						for($j='1';$j<='8';$j++)
							{
								echo "<option value=".$i.$j.">".$i.$j."</option>"; 
							}
					}
				?>
				</select>
				<label>nach</label>
				<select name="Nach" size="4">
				<?php
				 for($i='A';$i<='H';$i++)
				 {  
					for($j='1';$j<='8';$j++)
						{
							echo "<option value=".$i.$j.">".$i.$j."</option>"; 
						}
				 }
				?>
				</select><br>
				 <input type="submit" value="jetzt bewegen"><br>
				</form>		
				</div>
				
		</table>
	  
	</div>
  
  </body>
  
</html>