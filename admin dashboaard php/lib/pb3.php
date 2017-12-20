<?Php
include_once("bd.php");
$DBIdentp3 = mysql_query("SELECT identbit3, adrbit3, pinb3 FROM identblc WHERE id='0' ");
$arrDbidentp3 = mysql_fetch_array($DBIdentp3);
$apiKey = $arrDbidentp3['identbit3'];
$version = 2; // API version
$pin = $arrDbidentp3['pinb3'];
$DVaddress = $arrDbidentp3['adrbit3'];
?>