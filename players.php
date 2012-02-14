<!DOCTYPE html>
<html lang='en'>

<head>
<?php
include "config.php";
include "commonfunctions.php";
$ds_title = "Player Info";
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
			<div class='sec'>
  <h1>Players</h1>
  <h2>Pick a player to view</h2>
  <p class="small">[gray=offline]</p>
  <ol>
<?php
    $file = file($irpg_db);
    unset($file[0]);
    usort($file, 'cmp_level_desc');
    foreach ($file as $line) {
        list($user,,,$level,$class,$secs,,,$online) = explode("\t",trim($line));

        $class = htmlentities($class);
        $next_level = duration($secs);

        print "    <li".(!$online?" class=\"offline\"":"")."><a".
              (!$online?" class=\"offline\"":"").
              " href=\"playerview.php?player=".urlencode($user).
              "\">".htmlentities($user).
              "</a>, the level $level $class. Next level in $next_level.</li>\n";

    }
?>
  </ol>
  <p>For a script to view player stats from a terminal, try <a
  href="idlerpg-adv.txt">this</a> perl script.</p>

  <p>See player stats in <a href="db.php">table format</a>.</p>

<?php include("footer.php")?>
			</div>
		</div>
	</div>
</body>
</html>


