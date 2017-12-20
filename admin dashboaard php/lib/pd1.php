<?Php
include_once("bd.php");
$DBIdentpd1 = mysql_query("SELECT identdoge1, adrdoge1, pinb1 FROM identblc WHERE id='0' ");
$arrDbidentpd1 = mysql_fetch_array($DBIdentpd1);
$apiKey = $arrDbidentpd1['identdoge1'];
$version = 2; // API version
$pin = $arrDbidentpd1['pinb1'];
$DVaddress = $arrDbidentpd1['adrdoge1'];
?>
