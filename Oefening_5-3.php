
<?php
	$achtergrondkleur = "white";
	if (isset($_POST["kleur"])) {
		setcookie("achtergrondkleur", $_POST["kleur"], time() + 24 * 3600);
		$achtergrondkleur = $_POST["kleur"];
	} elseif (isset($_COOKIE["achtergrondkleur"])) {
		$achtergrondkleur = $_COOKIE["achtergrondkleur"];
	}
?>
<!DOCTYPE HTML>
<html>
	<head><title>Achtergrondkleuren</title></head>
	<body style="background-color: <?php print($achtergrondkleur);?>">
            <form action="Oefening_5-3.php" method="post">
			Kies uw favoriete achtergrondkleur:
			<select name="kleur">
				<option value="red">Rood</option>
				<option value="blue">Blauw</option>
				<option value="green">Groen</option>
				<option value="yellow">Geel</option>
				<option value="white">Wit</option>
			</select>
			<input type="submit" value="OK">
		</form>
            <a href="Oefening_5-3.php">Pagina vernieuwen</a>
	</body>
</html

