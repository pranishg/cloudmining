<?Php
include_once("bd.php");
$DBIdentpd4 = mysql_query("SELECT identdoge4, adrdoge4, pinb4 FROM identblc WHERE id='0' ");
$arrDbidentpd4 = mysql_fetch_array($DBIdentpd4);
$apiKey = $arrDbidentpd4['identdoge4'];
$version = 2; // API version
$pin = $arrDbidentpd4['pinb4'];
$DVaddress = $arrDbidentpd4['adrdoge4'];
?>