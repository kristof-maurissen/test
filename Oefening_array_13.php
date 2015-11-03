<?php
class GetArrayGenerator {
    public function getArray () {
        $tab = array();
        $tab[0]=0;
        for ($i=1; $i<50; $i++) {
          $tab[$i] = ($tab[$i-1] + $i);  
        }
        return $tab;
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
        
        $arrGen= new GetArrayGenerator ();
        print_r($arrGen->getArray());
                
        ?>
    </body>
</html>
