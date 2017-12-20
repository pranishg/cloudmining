<?php
include("bd.php");
if(empty($login) and empty($password)){
require("main.html");
}
include("incminingltcdog.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMC-hash</title>
  	<link rel="shortcut icon" type="image/x-icon" href="ico/favicon.ico" />
      <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php
$DBCash = mysql_query("SELECT Cash FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$DBLtcDoge = mysql_query("SELECT Cashdoge, Cashlite FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$array = mysql_fetch_array($DBCash);
$arrayCdoge = mysql_fetch_array($DBLtcDoge);
$CBCash = mysql_query("SELECT DVS FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayD = mysql_fetch_array($CBCash) or die(mysql_error()) ;
$DVST=$arrayD['DVS'];
$DBMXCOU = mysql_query("SELECT mxdvs FROM gsmcnew WHERE slogin='$login'AND spassword='$password' AND activation='1' ");
$arayMXCOUN = mysql_fetch_array($DBMXCOU) or die(mysql_error());
$CntMXB = $arayMXCOUN['mxdvs'];
$DBPROMO = mysql_query("SELECT PROMO FROM greffer WHERE rlogin='$login' AND rrpassword='$password' AND activation='1' ");
$aryPROMO = mysql_fetch_array($DBPROMO);
$pasPromo = $aryPROMO['PROMO'];
$arrayCF = $array['Cash'];
$CashDoge = $arrayCdoge['Cashdoge'];
$CashLite = $arrayCdoge['Cashlite'];
$arrayCVF = number_format($arrayCF, 8, '.','');
$CashDogeF = number_format($CashDoge, 8, '.','');
$CashLiteF = number_format($CashLite, 8, '.','');
$currency = "USD";
$exchange_query_result = file_get_contents('https://blockchain.info/ru/ticker');
$exchange_data_obj = json_decode($exchange_query_result);
$KURS= "USD in BTC: ".$exchange_data_obj->$currency->last;
//-----------------------------------------------------------
$DBRATE = mysql_query("SELECT usdinbtc, dogeusd, ltcusd, dogebtc, ltcbtc FROM costsmc WHERE id='1' ");
$arrayRATE = mysql_fetch_array($DBRATE);
$usdinbtc = $arrayRATE['usdinbtc'];
$dogeusd = $arrayRATE['dogeusd'];
$ltcusd = $arrayRATE['ltcusd'];
$dogebtc = $arrayRATE['dogebtc'];
$ltcbtc = $arrayRATE['ltcbtc'];
?>
<?Php
$DBMXBUTl = mysql_query("SELECT mxbtmnl FROM gsmcnew WHERE slogin='$login'AND spassword='$password' AND activation='1' ");
$arrayMXBUTl = mysql_fetch_array($DBMXBUTl) or die(mysql_error());
$DBbut = mysql_query("SELECT btnml, DVSbtmnl FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$DBbutt = mysql_query("SELECT btndoge, btnltc, btndvs FROM ltcdogeming WHERE vlogin='$login'AND vpassword='$password' AND activation='1' ");
$CBLOGIN = mysql_query("SELECT id FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$GENLOG = mysql_fetch_array($CBLOGIN) or die(mysql_error());
$arrbutt = mysql_fetch_array($DBbut) or die(mysql_error());
$arrbuttcrupt = mysql_fetch_array($DBbutt) or die(mysql_error());
$MINICashDL = mysql_query("SELECT DVSm FROM ltcdogeming WHERE vlogin='$login'AND vpassword='$password' AND activation='1' ");
$arLD = mysql_fetch_array($MINICashDL)or die(mysql_error()) ;
$DVSMini=$arLD['DVSm'];
$arrBit = $arrbutt['btnml'];
$arrDVS = $arrbutt['DVSbtmnl'];
$arrMX = $arrayMXBUTl['mxbtmnl'];
$arrDoge = $arrbuttcrupt['btndoge'];
$arrLite = $arrbuttcrupt['btnltc'];
$arrDvsM = $arrbuttcrupt['btndvs'];
$GENHIS = $GENLOG[id];
$GENmdl = md5($GENHIS);
$GENfilehis = $GENmdl.".txt";
$GENadrhis = './histor/'.$GENfilehis;
if ($arrBit == "STOP") {
$arrOne = "1";
}
else {
$arrOne = "0";
}
//----------
if ($arrDVS == "STOP") {
$arrTwo = "1";
}
else {
$arrTwo = "0";
}
//----------------------
if ($arrDoge == "STOP") {
$arrThree = "1";
}
else {
$arrThree = "0";
}
//---------------------
if ($arrLite == "STOP") {
$arrFour = "1";
}
else {
$arrFour = "0";
}
//-------------------------
if ($arrDvsM == "STOP") {
$arrFive = "1";
}
else {
$arrFive = "0";
}
if ($arrMX == "STOP") {
$arrSix = "1";
}
else {
$arrSix = "0";
}
$Ourone = ($arrOne + $arrTwo + $arrThree);
$Ourtwo = ($arrFour + $arrFive + $arrSix);
$OurCloudsM = ($Ourone + $Ourtwo);
print "<body onload=\"GetData(), GetDatam(), GetDataDVS();\">";
$SumReal= number_format($array['Cash'],8,'.','');
$SumBit = number_format($array['Cash'],8,'.','');
$SumBitm = number_format($array['Cash'],8,'.','');
$SumBitmm = number_format($array['Cash'],8,'.','');
//-------------------------------------------------------------
$MINICash = mysql_query("SELECT Cashdoge, Cashlite FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$arMIN = mysql_fetch_array($MINICash)or die(mysql_error()) ;
$REALDoge=number_format($arMIN['Cashdoge'],8,'.','');
$REALLite = number_format($arMIN['Cashlite'],8,'.','');
$REALDogem=number_format($arMIN['Cashdoge'],8,'.','');
$REALLitem = number_format($arMIN['Cashlite'],8,'.','');
$SumMiniDogeR = number_format($REALDoge,8,'.','');
$SumMiniLiteR = number_format($REALLite,8,'.','');
$EasySumD = number_format($arMIN['Cashdoge'],8,'.','');
$EasySumL = number_format($arMIN['Cashlite'],8,'.','');
$EasySumDm = number_format($arMIN['Cashdoge'],8,'.','');
$EasySumLm = number_format($arMIN['Cashlite'],8,'.','');
$PriceDVSmDoge = number_format($_POST['txtPrd'],8,'.','');
$PriceDVSmLite = number_format($_POST['txtPrl'],8,'.','');
$PriceDVSmBit = number_format($_POST['txtPrb'],8,'.','');
$inmoneyMINI = number_format($_POST['txtSumulty'],8,'.','');
$nombreMINI = number_format($inmoneyMINI,8,'.','');
//-----------------hash300m----
$PriceDVSmDogem = number_format($_POST['txtPrdm'],8,'.','');
$PriceDVSmLitem = number_format($_POST['txtPrlm'],8,'.','');
$PriceDVSmBitm = number_format($_POST['txtPrbm'],8,'.','');
$inmoneyMINIm = number_format($_POST['txtSumultym'],8,'.','');
$nombreMINIm = number_format($inmoneyMINIm,8,'.','');
//-----------------------------
if (empty($_POST['txtSumulty'])){
$intDVSmD = $EasySumD / $PriceDVSmDoge;
$intDVSmB = $SumBitm / $PriceDVSmBit;
$intDVSmL = $EasySumL / $PriceDVSmLite;
}
else{
$intDVSmD = $nombreMINI / $PriceDVSmDoge;
$intDVSmB = $nombreMINI / $PriceDVSmBit;
$intDVSmL = $nombreMINI / $PriceDVSmLite;
$SumBitm = $nombreMINI;
$EasySumD = $nombreMINI;                    //Warning!!!
$EasySumL = $nombreMINI;
$NOTDVS="Please fill up your account";
}
//--------------------hash300m---------------------
if (empty($_POST['txtSumultym'])){
$intDVSmDm = $EasySumDm / $PriceDVSmDogem;
$intDVSmBm = $SumBitmm / $PriceDVSmBitm;
$intDVSmLm = $EasySumLm / $PriceDVSmLitem;
}
else{
$intDVSmDm = $nombreMINIm / $PriceDVSmDogem;
$intDVSmBm = $nombreMINIm / $PriceDVSmBitm;
$intDVSmLm = $nombreMINIm / $PriceDVSmLitem;
$SumBitmm = $nombreMINIm;
$EasySumDm = $nombreMINIm;
$EasySumLm = $nombreMINIm;
$NOTDVS="Please fill up your account";
}
//--------------------endhash300m-----------------------------
//-------------------------------------------------------------
$SumBuyF = number_format($SumReal,8,'.','');
$SumBuy=number_format($array['Cash'],8,'.','');
$PriceDVS=number_format($hashseven,8,'.','');
$inmoney = number_format($_POST['textfield'],8,'.','');
$nombreMoney = number_format($inmoney, 8, '.', '');
if(empty($_POST['textfield'])){
$intDVS=$SumBuy/$PriceDVS;
}
else{
$intDVS=$nombreMoney/$PriceDVS;
$SumBuy=$nombreMoney;
$NOTDVS="Please fill up your account";
}
if  (isset($_POST['SubmitCalc'])) {
if ($OurCloudsM == "0") {
if ($SumBuy == "0"){
echo "<script>alert(\"Please enter amount! ".$NOTDVS."\");</script>";
 header('Refresh: 1; URL=buycloud.php');
exit;
}
else{
$usersev = $_POST['textfield'];
if(!preg_match("/[0-9]{1}[.]{1}[0-9]{8}/", $usersev)) {
    echo "<script>alert(\"Error! ".$NOTDVS."\");</script>";
     header('Refresh: 1; URL=buycloud.php');
exit;
} else {
$DVSMAIN=$intDVS+$DVST;
$SumNow=$SumReal-$SumBuy;
if ($SumReal < $SumBuy ) {
echo "Not enough money!";
echo "<script>alert(\"Not enough money! ".$NOTDVS."\");</script>";
 header('Refresh: 1; URL=buycloud.php');
exit;
}
else{
mysql_query("UPDATE gusers SET DVS = '$DVSMAIN' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET Cash = '$SumNow' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
$hrefdate = date("d-m-Y  H:i");
$hisbu = $hrefdate." - "." bought"." ".$intDVS." HASH-700mx".'<br>';
//----------------------------------------------------------------------
  $text_1d=file_get_contents($GENadrhis);
  $fdlz=$hisbu.$text_1d;
  $f_outz = fopen($GENadrhis,"w");
  fwrite($f_outz, $fdlz);
  fclose($f_outz);
//----------------------------------------------------------------------
if ($intDVS >= "2.00000000"){
if (empty($aryPROMO['PROMO'])){
mysql_query("UPDATE greffer SET PROMO = '$password', PROMOTEST = '1' WHERE rlogin = '$login'  AND rrpassword = '$password' AND activation='1' ");
}
}
echo "<script>alert(\"You bought ".$intDVS." HASH-700mx"."\");</script>";
  header('Refresh: 2; URL=index.php');
  exit;
				}
				}
				}
                }
else {
mysql_query("UPDATE gusers SET rulebuy = 'false' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
 header('Refresh: 2; URL=index.php');
  exit;
}
				}
//-----------------------------------------------------------------------------------------------
$DBLtcDoge = mysql_query("SELECT Cashdoge, Cashlite FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$arrayCdoge = mysql_fetch_array($DBLtcDoge);
$CashDoge = $arrayCdoge['Cashdoge'];
$CashLite = $arrayCdoge['Cashlite'];
$CashDogeF = number_format($CashDoge, 8, '.','');
$CashLiteF = number_format($CashLite, 8, '.','');
$Znak = $_POST['txtlabelv'];
//-----------------------------------------------------
if  (isset($_POST['BuyMulty'])) {
if ($OurCloudsM == "0") {
if ($Znak == "Doge") {
if ($EasySumD == "0"){
echo "<script>alert(\"Please enter amount! ".$NOTDVS."\");</script>";
 header('Refresh: 1; URL=buycloud.php');
exit;
}
else{
$userdm = $_POST['txtSumulty'];
if(!preg_match("/[0-9]{1}[.]{1}[0-9]{8}/", $userdm)) {
    echo "<script>alert(\"Error! ".$NOTDVS."\");</script>";
     header('Refresh: 1; URL=buycloud.php');
exit;
} else {
$MINIMAIN=$intDVSmD+$DVSMini;
$SumNowD=$REALDoge - $EasySumD;
$HISRsa = $EasySumD + $HISDOGE;
$HISRd = number_format($HISRdsa, 8,'.','');
if ($REALDoge < $EasySumD ) {
echo "Not enough money!";
echo "<script>alert(\"Not enough money! ".$NOTDVS."\");</script>";
 header('Refresh: 1; URL=buycloud.php');
exit;
}
else{
mysql_query("UPDATE ltcdogeming SET DVSm = '$MINIMAIN' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1'");
mysql_query("UPDATE ltcdoge SET Cashdoge = '$SumNowD' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1'");
mysql_query("UPDATE ltcdoge SET hisdoge = '$HISRd' WHERE flogin = '$login' AND fpassword = '$password' AND activation='1'");
//-----------------------------------------------------------------------------------------
$hrefdateD = date("d-m-Y  H:i");
$hisbuD = $hrefdateD." - "." bought"." ".$intDVSmD." HASH-500m".'<br>';
//------------------------------------------------------------------------------------------
  $text_lldf=file_get_contents($GENadrhis);
  $fdlzf=$hisbuD.$text_lldf;
  $f_outzf = fopen($GENadrhis,"w");
  fwrite($f_outzf, $fdlzf);
  fclose($f_outzf);
//-----------------------------------------------------------------------------------------
echo "<script>alert(\"You bought ".$intDVSmD." HASH-500m"."\");</script>";
   header('Refresh: 2; URL=index.php');
   exit;

				}
				}
				}
                }
//-----------------------------------------------------------------------------------------------
if ($Znak == "Lite") {
if ($EasySumL == "0"){
echo "<script>alert(\"Please enter amount! ".$NOTDVS."\");</script>";
 header('Refresh: 1; URL=buycloud.php');
exit;
}
else{
$userlm = $_POST['txtSumulty'];
if(!preg_match("/[0-9]{1}[.]{1}[0-9]{8}/", $userlm)) {
    echo "<script>alert(\"Error! ".$NOTDVS."\");</script>";
     header('Refresh: 1; URL=buycloud.php');
exit;
} else {
$MINIMAIN=$intDVSmL+$DVSMini;
$SumNowL=$REALLite - $EasySumL;
$HISRl = $EasySumL + $HISLITE;
if ($REALLite < $EasySumL ) {
echo "Not enough money!";
echo "<script>alert(\"Not enough money! ".$NOTDVS."\");</script>";
 header('Refresh: 1; URL=buycloud.php');
exit;
}
else{
mysql_query("UPDATE ltcdogeming SET DVSm = '$MINIMAIN' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET Cashlite = '$SumNowL' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET hislite = '$HISRl' WHERE flogin = '$login' AND fpassword = '$password' AND activation='1'");
//-----------------------------------------------------------------------------------------------
$hrefdateL = date("d-m-Y  H:i");
$hisbuL = $hrefdateL." - "." bought"." ".$intDVSmL." HASH-500m".'<br>';
  $text_1dl=file_get_contents($GENadrhis);
  $fdlzl=$hisbuL.$text_1dl;
  $f_outzl = fopen($GENadrhis,"w");
  fwrite($f_outzl, $fdlzl);
  fclose($f_outzl);
//-----------------------------------------------------------------------------------------------
echo "<script>alert(\"You bought ".$intDVSmL." HASH-500m"."\");</script>";
  header('Refresh: 2; URL=index.php');
  exit;
				}
				}
				}
                }
//-----------------------------------------------------------------------------------------------
if ($Znak == "Bit") {
if ($SumBitm == "0"){
echo "<script>alert(\"Please enter amount! ".$NOTDVS."\");</script>";
 header('Refresh: 1; URL=buycloud.php');
exit;
}
else{
$userbm = $_POST['txtSumulty'];
if(!preg_match("/[0-9]{1}[.]{1}[0-9]{8}/", $userbm)) {
    echo "<script>alert(\"Error! ".$NOTDVS."\");</script>";
     header('Refresh: 1; URL=buycloud.php');
exit;
} else {
$MINIMAIN=$intDVSmB+$DVSMini;
$SumNowB=$SumBit - $SumBitm;
$HISRb = $SumBitm + $HISBIT;
if ($SumBit <  $SumBitm) {
echo "Not enough money!";
echo "<script>alert(\"Not enough money! ".$NOTDVS."\");</script>";
 header('Refresh: 1; URL=buycloud.php');
exit;
}
else{
mysql_query("UPDATE ltcdogeming SET DVSm = '$MINIMAIN' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET Cash = '$SumNowB' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET hisbit = '$HISRb' WHERE flogin = '$login' AND fpassword = '$password' AND activation='1'");
//---------------------------------------------------------------------------------------------
$hrefdateB = date("d-m-Y  H:i");
$hisbuB = $hrefdateB." - "." bought"." ".$intDVSmB." HASH-500m".'<br>';
  $text_1db=file_get_contents($GENadrhis);
  $fdlzb=$hisbuB.$text_1db;
  $f_outzb = fopen($GENadrhis,"w");
  fwrite($f_outzb, $fdlzb);
  fclose($f_outzb);
//---------------------------------------------------------------------------------------------
echo "<script>alert(\"You bought ".$intDVSmB." HASH-500m"."\");</script>";
  header('Refresh: 2; URL=index.php');
  exit;
				}
				}
				}
				}
                }
else {
 mysql_query("UPDATE gusers SET rulebuy = 'false' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
 header('Refresh: 2; URL=/');
  exit;
}
				}
//-----------------------------------------------------------------------------------------------
print "<body onload=\"GetCalc();\">";
print "<body onload=\"GetData();\">";
print "<body onload=\"GetCalcm();\">";
print "<body onload=\"GetDatam();\">";
print "<body onload=\"GetCalcBIT();\">";
print "<body onload=\"GetDataDVS() ;\">";
?>
<?Php
$CashDogeFm = number_format($CashDoge, 8, '.','');
$CashLiteFm = number_format($CashLite, 8, '.','');
$Znakm = $_POST['txtlabelvm'];
//-----------------------------------------------------
if  (isset($_POST['BuyMultym'])) {
if ($OurCloudsM == "0") {
if ($Znakm == "Doge") {
if ($EasySumDm == "0"){
echo "<script>alert(\"Please enter amount! ".$NOTDVS."\");</script>";
 header('Refresh: 1; URL=buycloud.php');
exit;
}
else{
$userd = $_POST['txtSumultym'];
if(!preg_match("/[0-9]{1}[.]{1}[0-9]{8}/", $userd)) {
    echo "<script>alert(\"Error! ".$NOTDVS."\");</script>";
     header('Refresh: 1; URL=buycloud.php');
exit;
} else {
$MINIMAINm=$intDVSmDm+$CntMXB;
$SumNowDm=$REALDogem - $EasySumDm;
$HISRdmsa = $EasySumDm + $HISDOGE;    // what this? HISDOGE in incminingltcdog.php
$HISRdm = number_format($HISRdmsa, 8,'.','');
if ($REALDogem < $EasySumDm ) {
echo "Not enough money!";
echo "<script>alert(\"Not enough money! ".$NOTDVS."\");</script>";
 header('Refresh: 1; URL=buycloud.php');
exit;
}
else{
mysql_query("UPDATE gsmcnew SET mxdvs = '$MINIMAINm' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET Cashdoge = '$SumNowDm' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET hisdoge = '$HISRdm' WHERE flogin = '$login' AND fpassword = '$password' AND activation='1'");
//-----------------------------------------------------------------------------------------
$hrefdateDm = date("d-m-Y  H:i");
$hisbuDm = $hrefdateDm." - "." bought"." ".$intDVSmDm." HASH-300m".'<br>';
  $text_1dfm=file_get_contents($GENadrhis);
  $fdlzfm=$hisbuDm.$text_1dfm;
  $f_outzfm = fopen($GENadrhis,"w");
  fwrite($f_outzfm, $fdlzfm);
  fclose($f_outzfm);
//-----------------------------------------------------------------------------------------
echo "<script>alert(\"You bought ".$intDVSmDm." HASH-300m"."\");</script>";
  header('Refresh: 2; URL=index.php');
  exit;
				}
				}
				}
                }
//-----------------------------------------------------------------------------------------------
if ($Znakm == "Lite") {
if ($EasySumLm == "0"){
echo "<script>alert(\"Please enter amount! ".$NOTDVS."\");</script>";
 header('Refresh: 1; URL=buycloud.php');
exit;
}
else{
$userl = $_POST['txtSumultym'];
if(!preg_match("/[0-9]{1}[.]{1}[0-9]{8}/", $userl)) {
    echo "<script>alert(\"Error! ".$NOTDVS."\");</script>";
     header('Refresh: 1; URL=buycloud.php');
exit;
} else {
$MINIMAINm=$intDVSmLm+$CntMXB;
$SumNowLm=$REALLitem - $EasySumLm;
$HISRlm = $EasySumLm + $HISLITE;
if ($REALLitem < $EasySumLm ) {
echo "Not enough money!";
echo "<script>alert(\"Not enough money! ".$NOTDVS."\");</script>";
 header('Refresh: 1; URL=buycloud.php');
exit;
}
else{
mysql_query("UPDATE gsmcnew SET mxdvs = '$MINIMAINm' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET Cashlite = '$SumNowLm' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET hislite = '$HISRlm' WHERE flogin = '$login' AND fpassword = '$password' AND activation='1'");
//-----------------------------------------------------------------------------------------------
$hrefdateLm = date("d-m-Y  H:i");
$hisbuLm = $hrefdateLm." - "." bought"." ".$intDVSmLm." HASH-300m".'<br>';
  $text_1dlm=file_get_contents($GENadrhis);
  $fdlzlm=$hisbuLm.$text_1dlm;
  $f_outzlm = fopen($GENadrhis,"w");
  fwrite($f_outzlm, $fdlzlm);
  fclose($f_outzlm);
//-----------------------------------------------------------------------------------------------
echo "<script>alert(\"You bought ".$intDVSmLm." HASH-300m"."\");</script>";
  header('Refresh: 2; URL=index.php');
  exit;
				}
				}
				}
                }
//-----------------------------------------------------------------------------------------------
if ($Znakm == "Bit") {
if ($SumBitmm == "0"){
echo "<script>alert(\"Please enter amount! ".$NOTDVS."\");</script>";
 header('Refresh: 1; URL=buycloud.php');
exit;
}
else{
$userb = $_POST['txtSumultym'];
if(!preg_match("/[0-9]{1}[.]{1}[0-9]{8}/", $userb)) {
    echo "<script>alert(\"Error! ".$NOTDVS."\");</script>";
     header('Refresh: 1; URL=buycloud.php');
exit;
} else {
$MINIMAINm=$intDVSmBm+$CntMXB; //Now
$SumNowBm=$SumReal - $SumBitmm;
$HISRbm = $SumBitmm + $HISBIT;
if ($SumReal <  $SumBitmm) {
echo "Not enough money!";
echo "<script>alert(\"Not enough money! ".$NOTDVS."\");</script>";
 header('Refresh: 1; URL=buycloud.php');
exit;
}
else{
mysql_query("UPDATE gsmcnew SET mxdvs = '$MINIMAINm' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET Cash = '$SumNowBm' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET hisbit = '$HISRbm' WHERE flogin = '$login' AND fpassword = '$password' AND activation='1'");
//---------------------------------------------------------------------------------------------
$hrefdateBm = date("d-m-Y  H:i");
$hisbuBm = $hrefdateBm." - "." bought"." ".$intDVSmBm." HASH-300m".'<br>';
  $text_1dbm=file_get_contents($GENadrhis);
  $fdlzbm=$hisbuBm.$text_1dbm;
  $f_outzbm = fopen($GENadrhis,"w");
  fwrite($f_outzbm, $fdlzbm);
  fclose($f_outzbm);
//---------------------------------------------------------------------------------------------
echo "<script>alert(\"You bought ".$intDVSmBm." HASH-300m"."\");</script>";
  header('Refresh: 2; URL=index.php');
  exit;
				}
				}
				}
				}
                }
else {
 mysql_query("UPDATE gusers SET rulebuy = 'false' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
 header('Refresh: 2; URL=index.php');
  exit;
}
				}
//-----------------------------------------------------------------------------------------------
print "<body onload=\"GetCalc();\">";
print "<body onload=\"GetData();\">";
print "<body onload=\"GetCalcm();\">";
print "<body onload=\"GetDatam();\">";
print "<body onload=\"GetCalcBIT();\">";
print "<body onload=\"GetDataDVS() ;\">";
?>
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SMC-</b>Hash</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SMC</b> mining</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-paper-plane-o"></i>
              <span class="label label-success">$</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Actual Exchange Rates</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                   <li>
                      <h4>
                       <?Php echo " USD in BTC: ".$usdinbtc ; ?>
                        <small><i class="fa fa-spinner"></i></small>
                      </h4>
                  </li>
                  <li>
                      <h4>
                       <?Php echo " USD in LTC: ".$ltcusd; ?>
                        <small><i class="fa fa-spinner"></i></small>
                      </h4>
                  </li>
                  <li>
                      <h4>
                        <?Php echo " USD in DOGE: ".$dogeusd; ?>
                        <small><i class="fa fa-spinner"></i></small>
                      </h4>
                  </li>
                  <li>
                      <h4>
                        <?Php echo " BTC in DOGE: ".$dogebtc; ?>
                        <small><i class="fa fa-spinner"></i></small>
                      </h4>
                  </li>
                  <li>
                      <h4>
                        <?Php echo " BTC in LTC: ".$ltcbtc; ?>
                        <small><i class="fa fa-spinner"></i></small>
                      </h4>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-usd"></i>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Cash</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                <h4>
                  <li>
                      <i><img src="images/lb1.png" alt="" width="10%" height="8%"/> <?Php echo " ".$arrayCVF; ?></i> BTC
                  </li>
                  <li>
                     <i><img src="images/ll1.png" alt="" width="10%" height="8%"/> <?Php echo " ".$CashLiteF; ?></i> LTC
                  </li>
                  <li>
                      <i><img src="images/ld1.png" alt="" width="10%" height="8%"/> <?Php echo " ".$CashDogeF; ?></i> DOGE
                  </li>
                  </h4>
                </ul>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <span class="hidden-xs"><?Php echo $login; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Account</a>
                </div>
                <div class="pull-right">
                  <a href="exit.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-windows"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="treeview">
          <a href="/">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="buycloud.php">
            <i class="fa fa-cloud"></i>
            <span>Clouds</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="buycloud.php#h500"><i class="fa fa-circle-o text-red"></i> <span>HASH-500m</span></a></li>
            <li><a href="buycloud.php#h300"><i class="fa fa-circle-o text-purple"></i> <span>HASH-300m</span></a></li>
            <li><a href="buycloud.php#h700"><i class="fa fa-circle-o text-aqua"></i> <span>HASH-700mx</span></a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-plus"></i>
            <span>Deposit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="deposit.php#hdbit"><i class="fa fa-circle-o"></i> Bitcoin</a></li>
            <li><a href="deposit.php#hdlite"><i class="fa fa-circle-o"></i> Litecoin</a></li>
            <li><a href="deposit.php#hddoge"><i class="fa fa-circle-o"></i> Dogecoin</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-minus"></i> <span>Withdraw</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="withdraw.php#hbit"><i class="fa fa-circle-o"></i> Bitcoin</a></li>
            <li><a href="withdraw.php#hlite"><i class="fa fa-circle-o"></i> Litecoin</a></li>
            <li><a href="withdraw.php#hdoge"><i class="fa fa-circle-o"></i> Dogecoin</a></li>
          </ul>
        </li>
        <li>
          <a href="profile.php">
            <i class="fa fa-user"></i> <span>Account</span>
          </a>
        </li>
           <li>
          <a href="history.php">
            <i class="fa fa-book"></i> <span>History</span>
          </a>
        </li>
        <li class="treeview">
          <a href="exit.php">
            <i class="fa fa-power-off"></i> <span>Signout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Clouds
        <small>Buy clouds</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-cloud"></i> Home</a></li>
        <li class="active">Clouds</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
       <div class="row mt">
			<div class="col-lg-4 goright">
				<p><a href="faq.html#buyclr"><i class="fa fa-share"></i> Help me... </a></p>
			</div>
		</div><!-- row -->

    </div>
    <?Php include("buy.php"); ?>
  </div>
  </section>
  <footer class="main-footer">
    <strong>Copyright &copy; 2016 <a href="/">smc-hash</a>.</strong> All rights
    reserved. <li> <a href="ppolicy.php">Privacy Policy</a></li>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-arrow-down"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">SMC</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-mortar-board bg-red"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">FAQ</h4>
              </div>
            </a>
          </li>
          <li>
            <a href="news.php">
              <i class="menu-icon fa fa-newspaper-o bg-yellow"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">NEWS</h4>
              </div>
            </a>
          </li>
          <li>
            <a href="support.php">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">SUPPORT</h4>
              </div>
            </a>
          </li>
        </ul>

        </div>
        </div>
  </aside>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<script id="cid0020000142021425932" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 200px;height: 300px;">{"handle":"smc-hashmining","arch":"js","styles":{"a":"83D3C9","b":100,"c":"000000","d":"000000","k":"83D3C9","l":"83D3C9","m":"83D3C9","p":"10","q":"83D3C9","r":100,"pos":"br","cv":1,"cvbg":"83D3C9","cvfg":"000000","cvw":200,"cvh":30,"ticker":1,"fwtickm":1}}</script>
</body>
</html>