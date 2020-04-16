<?php 
echo ('Hello <br>');
$ip = $_SERVER['REMOTE_ADDR'];

$ip_whitelist = ["::1", "198.23.123"];

if (in_array($ip, $ip_whitelist))
{
echo("adresse autorisée");
} else{
echo("erreur 403");
}

?>