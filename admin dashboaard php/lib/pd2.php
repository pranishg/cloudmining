<?Php
include_once("bd.php");
$DBIdentpd2 = mysql_query("SELECT identdoge2, adrdoge2, pinb2 FROM identblc WHERE id='0' ");
$arrDbidentpd2 = mysql_fetch_array($DBIdentpd2);
$apiKey = $arrDbidentpd2['identdoge2'];
$version = 2; // API version
$pin = $arrDbidentpd2['pinb2'];
$DVaddress = $arrDbidentpd2['adrdoge2'];
?>