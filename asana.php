<?php
/**
 * Created by IntelliJ IDEA.
 * User: andre
 * Date: 3/18/16
 * Time: 11:27 PM
 */

// secrets.php is where the API key for ASANA goes
include(dirname(__FILE__).'secrets.php')

$url = "https://app.asana.com/api/1.0/projects/46668990078480/tasks?opt_pretty";
$curl = curl_init($url);
// TODO: move api key below to untracked file secrets.php
$headers = array(
    "Authorization: Bearer "
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($curl);
curl_close($curl);

print_r($result, TRUE);