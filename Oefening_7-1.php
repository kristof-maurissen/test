

<!DOCTYPE HTML>
<html>
	<head><title>Achtergrondkleuren</title></head>
	<body style="text-align: center" >
            <?php
	for ($i=1; $i<7; $i++){
            ?>
            <span style="font-size: <?php print($i*10);?>px">PHP IS FANTASTISCH</span><br>
            <?php
            }
            
            for ($i=7; $i>=0; $i--){
            ?>
            <span style="font-size: <?php print($i*10);?>px">PHP IS FANTASTISCH</span><br>
            <?php
            }
            ?>
	</body>
</html>

