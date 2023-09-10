<?php
header("Content-Type: application/json");
// Get the query parameters
$slackName = isset($_GET['slack_name']) ? $_GET['slack_name'] : "";
$track = isset($_GET['track']) ? $_GET['track'] : "";
$url= "http://localhost/api/api.php?slack_name=$slackName&track=$track";
$responsed=file_get_contents($url);

echo $responsed;

// ?>
