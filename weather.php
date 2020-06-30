<?php

define('API_KEY', 'WdWPAcdsDyYpm37aNC7N5bZADLW1qiKa');

$apikey = API_KEY;

$user_ip = '27.67.17.169';

$location = json_decode(file_get_contents("http://dataservice.accuweather.com/locations/v1/cities/ipaddress?apikey={$apikey}&q={$user_ip}"), true);

$loc_key = $location['Key'];

$weather = json_decode(file_get_contents("http://dataservice.accuweather.com/currentconditions/v1/{$loc_key}?apikey={$apikey}"), TRUE);


$city = $location['EnglishName'];
$country = $location['Country']['EnglishName'];
$dt = $weather[0]['LocalObservationDateTime'];
$temp = $weather[0]['Temperature']['Metric']['Value'];
$img = $weather[0]['WeatherIcon'];
if ($img < 10) {
    $img = "0{$img}";
}

echo '<p><br />Welcome, guest!</p><p>';
echo $city . ', ' . $country . "<br />";
echo substr($dt, 0, 10) . " " . substr($dt, 11, 8);
echo "</p><p>Temperature: {$temp} C<br />";
echo "<img src='https://developer.accuweather.com/sites/default/files/{$img}-s.png'>";
?>