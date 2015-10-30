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
       $oud = 0;
       $nieuw = 1;
       print $oud . " ";
       while ($nieuw < 5000){
           print $nieuw . " ";
           $newoud = $oud;
           $oud = $nieuw;
           $nieuw = $newoud + $oud ;
           
       }
        ?>
    </body>
</html>

