<?Php
include_once("bd.php");
$DBIdentp1 = mysql_query("SELECT identbit1, adrbit1, pinb1 FROM identblc WHERE id='0' ");
$arrDbidentp1 = mysql_fetch_array($DBIdentp1);
$apiKey = $arrDbidentp1['identbit1'];
$version = 2; // API version
$pin = $arrDbidentp1['pinb1'];
$DVaddress = $arrDbidentp1['adrbit1'];
?>