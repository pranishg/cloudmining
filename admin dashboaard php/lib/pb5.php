<?Php
include_once("bd.php");
$DBIdentp5 = mysql_query("SELECT identbit5, adrbit5, pinb5 FROM identblc WHERE id='0' ");
$arrDbidentp5 = mysql_fetch_array($DBIdentp5);
$apiKey = $arrDbidentp5['identbit5'];
$version = 2; // API version
$pin = $arrDbidentp5['pinb5'];
$DVaddress = $arrDbidentp5['adrbit5'];
?>