

<?php
$schwarz = "#000000"; /*Schwarze Felder */
$weiss = "#eeeeee"; /* Weisse Felder */
$bgcolor = "#aeaeae"; /* Hintergrundfarbe */
$border = "#00ff00"; /* Zellenrahmen */
$koenigsreihe = array(1 => "T","S","L","D","K","L","S","T"); /* Königsreihe (A,H) */
$bauernreihe = array(1 => "B","B","B","B","B","B","B","B"); /* Bauernreihe (B,G) */
$leerereihe = array(1 => "","","","","","","",""); /* Leere Reihen */
echo("<!DOCTYPE html>")
<html>
	<head>
		<title>CSS-Gestyltes Schachbrett</title>
		<style>
body {
 background-color: $bgcolor;
}
table {
 border: 1px solid $border;
 border-collapse:collapse;
}
table tr.row-odd td:nth-child(even) {
 width:60px;
 height:60px;
 border:1px solid $border;
 background-color: $weiss;
 
}
table tr.row-odd td:nth-child(odd) {
 background-color:$schwarz;
 width:60px;
 height:60px;
 border:1px solid $border;
}
table tr.row-even td:nth-child(odd) {
 width:60px;
 height:60px;
 
 background-color: $weiss;
 border:1px solid $border;
}
table tr.row-even td:nth-child(even) {
 width:60px;
 height:60px;
 background-color: $schwarz;
 border: 1px solid $border;
}
table.schachbrett tr td.Beschriftung {
 background-color: $bgcolor;
width:20px;
}
</style>
		<meta charset=\"UTF-8\">
		<meta value=\"author\" content=\"Kaltenstein of MercuryOne\">
	</head>
	<body>
	<table class=\"schachbrett\">
	<tr class=\"Beschriftung\">
		<th>&nbsp;</th>
		<th>A</th>
		<th>B</th>
		<th>C</th>
		<th>D</th>
		<th>E</th>
		<th>F</th>
		<th>G</th>
		<th>H</th>
	</tr>");
$brett[1] = $koenigsreihe;
$brett[2] = $bauernreihe;
$brett[3] = $leerereihe;
$brett[4] = $leerereihe;
$brett[5] = $leerereihe;
$brett[6] = $leerereihe;
$brett[7] = $bauernreihe;
$brett[8] = $koenigsreihe;
$i = 8;                                         /* Definieren eines Zählers für die While-Schleife */
while ($i >= 1) {                               /* Solange $i größer/gleich 1 ist, ... */
    $mod = $i % 2;                              /* ... ermittle den Modulo von $i. */
    if ($mod == 0) {                            /* Ist $i gerade (der Modulo gleich 0),... */
        echo("<tr class=\"row-even\">");        /* ... gib die Table-Row mit der CSS-Klasse row-even aus, ... */
    } else {
        echo("<tr class=\"row-odd\">");         /* ... ansonsten eine mit der Klasse row-odd.*/
    }
    echo("<td class=\"Beschriftung\">$i</td>"); /* Beschrifte die Zeile */
    $h = 1;                                     /* Einen Zähler für die folgende While-Schleife definieren. */
    while ($h <= 8) {                           /* Solange $h kleiner/gleich 8 ist, ... */
        echo("<td id=\"$i-$h\"><img src='" . $brett[$i][$h] . ".jpg'></td >");        /* Zeige eine Zelle mit der ID 1-1 bis 8-8 */
        print_r($brett[$i]);
        $h++;                                   /* Erhöhe $h um 1 */
    }
    echo("</tr >");                             /* Schließe die Tabellenreihe */
    $i--;                                       /* Verringere $i um 1 */
}
echo("</table ></body ></html >");            /* Schließe die Tabelle und das HTML-Dokument */