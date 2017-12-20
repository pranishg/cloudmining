<?Php
include_once("bd.php");
$DBIdentp4 = mysql_query("SELECT identbit4, adrbit4, pinb4 FROM identblc WHERE id='0' ");
$arrDbidentp4 = mysql_fetch_array($DBIdentp4);
$apiKey = $arrDbidentp4['identbit4'];
$version = 2; // API version
$pin = $arrDbidentp4['pinb4'];
$DVaddress = $arrDbidentp4['adrbit4'];
?>