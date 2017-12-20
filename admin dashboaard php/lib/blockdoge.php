<?Php
include_once("bd.php");
$DBINPD = mysql_query("SELECT identdoge FROM costsmc WHERE id='1' ");
$arrayINPD = mysql_fetch_array($DBINPD);
$arINPD = $arrayINPD['identdoge'];
if ($arINPD == "1"){
require_once("pd1.php");
}
if ($arINPD == "2"){
require_once("pd2.php");
}
if ($arINPD == "3"){
require_once("pd3.php");
}
if ($arINPD == "4"){
require_once("pd4.php");
}
if ($arINPD == "5"){
require_once("pd5.php");
}
if ($arINPD == "6"){
require_once("pd6.php");
}
if ($arINPD == "7"){
require_once("pd7.php");
}
if ($arINPD == "8"){
require_once("pd8.php");
}
if ($arINPD == "9"){
require_once("pd9.php");
}
if ($arINPD == "10"){
require_once("pd10.php");
}
require_once("lib/block_io.php");
$block_io = new BlockIo($apiKey, $pin, $version);

$DepDG = mysql_query("SELECT dogedeposit, pressdoge FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$arDEPDG = mysql_fetch_array($DepDG) or die(mysql_error());
$MdepDG = $arDEPDG['pressdoge'];
$MadrDg = $arDEPDG['dogedeposit'];
if ($MdepDG == "1") {
echo "<script>alert(\" ".$Yhvadr." ".$MadrDg."\");</script>";
 header('Refresh: 1; URL=buyhash.php');
exit;
}
else {
mysql_query("UPDATE ltcdoge SET flnmbd = '$arINPD' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");    
$newAddressInfo = $block_io->get_new_address();
$payTo =  $newAddressInfo->data->address;
$payLabel = $newAddressInfo->data->label;
mysql_query("UPDATE ltcdoge SET dogedeposit = '$payTo' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");	
mysql_query("UPDATE ltcdoge SET paylabeldoge = '$payLabel' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");	
}
?>
