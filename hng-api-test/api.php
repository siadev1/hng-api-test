<?php
$link= "https://github.com/siadev1/hng-api-test.git";
// Get the query parameters
$slackName = isset($_GET['slack_name']) ? $_GET['slack_name'] : "";
$track = isset($_GET['track']) ? $_GET['track'] : "";


// Get the current day and UTC time
$Day = date("l");
$UTCTime = gmdate("Y-m-d\TH:i:s\Z");
    $status = 200;

// Construct the JSON response
$response = array(
    "slack_name" => $slackName,
    "current_day" => $Day,
    "utc_time" => $UTCTime,
    "track" => $track,
    "github_file_url" => $link,
    "github_repo_url" =>$link,
    "status_code" => 200
);
$get= json_encode($response);
// implode(json_decode($get,true));

// Set JSON content type and send response
header("Content-Type: application/json");
echo json_encode($response,JSON_UNESCAPED_SLASHES);

 ?>
