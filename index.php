<?php
require_once 'unirest-php/lib/Unirest.php';
function getLeagueForPlayer($summonerID,$region){
	$ary =  array("X-Mashape-Authorization" => "fq3PY66RHuHbiQxQ5UamofWTBGcAV2IM");
	$response = Unirest::get("https://community-league-of-legends.p.mashape.com/api/v1.0/$region/summoner/getLeagueForPlayer/$summonerID",$ary,null);
	return $response;
}
function getSummonerByName($summonerName,$region){
	$ary =  array("X-Mashape-Authorization" => "fq3PY66RHuHbiQxQ5UamofWTBGcAV2IM");
	$response = Unirest::get("https://community-league-of-legends.p.mashape.com/api/v1.0/$region/summoner/getSummonerByName/$summonerName",$ary,null);
	return $response;
}

$region = 'NA';
$summonerName = 'kingrazy';
$response = getSummonerByName($summonerName,$region);

echo "<PRE>";
print_r($response);
echo "hello world";
echo "</PRE>";

$summonerID = '38918850';
getLeagueForPlayer($summonerID,$region);
?>
<HTML>
<head>
</head>
<body>
Colton's Website!
</body>
</HTML>
