<?php
//ingredienten.php 
class SeizoenenArrayGenerator { 
    public function getSeizoenen() { 
        $seizoen = array(); 
        array_push($seizoen, "Winter"); 
        array_push($seizoen, "Lente"); 
        array_push($seizoen, "Zomer");
        array_push($seizoen, "Herfst"); 
        
        return $seizoen; 
        
    } 
    
    } 
    ?> 
<!DOCTYPE HTML> 
<html> 
    <head>
        <meta charset=utf-8>
        <title>Ingredienten</title>
    </head> 
    <body> 
        <pre> 
            <?php 
            $seizoen= new SeizoenenArrayGenerator(); 
            print_r($seizoen->getSeizoenen()); 
            ?>
        </pre> 
    </body> 
</html>

