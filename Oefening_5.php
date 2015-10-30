<?php
/*
class Oefening {
    public function getAnalyse ($getal1, $getal2) {
       if ($getal1 > $getal2) {
           return "Het eerste getal is groter dan het tweede";
       } 
       else {
           return "Het eerste getal is niet groter dan het tweede";
       }
    }
}
 
 */
?>


<?php  



class Oefening {
	public function getAnalyse($getal1, $getal2) {
                if ($getal1 > $getal2) {$antwoord = "Het eerste getal is groter dan het tweede";}
                elseif ($getal1 == $getal2) {$antwoord = "Het eerste getal is gelijk aan het tweede";}
                else {$antwoord = "Het eerste getal is niet groter dan het tweede";}
		return $antwoord;
	}
}

/*
 * class Oefening {
	public function getAnalyse($getal1, $getal2) {
		if ($getal1 > $getal2) $antwoord = "Het eerste getal is groter dan het tweede";
		elseif ($getal1 < $getal2) $antwoord = "Het eerste getal is kleiner dan het tweede";
		else $antwoord = "Het eerste getal is gelijk aan het tweede";
		return $antwoord;
	}
}
 */


?>





<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $analyse = new Oefening();            
            print ($analyse->getAnalyse(7, 7));
        ?>
    </body>
</html>

