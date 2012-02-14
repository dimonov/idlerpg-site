<!DOCTYPE html>
<html lang='en'>

<head>
<?php
$ds_title = "DB-style Player Listing";
include "./includes/head.inc.php";
?>
</head>

<body id='paste'>

	<div id='container'>
		<div id='header'>
			<a href='http://www.darkscience.ws' id='logo'></a>
			<div id='quote'>
			<?php
			include "./includes/rand_quote.inc.php";
			printf("%s", quote());
			?>
			</div>
		</div>
		<?php
		include './includes/nav.inc.php';
		?>

		<div id='main'>
			<div class='lib'>
			<?php include "db.inc.php"; ?>
			</div>
		</div>
	</div>
</body>
</html>


