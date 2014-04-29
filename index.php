<?php
require_once 'unirest-php/lib/Unirest.php';
include_once 'db_functions.php';

class Summoner {
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
			$response = getSummonerByName($nameOrId,$region);
			$this->name = $response->body->name;	
			$this->profileIconId = $response->body->profileIconId;
			$this->summonerId = $response->body->summonerId;
			$this->accountId = $response->body->acctId;
		}
		else{
			echo "constructing with something else<br />";
		}
	}
	public function getProfileIconLocation(){
		$profileIconLocation = 'profileIcons/'. $this->profileIconId .'.jpg';
		return $profileIconLocation;
	}

}
echo "TEST";
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
