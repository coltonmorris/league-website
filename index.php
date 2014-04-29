<?php
//https://prod.api.pvp.net/api/lol/na/v1.4/summoner/by-name/kingrazy?api_key=bcab5026-6ebe-4420-80f7-aaf79cf2ac64

//https://prod.api.pvp.net/api/lol/na/v1.3/game/by-summoner/38918850/recent?api_key=bcab5026-6ebe-4420-80f7-aaf79cf2ac64

class Summoner {
	public $apiKey = 'bcab5026-6ebe-4420-80f7-aaf79cf2ac64';
	public $baseUrl = 'https://prod.api.pvp.net/api/lol/';
	public $baseGameUrl = 'https://prod.api.pvp.net/api/lol/na/v1.3/game/by-summoner/';
	public $baseSummonerUrl = 'https://prod.api.pvp.net/api/lol/na/v1.4/summoner/by-name/';
	public $name; 
	public $profileIconId;
	public $summonerId;
	public $accountId;
	public function __construct($nameOrId,$region){
		if(is_int($nameOrId)){
			echo "constructing with id<br />";
		}
		else if(is_string($nameOrId)){
			echo "constructing with name<br />";
			$this->getSummonerByName($nameOrId,$region);
		//	if ($response == false){
		//		echo "summoner does not exist";
		//	}
		//	else{
		//		$this->name = $response;
		//	}
		//	$this->profileIconId = $response->body->profileIconId;
		//	$this->summonerId = $response->body->summonerId;
		//	$this->accountId = $response->body->acctId;
		}
		else{
			echo "constructing with something else<br />";
		}
	}
	public function getProfileIconLocation(){
		$profileIconLocation = 'profileIcons/'. $this->profileIconId .'.jpg';
		return $profileIconLocation;
	}
	public function getSummonerByName($name,$region){
	//	$url = $this->baseGameUrl . $name . '?api_key='.$apiKey;
	//	echo $url;
		$url = 'https://prod.api.pvp.net/api/lol/na/v1.3/game/by-summoner/38918850/recent?api_key=bcab5026-6ebe-4420-80f7-aaf79cf2ac64';
	//	$json = file_get_contents($url);
	//	$obj = json_decode($json);
	//	echo "<PRE>";
	//	print_r($obj);
	//	echo "</PRE>";
		/return $url;
	}
}
$region = 'NA';
$summonerName = 'kingrazy';
$newSum = new Summoner($summonerName,$region);
echo $newSum->name.'<br />';
echo $newSum->profileIconId.'<br />';
echo $newSum->summonerId.'<br />';
echo $newSum->accountId.'<br />';

$summonerName = 'urban0strich';
$newSum = new Summoner($summonerName,$region);
echo $newSum->name.'<br />';
echo $newSum->profileIconId.'<br />';
echo $newSum->summonerId.'<br />';
echo $newSum->accountId.'<br />';
echo "your shit aint here dawg";
?>
<HTML>
<head>
</head>
<body>
</body>
</HTML>
