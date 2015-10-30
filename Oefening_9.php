<?php
class Oefening {
	public function getSom($getal1, $getal2) {
		$som = $getal1 + $getal2;
		return $som;
	}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>                      
            <?php
            /*
            $getal1 = $_GET["getal1"];
            $getal2 = $_GET["getal2"];
            $resultaat = ($getal1 + $getal2);
            print $resultaat;
            */
            ?>
            </h1>
            <h1>
			<?php /*
			$oef = new Oefening();
			$resultaat = $oef->getSom($_GET["getal1"], $_GET["getal2"]);
			print($resultaat);
			*/?>
		</h1>
            
         <?php   
      print ($_POST["naam"]);
        ?>
       <!-- . Het is vandaag -->
            <?php
               // print ($_GET["dag"]);
            ?>
            
            
        
    </body>
</html>
