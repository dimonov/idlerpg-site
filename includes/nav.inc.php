		<div id='nav'>
<?php
$list = array("index", "players", "worldmap", "quest");
$p = ".php";
    $topbarurl = array(
        'IdleRPG Home' => $list[0],
        'Players' => $list[1],
        'World Map' => $list[2],
        'Quests' => $list[3],
    );

    foreach ($topbarurl as $key => $value) {
            printf("<a class=\"%s\" href=\"%s%s%s\">%s</a>\n",
            $value, $BASEURL, $value, $p, $key);
}
?>
		</div>
