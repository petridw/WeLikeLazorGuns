<html>
<head>
<title>Current Dota 2 Players</title>
</head>
<body>
<?php
$json = file_get_contents("http://api.steampowered.com/ISteamUserStats/GetNumberOfCurrentPlayers/v1?key=D4667C8EFE74F4FA70DC5EC2CBDE64D8&appid=570");

$jsonIterator = new RecursiveIteratorIterator(
	new RecursiveArrayIterator(json_decode($json, TRUE)),
	RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
	if($key == "player_count"){echo $val;}
}

?>
</body>
</html>
