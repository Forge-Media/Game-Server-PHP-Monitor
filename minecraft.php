<?php
$live = "up.png";
$dead = "down.png";


$server = $_GET['server'].":";
$s_server = str_replace("::", ":", $server);
list($addr,$port)= explode (':',"$s_server");
if (empty($port)){
    $port = 90;
}
$fp = @fsockopen("196.28.18.121", 25565, $errno, $errstr, 6);
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

/* 
License: Creative Commons.
www: http://creativecommons.org/licenses/by-nc-sa/3.0/

(c)ForgeMedia

Forge Gaming Minecraft Status Script
*/
