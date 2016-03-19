<?php
/**
 * Created by IntelliJ IDEA.
 * User: andre
 * Date: 3/18/16
 * Time: 11:27 PM
 */

// secrets.php is where the API key for ASANA goes
include('secrets.php');

$asana_api_url = "https://app.asana.com/api/1.0/projects/46668990078480/tasks?opt_pretty";
$curl = curl_init($asana_api_url);
$headers = array(
    "Authorization: Bearer ".$access_token
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($curl);
curl_close($curl);

print_r($result, TRUE);