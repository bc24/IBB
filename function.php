<?php

// hier wird die Funktion mit einem Namen vereinbart
function zeichne_hr()  // function sagt der Maschine, dass der Code nur gelesen
                 // aber noch nicht ausgführt wird
{
	// was soll die Funktion tun
	echo __LINE__."<hr>";	
	verdopple_wert(33);      // aufrufen von Fubnktionen, die noch nicht bekannt sind
}                            // geht in PHP 7 !!!!

function verdopple_wert($w)  // in der Klammer wird ein Wert übergeben
                             // Die Variable übernimmt den unten eingetragenen Wert
{
	$w*=2;
	echo $w;      // $w oder jeder andere Name ist ein lokale Variable
}                 // die nur innerhalb der Funktion existiert

function halbiere_wert($w)  // in der Klammer wird ein Wert übergeben
                             // Die Variable übernimmt den unten eingetragenen Wert
{
	$w/=2;
	zeichne_hr();
	return $w;      // $w oder jeder andere Name ist ein lokale Variable
}                   // die nur innerhalb der Funktion existiert
                    // dies ist eine Funktion mit einem return

function int_verdopple(int $i)  // neu in PHP7
{                               // lokale Variable können auf type gesprüft werden
	$i*=2;
	return $i;
}

function return_type(string $i): float // PHP 7 kann auch den return type festlegen
{
	return $i/=2;
}


// main - Hier startet das Hauptprogramm
echo __LINE__."Wir starten erstmal das Hauptprogramm und rufen dann die Funktion";
zeichne_hr();
echo __LINE__."und dann geht es nach dem Aufruf weiter und die Funktion kann wieder gerufen werden";
zeichne_hr(); // hat eine Funktion gerufen, die nur einen Befehl ausgeführt
verdopple_wert(5); // soll einen mitgegebenen Wert berechnen 
echo "<br>".halbiere_wert(88);
echo "<br>".int_verdopple(ord('A'));
echo "<br>".return_type(21.99);




?>