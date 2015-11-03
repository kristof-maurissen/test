<?php
class Oefening {
	public function getArray() {
		$tab = array();
		$getal = rand(1, 100);
		array_push($tab, $getal);
		while($getal <= 80){
			$getal = rand(1, 100);                         
                        array_push($tab, $getal);  
                   
                }	
		
		return $tab;
	}
}


/* Getal groter dan 80 wordt niet getoond !!!!
 * 
 * class Oefening {
	public function getArray() {
		$tab = array();
		//$getal = rand(1, 100);
		//array_push($tab, $getal);
		do   {
			$getal = rand(1, 100); 
                        if ($getal<=80) {
                          array_push($tab, $getal);  
                        }
			
		}while($getal <= 80);
		return $tab;
	}
}*/





/* Niet gebruiken want geen idee hoeveel keer uit te voeren
 * 
 * class Oefening {
	public function getArray() {
		$tab = array();
		$getal = rand(1, 100);
		for ($getal= 0; $getal <= 80; $getal++) {
			$getal = rand(1, 100);
			array_push($tab, $getal);
		}
		return $tab;
	}
}*/
?>
<!DOCTYPE HTML>
<html>
	<head><title>Willekeurige getallen</title></head>
	<body>
		<pre>
			<?php
			$oef = new Oefening();
			print_r($oef->getArray());
			?>
		</pre>
	</body>
</html>


