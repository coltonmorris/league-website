<?php
$response = Unirest::get(
  "https://community-league-of-legends.p.mashape.com/api/v1.0/EUW/summoner/getAggregatedStats/1324523",
  array(
    "X-Mashape-Authorization" => "0w0sXQjJpst1Pfjo2bUXWNAEiPBWENZe"
  ),
  null
);
echo "hello world";
echo $response;

?>
