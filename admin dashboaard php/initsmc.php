<?Php
include_once("bd.php");
$DBMXBUT = mysql_query("SELECT mxbtmnl FROM gsmcnew WHERE slogin='$login'AND spassword='$password' AND activation='1' ");
$arrayMXBUT = mysql_fetch_array($DBMXBUT) or die(mysql_error());
$DBMXCOUNT = mysql_query("SELECT mxdvs FROM gsmcnew WHERE slogin='$login'AND spassword='$password' AND activation='1' ");
$arrayMXCOUNT = mysql_fetch_array($DBMXCOUNT) or die(mysql_error());
$BtmnMX = $arrayMXBUT['mxbtmnl'];
$CntMX = $arrayMXCOUNT['mxdvs'];
?>