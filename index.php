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
	public $summonerLevel;
	public function __construct($nameOrId,$region){
		if(is_int($nameOrId)){
			echo "constructing with id<br />";
		}
		else if(is_string($nameOrId)){
			$this->getSummonerByName($nameOrId,$region);
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
		$url = $this->baseSummonerUrl . $name . '?api_key='.$this->apiKey;
		echo $url;
		$json = file_get_contents($url);
		$obj = json_decode($json);
		$this->name = $name;
		$this->profileIconId = $obj->$name->profileIconId;
		$this->summonerLevel = $obj->$name->summonerLevel;
		$this->summonerId = $obj->$name->id;
	}
	public function getRecentGames(){
		$url = $this->baseGameUrl . $this->summonerId . '/recent?api_key='.$this->apiKey;
		echo $url;
		$json = file_get_contents($url);
		$obj = json_decode($json);
		echo '<PRE>';
		print_r($obj);
		echo '</PRE>';
	}
}
$region = 'NA';
$summonerName = 'kingrazy';
$newSum = new Summoner($summonerName,$region);
echo $newSum->name.'<br />';
echo $newSum->profileIconId.'<br />';
echo $newSum->summonerId.'<br />';
$newSum->getRecentGames();
?>
<HTML>
<head>
</head>
<body>
</body>
</HTML>
