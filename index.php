<!DOCTYPE html>

<?php
date_default_timezone_set("Europe/Amsterdam");

echo "<h1>Goede";

if (date("H") < 6) {
	echo "n nacht!";
	$tijd = "Nacht";
} else
if (date("H") < 12) {
	echo " morgen!";
	$tijd = "Ochtend";
} else
if (date("H") < 18) {
	echo "  middag!";
	$tijd = "Middag";
} else
if (date("H") >= 18) {
	echo "n avond!";
	$tijd = "Avond";
}

echo "</h1><br><h2>Het is nu " . date("H:i:s</h2>");

?>

<html>
<head>
	<title>Goede PHP</title>
	<meta http-equiv="refresh" content="1">
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body class="<?php echo $tijd; ?>">

</body>
</html>