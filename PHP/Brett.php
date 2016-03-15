<?php
$stats = new schach();	// Anscheinend muss ich die Klasse erst in eine Variable füllen
$stats->drawBoard();	// um dann direkt in die Klasse springen

class schach
{
	private $maxSlots = 10;		// Länge und Breite.
								// Vorne, hinten, oben und unten geht jeweils eine Zeile weg für den Rand
	
	// Schritt 1, das Brett.
	// Einsprungpunkt für das gesamte Gerät hier
	function drawBoard()
	{
		// HTML Makulatur
		echo "<!DOCTYPE html>";
		echo "<html>";
			
		// Dann der Kopf
		$this->drawHeader();
		
		echo "<BODY>";
			
			// Der Brett-Inhalt
			$this->drawColumns();	// $this zeigt auf das aktuelle Objekt, also die Klasse hier
			
		echo "</BODY>";
		
		echo "</HTML>";
	}
	
	
	// Schritt 1.1 - Header
	private function drawHeader()
	{
		echo '<HEAD>';
		
			echo '<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">';
			echo '<title>Schachbrett</title>';
			// TODO: CSS
		
		echo '</HEAD>';
	}
	
	// Schritt 2 - Zeilen
	private function drawColumns()
	{
		$currentSlot = 1;
		
		echo "<TABLE BORDER=1 CELLPADDING=10>";	// TODO - CSS statt Cellpadding/Border
		
			while ($currentSlot <= $this->maxSlots)
			{
				echo "<TR>";
					
					$this->drawRow($currentSlot);
					
					$currentSlot += 1;	// Nächster!
				
				echo "</TR>";
			}
			
		echo "</TABLE>";
	}
	
	// Schritt 3 - Slots pro Zeile, links nach rechts
	private function drawRow($currentRow)
	{
		$currentSlot = 1;
		
		while ($currentSlot <= $this->maxSlots)
		{
			echo "<TD>";
			
				$this->drawSlotContent($currentRow, $currentSlot);	// Inhalt der Zelle darstellen
			
			echo "</TD>";
			
			$currentSlot += 1;
		}	
	}
	
	// Schritt 4, was ist in der Position drin?
	private function drawSlotContent($currentRow, $currentSlot)
	{
		// Die 4 Ecken
		if ($currentRow == 1 && $currentSlot == 1)
		{
			echo "\\";
		}
		else if ($currentRow == 1 && $currentSlot == $this->maxSlots)
		{
			echo "/";
		}
		else if ($currentRow == $this->maxSlots && $currentSlot == 1)
		{
			echo "/";
		}
		else if ($currentRow == $this->maxSlots && $currentSlot == $this->maxSlots)
		{
			echo "\\";
		}
		
		// Linker und rechter Rand
		else if ($currentSlot == 1 || $currentSlot == $this->maxSlots)
		{
			$currentRow -= 1;	// 1-8
			
			echo $currentRow;
		}
		
		// Oberer und unterer Rand
		else if ($currentRow == 1 || $currentRow == $this->maxSlots)
		{
			// Buchstaben hier
			$currentSlot -= 1;	// 1-8
			$currentSlot += 64;	// Hoch in den ASCII Buchstaben-Bereich
			
			echo chr($currentSlot);
		}
		
		// Regulärer Inhalt. Row und Slot sind zwischen 2 und 9.
		else
		{
			// Wir tun so als gäbe es das drumherum nicht. 
			$currentRow -= 1;
			$currentSlot -= 1;
			// (Sind nun zwischen 1 und 8)
			
			$this->displayFigure($currentRow, $currentSlot);// Die eigentliche Figur auf dem Feld darstellen
		}
	}
	
	
	// Stellt die Figur dar die auf den eingegangenen Koordinaten steht
	// Gültige Koordinaten sind zwischen 1 und ($maxSlots - 2) für x und y.
	private function displayFigure($x, $y)
	{
		// Safety
		if ($x < 1 || $x > ($this->maxSlots - 2)) { return; }
		if ($y < 1 || $y > ($this->maxSlots - 2)) { return; }
		
		//$y += 64;	// Für den Fall dass ich Buchstaben anzeigen will
		echo "[".$x."/".$y."]";	// TODO Den Inhalt aus einer Datenbank ziehen und aufstellen
	}
}
?>