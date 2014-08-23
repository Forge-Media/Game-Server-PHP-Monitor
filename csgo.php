<?php

/*
License: Creative Commons. (http://creativecommons.org/licenses/by-nc-sa/3.0/)
csgo.php
Forge Gaming CSGO Status Script
by Jeremy Paton - Forge Media
*/

$live = "images/up.png";
$dead = "images/down.png";


$server = $_GET['server'].":";
$s_server = str_replace("::", ":", $server);
list($addr,$port)= explode (':',"$s_server");
if (empty($port)){
    $port = 90;
}

#Settings: CSGO Server IP & Port
$fp = @fsockopen("127.0.0.1", 27015, $errno, $errstr, 6);
             if (!$fp){
               header("Location: $dead");
                }
             else {
                   header("Location: $live");             
          }
function server($addr){
         if(strstr($addr,"/")){$addr = substr($addr, 0, strpos($addr, "/"));}
         return $addr;
}
?>