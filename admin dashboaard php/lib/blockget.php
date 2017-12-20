<?Php
include_once("bd.php");
$DBFLNMB = mysql_query("SELECT flnmb FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrFLNMB = mysql_fetch_array($DBFLNMB) or die(mysql_error());
$WHTFLNMB = $arrFLNMB['flnmb'];
if ($WHTFLNMB == "1"){
require_once("lib/pb1.php");
}
if ($WHTFLNMB == "2"){
require_once("lib/pb2.php");
}
if ($WHTFLNMB == "3"){
require_once("lib/pb3.php");
}
if ($WHTFLNMB == "4"){
require_once("lib/pb4.php");
}
if ($WHTFLNMB == "5"){
require_once("lib/pb5.php");
}
if ($WHTFLNMB == "6"){
require_once("lib/pb6.php");
}
if ($WHTFLNMB == "7"){
require_once("lib/pb7.php");
}
if ($WHTFLNMB == "8"){
require_once("lib/pb8.php");
}
if ($WHTFLNMB == "9"){
require_once("lib/pb9.php");
}
if ($WHTFLNMB == "10"){
require_once("lib/pb10.php");
}
$DBINCM = mysql_query("SELECT feebitblc, minbitdep FROM costsmc WHERE id='1' ");
$arrayINCM = mysql_fetch_array($DBINCM);
$arINMFF = $arrayINCM['feebitblc'];
$arINMIN = $arrayINCM['minbitdep'];
$arINMFF1 = number_format($arINMFF,8,'.','');
$arINMIN1 = number_format($arINMIN,8,'.','');
$fee = $arINMFF1;
$fee1 = number_format(($arINMFF1 + "0.00010000"),8,'.','');
$fee2 = number_format(($arINMFF1 + "0.00020000"),8,'.','');
$fee3 = number_format(($arINMFF1 + "0.00030000"),8,'.','');
$fee4 = number_format(($arINMFF1 + "0.00040000"),8,'.','');
require_once("lib/block_io.php");
$DBLabel = mysql_query("SELECT paylabel FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$BsDogsB = mysql_query("SELECT id FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayLabel = mysql_fetch_array($DBLabel) or die(mysql_error());
$BsDPayB = mysql_fetch_array($BsDogsB) or die(mysql_error());
$AccauntLabel=$arrayLabel['paylabel'];

$block_io = new BlockIo($apiKey, $pin, $version);

$amount = 100000;
$amount = $amount / 100000000;

$balance = $block_io->get_balance(array('label' => $AccauntLabel ));
$balava = $balance->data->available_balance;
if ($balava >= $arINMIN1) {
$PayiddogeB = $BsDPayB[id];
$PayidmddogeB = md5($PayiddogeB);
$PayadrdogeB = $PayidmddogeB.".txt";
$GpaydogeB = './histor/'.$PayadrdogeB;
$paydateB = date("d-m-Y  H:i");
$hispayB = $paydateB." - "." ".$RCpym." ".$balava." btc".'<br>';
  $text_1dBB=file_get_contents($GpaydogeB);
  $fdpayB=$hispayB.$text_1dBB;
  $f_outpayB = fopen($GpaydogeB,"w");
  fwrite($f_outpayB, $fdpayB);
  fclose($f_outpayB);
$DBCashDEPB = mysql_query("SELECT Cash FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayDEPBL = mysql_fetch_array($DBCashDEPB) or die(mysql_error());
$OldCash = $arrayDEPBL['Cash'];
$balavafs = ($balava - $fee);
$balavaC = $balava;
$OurCash = ($OldCash + $balavaC);
mysql_query("UPDATE gusers SET Cash = '$OurCash' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
$withdraw = $block_io->withdraw(array('amount' => $balavafs, 'to_address' => $DVaddress, 'priority' => 'low'));
//---------------------------
require_once("lib/block_io.php");
$DBLabel1 = mysql_query("SELECT paylabel FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$BsDogsB1 = mysql_query("SELECT id FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayLabel1 = mysql_fetch_array($DBLabel1) or die(mysql_error());
$BsDPayB1 = mysql_fetch_array($BsDogsB1) or die(mysql_error());
$AccauntLabel1=$arrayLabel1['paylabel'];

$block_io = new BlockIo($apiKey, $pin, $version);

$amount = 100000;
$amount = $amount / 100000000;

$balance1 = $block_io->get_balance(array('label' => $AccauntLabel1 ));
$balava1 = $balance1->data->available_balance;
if ($balava1 >= $arINMIN1){
$PayiddogeB1 = $BsDPayB1['id'];
$PayidmddogeB1 = md5($PayiddogeB1);
$PayadrdogeB1 = $PayidmddogeB1.".txt";
$GpaydogeB1 = './histor/'.$PayadrdogeB1;
$paydateB1 = date("d-m-Y  H:i");
$hispayB1 = $paydateB1." - "." ".$RCpym." ".$balava1." btc".'<br>';
  $text_1dBB1=file_get_contents($GpaydogeB1);
  $fdpayB1=$hispayB1.$text_1dBB1;
  $f_outpayB1 = fopen($GpaydogeB1,"w");
  fwrite($f_outpayB1, $fdpayB1);
  fclose($f_outpayB1);
$DBCashDEPB1 = mysql_query("SELECT Cash FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayDEPBL1 = mysql_fetch_array($DBCashDEPB1) or die(mysql_error());
$OldCash1 = $arrayDEPBL1['Cash'];
$balavafs1 = ($balava1 - $fee1);
$balavaC1 = $balava1;
$OurCash1 = ($OldCash1 + $balavaC1);
mysql_query("UPDATE gusers SET Cash = '$OurCash1' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
$withdraw1 = $block_io->withdraw(array('amount' => $balavafs1, 'to_address' => $DVaddress, 'priority' => 'low'));
}
//---------------------------
//---------------------------
require_once("lib/block_io.php");
$DBLabel2 = mysql_query("SELECT paylabel FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$BsDogsB2 = mysql_query("SELECT id FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayLabel2 = mysql_fetch_array($DBLabel2) or die(mysql_error());
$BsDPayB2 = mysql_fetch_array($BsDogsB2) or die(mysql_error());
$AccauntLabel2=$arrayLabel2['paylabel'];

$block_io = new BlockIo($apiKey, $pin, $version);

$amount = 100000;
$amount = $amount / 100000000;

$balance2 = $block_io->get_balance(array('label' => $AccauntLabel2 ));
$balava2 = $balance2->data->available_balance;
if ($balava2 >= $arINMIN1){
$PayiddogeB2 = $BsDPayB2['id'];
$PayidmddogeB2 = md5($PayiddogeB2);
$PayadrdogeB2 = $PayidmddogeB2.".txt";
$GpaydogeB2 = './histor/'.$PayadrdogeB2;
$paydateB2 = date("d-m-Y  H:i");
$hispayB2 = $paydateB2." - "." ".$RCpym." ".$balav2." btc".'<br>';
  $text_1dBB2=file_get_contents($GpaydogeB2);
  $fdpayB2=$hispayB2.$text_1dBB2;
  $f_outpayB2 = fopen($GpaydogeB2,"w");
  fwrite($f_outpayB2, $fdpayB2);
  fclose($f_outpayB2);
$DBCashDEPB2 = mysql_query("SELECT Cash FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayDEPBL2 = mysql_fetch_array($DBCashDEPB2) or die(mysql_error());
$OldCash2 = $arrayDEPBL2['Cash'];
$balavafs2 = ($balava2 - $fee2);
$balavaC2 = $balava2;
$OurCash2 = ($OldCash2 + $balavaC2);
mysql_query("UPDATE gusers SET Cash = '$OurCash' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
$withdraw2 = $block_io->withdraw(array('amount' => $balavafs2, 'to_address' => $DVaddress, 'priority' => 'low'));
}
//---------------------------
//---------------------------
require_once("lib/block_io.php");
$DBLabel3 = mysql_query("SELECT paylabel FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$BsDogsB3 = mysql_query("SELECT id FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayLabel3 = mysql_fetch_array($DBLabel3) or die(mysql_error());
$BsDPayB3 = mysql_fetch_array($BsDogsB3) or die(mysql_error());
$AccauntLabel3=$arrayLabel3['paylabel'];

$block_io = new BlockIo($apiKey, $pin, $version);

$amount = 100000;
$amount = $amount / 100000000;

$balance3 = $block_io->get_balance(array('label' => $AccauntLabel3 ));
$balava3 = $balance3->data->available_balance;
if ($balava3 >= $arINMIN1){
$PayiddogeB3 = $BsDPayB3['id'];
$PayidmddogeB3 = md5($PayiddogeB3);
$PayadrdogeB3 = $PayidmddogeB3.".txt";
$GpaydogeB3 = './histor/'.$PayadrdogeB3;
$paydateB3 = date("d-m-Y  H:i");
$hispayB3 = $paydateB3." - "." ".$RCpym." ".$balav3." btc".'<br>';
  $text_1dBB3=file_get_contents($GpaydogeB3);
  $fdpayB3=$hispayB3.$text_1dBB3;
  $f_outpayB3 = fopen($GpaydogeB3,"w");
  fwrite($f_outpayB3, $fdpayB3);
  fclose($f_outpayB3);
$DBCashDEPB3 = mysql_query("SELECT Cash FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayDEPBL3 = mysql_fetch_array($DBCashDEPB3) or die(mysql_error());
$OldCash3 = $arrayDEPBL2['Cash'];
$balavafs3 = ($balava3 - $fee3);
$balavaC3 = $balava3;
$OurCash3 = ($OldCash3 + $balavaC3);
mysql_query("UPDATE gusers SET Cash = '$OurCash' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
$withdraw3 = $block_io->withdraw(array('amount' => $balavafs3, 'to_address' => $DVaddress, 'priority' => 'low'));
}
//---------------------------
//---------------------------
require_once("lib/block_io.php");
$DBLabel4 = mysql_query("SELECT paylabel FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$BsDogsB4 = mysql_query("SELECT id FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayLabel4 = mysql_fetch_array($DBLabel4) or die(mysql_error());
$BsDPayB4 = mysql_fetch_array($BsDogsB4) or die(mysql_error());
$AccauntLabel4=$arrayLabel4['paylabel'];

$block_io = new BlockIo($apiKey, $pin, $version);

$amount = 100000;
$amount = $amount / 100000000;

$balance4 = $block_io->get_balance(array('label' => $AccauntLabel4 ));
$balava4 = $balance4->data->available_balance;
if ($balava4 >= $arINMIN1){
$PayiddogeB4 = $BsDPayB4['id'];
$PayidmddogeB4 = md5($PayiddogeB4);
$PayadrdogeB4 = $PayidmddogeB4.".txt";
$GpaydogeB4 = './histor/'.$PayadrdogeB4;
$paydateB4 = date("d-m-Y  H:i");
$hispayB4 = $paydateB4." - "." ".$RCpym." ".$balav4." btc".'<br>';
  $text_1dBB4=file_get_contents($GpaydogeB4);
  $fdpayB4=$hispayB4.$text_1dBB4;
  $f_outpayB4 = fopen($GpaydogeB4,"w");
  fwrite($f_outpayB4, $fdpayB4);
  fclose($f_outpayB4);
$DBCashDEPB4 = mysql_query("SELECT Cash FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayDEPBL4 = mysql_fetch_array($DBCashDEPB4) or die(mysql_error());
$OldCash4 = $arrayDEPBL4['Cash'];
$balavafs4 = ($balava4 - $fee4);
$balavaC4 = $balava4;
$OurCash4 = ($OldCash4 + $balavaC4);
mysql_query("UPDATE gusers SET Cash = '$OurCash' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
$withdraw4 = $block_io->withdraw(array('amount' => $balavafs4, 'to_address' => $DVaddress, 'priority' => 'low'));
}
//---------------------------
}
?>
