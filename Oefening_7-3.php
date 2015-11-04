<!DOCTYPE HTML>
<html>
	<head><title>Tabel</title></head>
	<body>
          <table border="1">
                <tr>
                    <td>
                    </td>
                    <?php for ($i=1; $i<=10; $i++) { ?>
                    <td>                   
                    <?php   
                    print ($i);
                     }
                    ?>                        
                    </td>
                </tr>
                            
                <tr>
                    <?php for ($i=1; $i<=10; $i++) { ?> 
                    <td>
                      <?php print ($i);?>  
                    </td>
                    <?php for ($k=1; $k<=10; $k++) {?> 
                    <td>
                        <?php print ($i*$k); ?>
                    </td>
                    <?php } ?>  
                </tr>
              <?php
               }
              ?>
            </table>  
	</body>
</html>