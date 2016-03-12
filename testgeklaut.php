<?php

 for($zeile = 1; $zeile < 9; $zeile++){  
        for($spalte = 1; $spalte <= 9; $spalte++){ 
            
            
            
            // Bauer - Weiß
            if ( $zeile == 2 )
            { 
                $stein = '&#9817' ;                          
            }
         
            else {                
                $stein = '&nbsp';
            }
                        
            $td[$zeile][$spalte] = array('class'=>(($zeile+$spalte) % 2 == 0) ? 'farbe1': 'farbe2', 'value' => $stein);              
        }          
    } 

    $field = null;
foreach($td as $zeile => $f12){ 
        $field.= '<tr>'; 
        foreach($f12 as $spalte => $feld){ 
            $field.="<td class='{$feld['class']}'>{$feld['value']} </td>";
        } 
        $field.= '</tr>'; 
    } 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>schach</title>
    </head>
<style>

    .farbe1{
        background-color: #999;
    }
    
    .farbe2{
        background-color: #fff;
    }
    
table.field {
    text-align: center;
   border: #A6A6A6 1px solid;
}

table.field tr td {
   width: 60px;
   height: 60px;
}

</style>    
<body>
<table class="field">
  <?php echo $field; ?> 
</table> 
</body>
</html>