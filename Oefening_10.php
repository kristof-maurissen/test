<?php
    class Oefening {
        public function getSom ($getal1, $getal2){
            $som = ($getal1 + $getal2);
            return $som;
        }
        public function getVerschil ($getal1, $getal2){
            $som = ($getal1 - $getal2);
            return $som;
        }
        public function getProduct ($getal1, $getal2){
            $som = ($getal1 * $getal2);
            return $som;
        }
        public function getquotient($getal1, $getal2){
            $som = ($getal1 / $getal2);
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
        <?php
            $uitkomst = new Oefening();
            if ($_GET["bewerking"] == 1) {
              print $uitkomst->getSom($_GET["getal1"], $_GET["getal2"]);  
            } elseif ($_GET["bewerking"] == 2) {
              print $uitkomst->getVerschil($_GET["getal1"], $_GET["getal2"]); 
            } elseif ($_GET["bewerking"] == 3) {
              print $uitkomst->getProduct($_GET["getal1"], $_GET["getal2"]); 
            } elseif ($_GET["bewerking"] == 4) {
              print $uitkomst->getquotient ($_GET["getal1"], $_GET["getal2"]);
            }
        ?>
    </body>
</html>

