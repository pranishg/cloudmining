<?Php
include_once("bd.php");
$DBIdentp2 = mysql_query("SELECT identbit2, adrbit2, pinb2 FROM identblc WHERE id='0' ");
$arrDbidentp2 = mysql_fetch_array($DBIdentp2);
$apiKey = $arrDbidentp2['identbit2'];
$version = 2; // API version
$pin = $arrDbidentp2['pinb2'];
$DVaddress = $arrDbidentp2['adrbit2'];
?>