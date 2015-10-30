<?php
class Rekenmachine {
    // Berekent het kwadraat van een meegegeven getal
    public function getKwadraat($getal) {
        $kwad = $getal * $getal;
        return $kwad;
    }
    /* 
     Berekent de som van twee meegegeven getallen
     * Dit is een tweede zelfgeschreven functie
     */
    public function getSom($getal1, $getal2){
        $resultaat = $getal1 + $getal2;
        return $resultaat;
    }
    // Berekent een vermenigvuldiging
    public function getProduct($getal1, $getal2){
        $resultaat = $getal1 * $getal2;
        return $resultaat;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hello world</title>       
        <style type="text/css">
        h1 { color: red; }
        </style>
    </head>
    <body>
        <h1>
            <?php
            $reken = new Rekenmachine();
            print ($reken->getKwadraat(5));           
            ?>
        </h1>
        <h1>
            <?php
            print ($reken->getSom(65, 8));
            ?>
            <br />
            <?php
            print ($reken->getSom(34, 55));
            ?>
        </h1>
            
        <h1>
            <?php
            print ($reken->getProduct(3, 7));
            ?>
        </h1>
    </body>
</html>
