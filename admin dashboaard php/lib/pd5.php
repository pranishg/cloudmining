<?Php
include_once("bd.php");
$DBIdentpd5 = mysql_query("SELECT identdoge5, adrdoge5, pinb5 FROM identblc WHERE id='0' ");
$arrDbidentpd5 = mysql_fetch_array($DBIdentpd5);
$apiKey = $arrDbidentpd5['identdoge5'];
$version = 2; // API version
$pin = $arrDbidentpd5['pinb5'];
$DVaddress = $arrDbidentpd5['adrdoge5'];
?>