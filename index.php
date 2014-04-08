<?php
require_once 'unirest-php/lib/Unirest.php';
$ary =  array("X-Mashape-Authorization" => "fq3PY66RHuHbiQxQ5UamofWTBGcAV2IM");
$summonerID = '38918850';
$region = 'NA';
$response = Unirest::get("https://community-league-of-legends.p.mashape.com/api/v1.0/$region/summoner/getLeagueForPlayer/$summonerID",$ary,null);

echo "<PRE>";
print_r($response);
echo "hello world";
echo "</PRE>";
?>
<HTML>
<head>
</head>
<body>
Colton's Website!
</body>
</HTML>
