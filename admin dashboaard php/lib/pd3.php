<?Php
include_once("bd.php");
$DBIdentpd3 = mysql_query("SELECT identdoge3, adrdoge3, pinb3 FROM identblc WHERE id='0' ");
$arrDbidentpd3 = mysql_fetch_array($DBIdentpd3);
$apiKey = $arrDbidentpd3['identdoge3'];
$version = 2; // API version
$pin = $arrDbidentpd3['pinb3'];
$DVaddress = $arrDbidentpd3['adrdoge3'];
?>