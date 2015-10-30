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
        $willekeurig = rand(100, 200);
        for ($teller = 1; $teller <= $willekeurig ; $teller = $teller + 1) {
        print($teller . "<br>");
        }
       
        ?>
    </body>
</html>
