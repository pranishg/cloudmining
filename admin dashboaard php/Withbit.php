<?Php
include_once("bd.php");
header('Content-Type: text/html; charset=utf-8');
?>
<?Php
$DBProfMainw = mysql_query("SELECT adresswithdraw, cpin, withbtctr  FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$DBDogeDepositw = mysql_query("SELECT adresswithdrawd, withdgtr FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$DepoDogeProfw = mysql_fetch_array($DBDogeDepositw) or die(mysql_error());
$arrayAdrPw = mysql_fetch_array($DBProfMainw) or die(mysql_error()) ;
$DBMINWITH1 = mysql_query("SELECT minwithbit, minwithdoge FROM costsmc WHERE id='1' ");
$arrMINWITH1 = mysql_fetch_array($DBMINWITH1);
$WiLOGIN = mysql_query("SELECT id FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$WiNLOG = mysql_fetch_array($WiLOGIN) or die(mysql_error());
$provrk = $arrayAdrPw['withbtctr'];
$cwithpin = $arrayAdrPw['cpin'];
$adrwthbtc = $arrayAdrPw['adresswithdraw'];
$provrk1 = $DepoDogeProfw['withdgtr'];
$adrwthdg = $DepoDogeProfw['adresswithdrawd'];
$DBCash = mysql_query("SELECT Cash FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$DBLtcDoge = mysql_query("SELECT Cashdoge FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$array = mysql_fetch_array($DBCash);
$arrayCdoge = mysql_fetch_array($DBLtcDoge);
$arrayCF1 = $array['Cash'];
$CashDoge1 = $arrayCdoge['Cashdoge'];
$Minwbitok = $arrMINWITH1['minwithbit'];
$Minwdogik = $arrMINWITH1['minwithdoge'];
$WiNHIS = $WiNLOG['id'];
$WiNmdl = md5($WiNHIS);
$WiNfilehis = $WiNmdl.".txt";
$WiNadrhis = './histor/'.$WiNfilehis;
//--------------------------------------
$WiNHIS1 = $WiNLOG['id'];
$WiNmdl1 = md5($WiNHIS1);
$WiNfilehis1 = $WiNmdl1.".txt";
$WiNadrhis1 = './histor/'.$WiNfilehis1;
//--------------------------------------
if ($provrk == "1"){
$Lblwith = $Ordrpy;
$Lblbtnb = "";
}
else {
$Lblwith = "";
$Lblbtnb ="myModa410";
}
if ($provrk1 == "1"){
$Lblwith1 = $Ordrpy;
$Lbldgd = "";
}
else {
$Lblwith1 = "";
$Lbldgd = "myModa420";
}
//------------min----------------------------------------
if  (isset($_POST['Subwithdraw'])) {
$intAmountb=$_POST['textwithdraw'];
$intAdressb=$_POST['txtWithdrawAdrw'];
$intPinb = $_POST['txtcpin'];
if ($intPinb == $cwithpin){
$MinPrcntb1 = number_format(($Minwbitok / 100),8,'.','');
$OurPrcntb1 = number_format(($Minwbitok + $MinPrcntb1),8,'.','');
$MinPrcntb = number_format(($intAmountb / 100),8,'.','');
$OurPrcntb = number_format(($intAmountb + $MinPrcntb),8,'.','');
$OurCashPrc = number_format(($arrayCF1 + $MinPrcntb),8,'.','');
$Withdateb = date("d-m-Y  H:i");
if ($arrayCF1 < $intAmountb) {
echo "<script>alert(\"".$Nomny."\");</script>";
 header('Refresh: 0; URL=/');
exit;
}
if ($intAmountb < $Minwbitok) {
echo "<script>alert(\" ".$feewthb2." ".$Minwbitok." BTC ".""."\");</script>";
 header('Refresh: 0; URL=/');
exit;
}
else{
$SumNowW = number_format(($arrayCF1 - $intAmountb),8,'.','');
mysql_query("UPDATE gusers SET datewithdraw = '$Withdateb' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET adresswithdraw = '$intAdressb' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET amountwithdraw = '$intAmountb' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET Cash = '$SumNowW' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET withbtctr = '1' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
$witdate = date("d-m-Y  H:i");
$hisbuwith = $witdate." - ".$Ordrpy." ".$intAmountb." BTC"." ".$Tadrsb." ".$intAdressb.'<br>';
//----------------------------------------------------------------------
  $text_1dwi=file_get_contents($WiNadrhis);
  $fdlzwi=$hisbuwith.$text_1dwi;
  $f_outzwi = fopen($WiNadrhis,"w");
  fwrite($f_outzwi, $fdlzwi);
  fclose($f_outzwi);
//----------------------------------------------------------------------
echo "<script>alert(\" ".$Ordrpy." ".$intAmountb." BTC"." ".$Tadrsb." ".$intAdressb. "\");</script>";
  header('Refresh: 0; URL=/');
  exit;
}
}
else {
echo "<script>alert(\" ".$NocrrPin." "."\");</script>";
header('Refresh: 0; URL=/');
 exit;
}
}
//--------------------------------------doge----------------------------------------------
if  (isset($_POST['Subwithdrawd'])) {
$intAmountd=$_POST['textwithdrawd'];
$intAdressd=$_POST['txtWithdrawAdrwd'];
$intPind=$_POST['txtcpin1'];
if ($intPind == $cwithpin){
$MinPrcntd1 = number_format(($Minwdogik / 100),8,'.','');
$OurPrcntd1 = number_format(($Minwdogik + $MinPrcntd1),8,'.','');
//------------min----------------------------------------
$MinPrcntd = number_format(($intAmountd / 100),8,'.','');
$OurPrcntd = number_format(($intAmountd + $MinPrcntd),8,'.','');
$OurCashPrcd = number_format(($CashDoge1 + $MinPrcntd),8,'.','');
$Withdated = date("d-m-Y  H:i");
if ($CashDoge1 < $intAmountd) {
echo "<script>alert(\"".$Nomny."\");</script>";
 header('Refresh: 0; URL=/');
exit;
}
if ($intAmountd < $Minwdogik) {
echo "<script>alert(\" ".$feewthb2." ".$Minwdogik." Doge ".""."\");</script>";
 header('Refresh: 0; URL=/');
exit;
}
else{
$SumNowWd = number_format(($CashDoge1 - $intAmountd),8,'.','');
mysql_query("UPDATE ltcdoge SET datewithdrawd = '$Withdated' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET adresswithdrawd = '$intAdressd' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET amountwithdrawd = '$intAmountd' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET Cashdoge = '$SumNowWd' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET withdgtr = '1' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
$witdated = date("d-m-Y  H:i");
$hisbuwith1 = $witdated." - ".$Ordrpy." ".$intAmountd." Doge"." ".$Tadrsb." ".$intAdressd.'<br>';
//----------------------------------------------------------------------
  $text_1dwi1=file_get_contents($WiNadrhis1);
  $fdlzwi1=$hisbuwith1.$text_1dwi1;
  $f_outzwi1 = fopen($WiNadrhis1,"w");
  fwrite($f_outzwi1, $fdlzwi1);
  fclose($f_outzwi1);
//----------------------------------------------------------------------
echo "<script>alert(\" ".$Ordrpy." ".$intAmountd." Doge"." ".$Tadrsb." ".$intAdressd. "\");</script>";
  header('Refresh: 0; URL=/');
  exit;
}
}
else {
echo "<script>alert(\" ".$NocrrPin." "."\");</script>";
header('Refresh: 0; URL=/');
 exit;
}
}
?>