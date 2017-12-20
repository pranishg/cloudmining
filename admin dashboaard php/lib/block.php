<?Php
include_once("bd.php");
$DBINPB = mysql_query("SELECT identbit FROM costsmc WHERE id='1' ");
$arrayINPB = mysql_fetch_array($DBINPB);
$arINPB = $arrayINPB['identbit'];
if ($arINPB == "1"){
require_once("pb1.php");
}
if ($arINPB == "2"){
require_once("pb2.php");
}
if ($arINPB == "3"){
require_once("pb3.php");
}
if ($arINPB == "4"){
require_once("pb4.php");
}
if ($arINPB == "5"){
require_once("pb5.php");
}
if ($arINPB == "6"){
require_once("pb6.php");
}
if ($arINPB == "7"){
require_once("pb7.php");
}
if ($arINPB == "8"){
require_once("pb8.php");
}
if ($arINPB == "9"){
require_once("pb9.php");
}
if ($arINPB == "10"){
require_once("pb10.php");
}
require_once("lib/block_io.php");
$block_io = new BlockIo($apiKey, $pin, $version);
//---------------------------------------------
$DBDeprite = mysql_query("SELECT deposit, pressblock FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayDEPrite = mysql_fetch_array($DBDeprite) or die(mysql_error());
$Mydepr = $arrayDEPrite['pressblock'];
$MdepBit = $arrayDEPrite['deposit'];
//---------------------------------------------
if ($Mydepr == "1") {
echo "<script>alert(\" ".$Yhvadr." ".$MdepBit."\");</script>";
 header("Refresh: 1; url=buyhash.php");
exit;
}
else {
//---------------------------------------------
mysql_query("UPDATE gusers SET flnmb = '$arINPB' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
$newAddressInfo = $block_io->get_new_address();
$payTo =  $newAddressInfo->data->address;
$payLabel = $newAddressInfo->data->label;
mysql_query("UPDATE gusers SET deposit = '$payTo' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");	
mysql_query("UPDATE gusers SET paylabel = '$payLabel' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");	
}
?>