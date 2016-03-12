<?php

//  Datenhaltung des Spielstandes
//  Variable, die mehrere Werte unter einem Namen aufnimmt
//  und trotzdem jeden Einzelwert adressierbar macht

//  Array ( gibt es in n Dimensionen )
//  wenn 1 dim  = Liste
//       2 dim  = Feld
//       3 dim  = Quader

$umsatzliste = array(12,8,13,23,24,20,14,15,18,11,20,22);
//Elemente im Array   0,1,2 ,3 ,4 ........... werden per Index          
$umsatz_im_Januar = $umsatzliste[0];

$monat = 5; // soll den Mai adressiere
echo "Der Umsatz im Mai lautet :".$umsatzliste[$monat-1]; 

// wie kann ich alle Monate ausgeben ?
print_r($umsatzliste); 

echo "<br>";

for($monat = 1; $monat <= 12; $monat++)
{
	echo "Im Monat $monat betrug der Umsatz ".$umsatzliste[$monat-1]."<br>";
}
?>

