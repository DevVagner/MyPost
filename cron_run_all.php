<?php

require "config.php";
defined('INDEX_PAGE') OR define('INDEX_PAGE', "");
$url = INDEX_PAGE ==  "" ? BASE_URL : BASE_URL.INDEX_PAGE."/";

$services = array(
    "schedules/schedule_run",
    "join_groups/schedule_run",
    "invite_join_groups/schedule_run",
    "comments/schedule_run",
    "autolike/schedule_run",
);

foreach($services as $service){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url . $service); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 1);
    echo curl_exec($ch);
    curl_close($ch);
}

?>