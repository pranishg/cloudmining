<?Php
if((isset($_GET['ref'])) && (!isset($_COOKIE['ref_id'])))
setcookie("ref_id",$_GET['ref'], 0x7FFFFFFF ,'/');
ini_set('display_errors', 1);
error_reporting(1);
include_once("bd.php");
if(empty($login) and empty($password)){
require("main.html");
}
else{
$DBPress = mysql_query("SELECT pressblock FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$DBPressDoge = mysql_query("SELECT pressdoge FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$arpress = mysql_fetch_array($DBPress);
$arpressD = mysql_fetch_array($DBPressDoge);
$arPressBool = $arpress['pressblock'];
$arPressDoge = $arpressD['pressdoge'];
if ($arPressBool == "1") {
@include_once("lib/blockget.php");
}
if ($arPressDoge =="1") {
@include_once("lib/blckdogeget.php");
}
$ldate = date("d-m-Y  H:i:s");
require("dashboard.php");
}
?>