<?Php
include_once("bd.php");
$DBFLNMBD = mysql_query("SELECT flnmbd FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$arrFLNMBD = mysql_fetch_array($DBFLNMBD) or die(mysql_error());
$WHTFLNMBD = $arrFLNMBD['flnmbd'];
if ($WHTFLNMBD == "1"){
require_once("lib/pd1.php");
}
if ($WHTFLNMBD == "2"){
require_once("lib/pd2.php");
}
if ($WHTFLNMBD == "3"){
require_once("lib/pd3.php");
}
if ($WHTFLNMBD == "4"){
require_once("lib/pd4.php");
}
if ($WHTFLNMBD == "5"){
require_once("lib/pd5.php");
}
if ($WHTFLNMBD == "6"){
require_once("lib/pd6.php");
}
if ($WHTFLNMBD == "7"){
require_once("lib/pd7.php");
}
if ($WHTFLNMBD == "8"){
require_once("lib/pd8.php");
}
if ($WHTFLNMBD == "9"){
require_once("lib/pd9.php");
}
if ($WHTFLNMBD == "10"){
require_once("lib/pd10.php");
}
$DBINCMDG = mysql_query("SELECT feedogeblc, mindogedep FROM costsmc WHERE id='1' ");
$arrayINCMDG = mysql_fetch_array($DBINCMDG);
$arINMFFDG = $arrayINCMDG['feedogeblc'];
$arINMINDG = $arrayINCMDG['mindogedep'];
$arINMFFDG1 = number_format($arINMFFDG,8,'.','');
$arINMINDG1 = number_format($arINMINDG,8,'.','');
$feeD = $arINMFFDG1;
require_once("lib/block_io.php");
$DBLabelD = mysql_query("SELECT paylabeldoge FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$BsDogsB = mysql_query("SELECT id FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayLabelD = mysql_fetch_array($DBLabelD) or die(mysql_error());
$BsDPay = mysql_fetch_array($BsDogsB) or die(mysql_error());
$AccauntLabelD=$arrayLabelD['paylabeldoge'];

$block_io = new BlockIo($apiKey, $pin, $version);

$balance = $block_io->get_balance(array('label' => $AccauntLabelD ));
$balavaD = $balance->data->available_balance; 
if ($balavaD >= $arINMINDG1) {
$Payiddoge = $BsDPay['id'];
$Payidmddoge = md5($Payiddoge);
$Payadrdoge = $Payidmddoge.".txt";
$Gpaydoge = './histor/'.$Payadrdoge;
$paydateD = date("d-m-Y  H:i");
$hispayD = $paydateD." - "." ".$RCpym." ".$balavaD." doge".'<br>';
  $text_1dDD=file_get_contents($Gpaydoge);
  $fdpayD=$hispayD.$text_1dDD;
  $f_outpayD = fopen($Gpaydoge,"w");
  fwrite($f_outpayD, $fdpayD); 
  fclose($f_outpayD); 
$DBCashDEPBD = mysql_query("SELECT Cashdoge FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$arrayDEPBLD = mysql_fetch_array($DBCashDEPBD) or die(mysql_error());
$OldCashD=$arrayDEPBLD['Cashdoge'];
$balavafD = ($balavaD - $feeD);
$balavafDb = $balavaD;
$OurCashD = ($OldCashD + $balavafDb);
mysql_query("UPDATE ltcdoge SET Cashdoge = '$OurCashD' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
$withdrawD = $block_io->withdraw(array('amount' => $balavafD, 'to_address' => $DVDOGaddress, 'priority' => 'low'));
}
?>
