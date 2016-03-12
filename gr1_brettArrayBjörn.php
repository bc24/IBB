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
		array('&nbsp;','A','B','C','D','E','F','G','H','&nbsp;'));
		
		
		
// bewegen = neue Stelle mit Wert an alter Stelle füllen
//           dann alte Stelle mit nichts ersetzen 
//$spielstand[][] = $spielstand[][];
//$spielstand[][] = '&nbsp;';
?>
		<?php
	
		if( isset($_GET["VonZeile"])&& isset($_GET["NachZeile"])){
		$zugnr = $_GET['zugnummer'];
		$vonzeile = 9-(ord(substr ($_GET["VonZeile"],0,1))-48);
		$vonspalte =ord(substr ($_GET["VonSpalte"],0,1))-64;
		$nachzeile =9-(ord(substr ($_GET["NachZeile"],0,1))-48);
		$nachspalte =ord(substr ($_GET["NachSpalte"],0,1))-64;
		echo "Dies ist der $zugnr. Zug und damit ist ";
		if ($zugnr%2)
		{echo "schwarz dran";}else
			{echo "weiss dran";}
		$spielstand[$nachzeile][$nachspalte] = $spielstand[$vonzeile][$vonspalte];
			$spielstand[$vonzeile][$vonspalte] = " ";
		}
		
		else {
				$zugnr = 0;

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
		{ border:solid Black 1px;
   		  background-color: lightgreen;
		}
		table{
			border-collapse: collapse;
			float:left;
		}
		#eingabebereich{
		   border: solid black 1px;
		   float:left;
		   background-color: lightgreen
		   
		   
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
		<div id="eingabebereich" align= center>            
			<p>Hallo! <br> .... <br> bitte geben Sie Ihren Zug ein:</p>
			<form action="" method="GET" >
			 <label>Von</label><select name="VonSpalte">
			    <option value="A" selected>A</option> 
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
				<option value="E">E</option>
				<option value="F">F</option>
				<option value="G">G</option>
				<option value="H">H</option>
			</select><br>
			
			<label>Von</label><select name="VonZeile">
				<option value="1" selected>1</option> 
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
			</select><br>
			
			<label>Nach</label><select name="NachSpalte">
				<option value="A" selected>A</option> 
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
				<option value="E">E</option>
				<option value="F">F</option>
				<option value="G">G</option>
				<option value="H">H</option>
			</select><br>
			
			 <label>Nach</label><select name="NachZeile">
				<option value="1" selected>1</option> 
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
			</select><br>
			 <input type="submit" value="jetzt bewegen"><br>
			 <input type="hidden" name="zugnummer" value="<?php $zugnr++; echo $zugnr; ?>">
			 <div id="aus">
<fieldset id="fieldset_aus_s" class="aufgeklappt">
<legend onclick="fieldsetSchalter('aus_s')">Schwarz</legend>
<div id="aus_s">
<div id="typd0" class="ausfigur typd0"> </div>
</div>
</fieldset>
<fieldset id="fieldset_aus_w" class="zugeklappt">
<legend onclick="fieldsetSchalter('aus_w')">Weiß</legend>
<div id="aus_w"></div>
</fieldset>
</div>
			</form>		
		</div>

	</body>

</html>