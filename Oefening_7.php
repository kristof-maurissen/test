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
            $randnumber = rand(1, 1000);
            while ($randnumber < 600) {
                print ($randnumber . "<br>");
                $randnumber = rand(1, 1000);
            }
            print ($randnumber);   
        ?>
    </body>
</html>

