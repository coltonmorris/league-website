<?php
require_once 'unirest-php/lib/Unirest.php';
function getLeagueForPlayer($summonerID,$region){
	$ary =  array("X-Mashape-Authorization" => "fq3PY66RHuHbiQxQ5UamofWTBGcAV2IM");
	$response = Unirest::get("https://community-league-of-legends.p.mashape.com/api/v1.0/$region/summoner/getLeagueForPlayer/$summonerID",$ary,null);
	//$json = file_get_contents($url);
	echo "<PRE>";
	print_r($response);
	echo "</PRE>";
	$obj = json_decode($response);
	echo "<PRE>";
	print_r($obj);
	echo "</PRE>";
	//return $obj->resultItemList;
	return $obj;
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
echo "</PRE>";

$summonerID = '38918850';
//$response = getLeagueForPlayer($summonerID,$region);

?>
<HTML>
<head>
</head>
<body>
Colton's Website!
</body>
</HTML>
