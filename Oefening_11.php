<?php

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $getal = rand(1, 10);
        $gok =$_GET["mijngok"];
        print ("Getal =" .$getal . "<br>");
        print ("mijn gok =" . $gok . "<br><br>");
        
        if ($getal == $gok) {
            print ("u heeft juist gegokt");
           } else {
                print ("foute gok");
            }
        
                
        ?>
    </body>
</html>

