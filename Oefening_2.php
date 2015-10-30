<?php
class Vergelijking {
    public function  getSomIsStriktPositief($getal1, $getal2){
      $antw =(($getal1 + $getal2) > 0);
      
      if ($antw == TRUE) {
          return "JA";
      }
      else {
      return "NEEN";}
    }
    public function getSomIsStriktNegatief($getal1, $getal2, $getal3){
        $antw = (($getal1 + $getal2 + $getal3)< 0);
       if ($antw == TRUE) {
          return "JA";
      }
      else {
      return "NEEN";} 
    }
}
$aantal = 2;
$gratisThuisbezorging = false;
$prijs = 6.5;

if ($aantal * $prijs > 10.0) {
    $gratisThuisbezorging = true;
}
if ($gratisThuisbezorging) {
    print("Uw pizza wordt gratis thuisbezorgd.");
}
else {
    print("Thuislevering kost 1 euro.");
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
             $vergl = new Vergelijking();
            print ($vergl->getSomIsStriktPositief(5, -9));         
            ?>
        </h1>
        <h1>
            <?php
            
            print ($vergl->getSomIsStriktNegatief(-5, -9, 2));           
            ?>
        </h1>
        
    </body>
</html>

