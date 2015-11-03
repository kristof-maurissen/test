<?php
session_start();
if (!isset($_SESSION["teller"]) || $_SESSION["teller"] == 20) {
	$_SESSION["teller"] = 0;
} else {
	$_SESSION["teller"]++;
}
?>
<!DOCTYPE HTML>
<html>
	<head><title>Oefening</title></head>
	<body>
		<?php
		print($_SESSION["teller"]);
		?>
	</body>
</html>

