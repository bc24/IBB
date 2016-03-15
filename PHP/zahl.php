<?php
            if( isset($_GET['zahl']) )
            {
                $zaehler = $_GET['zahl'] +1;    
            }
            else
            {
                $zaehler = 1;
            }
            echo '<a href="?zahl='.$zaehler.'">Klick mich</a>';
            echo "<br />";
            echo "Die Zahl lautet: ".$zaehler;
        ?> 