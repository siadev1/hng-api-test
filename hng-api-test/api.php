<?php
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
    "github_file_url" => "https://github.com/siadev1/hng-api-test.git",
    "github_repo_url" => "https://github.com/username/repo",
    "status_code" => 200
);

// Set JSON content type and send response
header("Content-Type: application/json");
echo json_encode($response);
?>