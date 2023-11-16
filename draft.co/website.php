<?php

include_once "content.php";

$ihost = $_SERVER["HTTP_HOST"];
if ($_SERVER['HTTP_HOST']=='localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
    $host = "http://".$ihost;
} else {
    $host = "https://".$ihost;
}

$namehost = 'Verblio';