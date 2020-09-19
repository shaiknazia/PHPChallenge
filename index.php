<?php
echo "<link rel='stylesheet' type='text/css' href='main.css'>"; //external style sheet link

$curl = curl_init(); //this is going to be data type curl resource

$url = "https://jsonplaceholder.typicode.com/photos";
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //storing data in a variable

$result = curl_exec($curl);
preg_match_all('!https://via.placeholder.com/600/[^\s]*!', $result, $matches);

// print_r($matches);
$images = array_values($matches[0]);
echo "<ul>";
    echo "<li>";
for ($i = 0; $i < 20; $i++) {
    echo "<img src='$images[$i]'>"; //looping through 20 images
};
    echo "</li>";
    echo "</ul>";

curl_close($curl);


?>