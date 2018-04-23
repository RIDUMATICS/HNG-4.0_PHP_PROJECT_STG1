<?php
$page = $_SERVER['PHP_SELF'];
$sec = "1";
?>
<!DOCTYPE html>
<html>
<head>
	<title>HNG 4.0 INTERNSHIP</title>
	<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<section id="main">
	<h1>Welcome</h1>
	<section class="content">
	<h2><?php echo date("d : m : Y")?></h2>
	<h2><?php date_default_timezone_set('Africa/Lagos');
	echo date("h : i : sa")
	?></h2>
	</section>
	<footer>&copy <?php echo date("Y") ?> Ridumatics for HNG 4.0</footer>
</section>

</body>
</html>