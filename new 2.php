<?php
$DVD = array();

$DVD[ ] = array('Titel' => "Ocean's Eleven",'Hauptdarsteller' => "George Clooney", 'Jahr' => 2001);
$DVD[ ] = array('Titel' => "Fluch der Karibik",'Hauptdarsteller' => "Johnnny Depp", 'Jahr' => 2004);
$DVD[ ] = array('Titel' => "Fight Club",'Hauptdarsteller' => "Brad Pitt", 'Jahr' => 1999);
$DVD[ ] = array('Titel' => "American History X",'Hauptdarsteller' => "Edward Norton", 'Jahr' => 2000);
$DVD[ ] = array('Titel' => "Ice Age", 'Jahr' => 2002);     /* !! hat keinen Index "Hauptdarteller" */

print_r($DVD);     /* gebe das 3-dimensionale Array formatiert aus (Quellcode angucken !)"; */

?><br /><br />
<?php

echo $DVD[0]['Hauptdarsteller'];
?>