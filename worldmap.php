<!DOCTYPE html>
<html lang='en'>

<head>
<?php
$ds_title = "World Map";
include "./includes/head.inc.php";
include "config.php";
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
			<div class='sec'>
<h1>World Map</h1>
<h2>[offline users are red, online users are blue]</h2>


<div id="map">
    <img src="makeworldmap.php" alt="IdleRPG World Map" title="IdleRPG World Map" usemap="#world" border="0" />
    <map id="world" name="world">
<?php 
    $file = fopen($irpg_db,"r");
    fgets($file);
    while($location=fgets($file)) {
        list($who,,,,,,,,,,$x,$y) = explode("\t",trim($location));
        print "        <area shape=\"circle\" coords=\"".$x.",".$y.",4\" alt=\"".htmlentities($who).
              "\" href=\"playerview.php?player=".urlencode($who)."\" title=\"".htmlentities($who)."\" />\n";
    }
    fclose($file);
?>
    </map>
</div>

<?php include("footer.php");?>
			</div>
		</div>
	</div>
</body>
</html>
