
<?php
class Oefening {
	public function getArray() {
		$tab = array();
		for ($i = 1; $i <= 40; $i++) {
			$tab[$i] = 0;
		}
		for ($i = 0; $i < 100; $i++) {
			$getal = rand(1, 40);
			$tab[$getal]++;
		}
		return $tab;
	}
}
?>
<!DOCTYPE HTML>
<html>
	<head><title>Willekeurige getallen</title></head>
	<body>
		<?php
		$oef = new Oefening();
		$tab = $oef->getArray();
		/*for ($k = 1; $k <= 40; $k++)*/
                foreach ($tab as $sleutel=>$waarde){
			
            
                        print "Getal ";
                        print($sleutel);
                        print "  werd ";
                        print($waarde);
                        print " keer gegenereerd.<br> ";
			
            
			/*Getal <?php print($k);?> werd <?php print($tab[$k]);?> keer gegenereerd.<br>
			<?php*/
		}
		?>
	</body>
</html>

