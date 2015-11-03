<?php
session_start();
if (!isset($_SESSION["aantal"])){
   $_SESSION["aantal"] = 0;
   }  else {
        $_SESSION["aantal"]++;
    }

if ((!isset($_SESSION["getal"])) || ($_SESSION["aantal"] == 10)) {
    $_SESSION["aantal"] = 0;
    $_SESSION["getal"] = rand(1, 100);
}

?>
<!DOCTYPE HTML>
<html>
	<head><title>Willekeurige getallen</title></head>
	<body>
		<?php
print_r($_SESSION["getal"]);
		?>
	</body>
</html>

