<?php 

//	Datenhaltung des Spielstandes
//	Variable, die mehrere Werte unter einem Namen aufnimmt
//	und trotzdem jeden Einzelwert adressierbar macht

//	Array (gibt es in n Dimensionen)
//	wenn	1 dim = Liste
//			2 dim = Feld
//			3 dim = Quader

$umsatzliste = array (12,8,13,23,24,20,14,15,18,11,20,22);
//	Elemente im Array 0,1,2,3,4, ........ werden per Index
$umsatz_im_januar = $umsatzliste[0];

$monat = 5;	//	soll den Mai adressieren
echo "Der Umsatz im Mai lautet :".$umsatzliste[$monat-1];

//	
print_r($umsatzliste);
echo "<br>";

for ($monat = 1; $monat <= 12; $monat++) {
	echo "Im Monat $monat betrug der Umsatz ".$umsatzliste[$monat-1]."<br>";
}

//	2 dimensionales Array
//	Beispiel: wieder 12 Monatsumsätze, aber für 4 Verkaufsgebiete West, Ost, Süd, Nord

/*
*			JAN	FEB	MAR	.....
*	West:	1	
*	Ost:	4	7
*	Nord:
*	Süd:
*
*/

$Konzernumsatz = array(
				 array(1,2,3,4,5,6,7,8,9,10,11,12),
				 array(2,6,5,4,3,7,6,8,9,1,3,2),
				 array(6,5,4,3,7,8,2,9,3,6,5,7),
				 array(7,9,5,3,1,5,3,6,4,8,7,9)
				);
				
$UmsatzOSTFEB = $Konzernumsatz[1][1];	//	Zugriff

//	assioziatives Array mit zeichenketten als Index
$umsatzNachMonat = array('jan' => 123, 'feb' => 98, 'mar' => 33);

echo $umsatzNachMonat['feb'];


$spielstand = array(
				array('A1' => 'T', 'B1' => 'L'),
				array('A2' => 'B'),
			);

?>