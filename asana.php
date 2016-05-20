<?php
// secrets.php is where the API key for ASANA goes
include('secrets.php');

$asana_projects_url = "https://app.asana.com/api/1.0/projects";
$curl = curl_init($asana_projects_url);
$headers = array(
    "Authorization: Bearer ".$access_token
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$projects_result = curl_exec($curl);
curl_close($curl);
