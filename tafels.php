<?php
 $getal = $_GET["grondgetal"];
?>

<!DOCTYPE HTML>
<html>
	<head><title>Tafels</title></head>
	<body>
          <table border="1">
              <thead >
                  <tr>
                      <th colspan="2">De tafel van <?php print ($getal); ?></th>
                  </tr>
              </thead>
            <tbody>
                <?php
                for ($i=1; $i<=10; $i++) {
                    
               ?>
                <tr>
                    <td>
                       <?php print ($i);?> maal <?php print ($getal); ?>
                        
                    </td>
               
                
                
                    <td>
                        
                        <?php print ($i*$getal); ?>
                    </td>
                </tr>
                <?php
                 } 
              ?>
            </tbody>
        </table>  
	</body>
</html>
