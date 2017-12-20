<?Php
include_once("bd.php");
header('Content-Type: text/html; charset=utf-8'); 
?>
<?Php include_once("incminingltcdog.php");
include_once("initsmc.php");?>
<?php
$currency = "USD";
$exchange_query_result = file_get_contents('https://blockchain.info/ru/ticker');
$exchange_data_obj = json_decode($exchange_query_result);
$KURS= "1 BTC = ".$exchange_data_obj->$currency->last;
$DBCash = mysql_query("SELECT Cash FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$array = mysql_fetch_array($DBCash) or die(mysql_error());
$Summa=$array['Cash'];
$DBCount = mysql_query("SELECT countbtn,btnml FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arraycount = mysql_fetch_array($DBCount) or die(mysql_error());
$DBtimeb = mysql_query("SELECT timebtnb, timebtnd FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$CBCash = mysql_query("SELECT DVS, kounttt, countbtn FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayD = mysql_fetch_array($CBCash)or die(mysql_error()) ;
$DVST=$arrayD['DVS'];
$arraytimeb = mysql_fetch_array($DBtimeb) or die(mysql_error());
$Countedbtn=$arraycount['countbtn'];
$Btmnl=$arraycount['btnml'];
$SummaF = number_format($Summa, 11, '.', '');
$SummaFF = number_format($SummaF, 8,'.', '');
//---------------------hash300-------------------------
$DBMXKN = mysql_query("SELECT mxbtmnl FROM gsmcnew WHERE slogin='$login'AND spassword='$password' AND activation='1' ");
$aryMXKN = mysql_fetch_array($DBMXKN) or die(mysql_error());
$DBMXTM = mysql_query("SELECT timebtnmx FROM gsmcnew WHERE slogin='$login'AND spassword='$password' AND activation='1' ");
$aryMXTM = mysql_fetch_array($DBMXTM) or die(mysql_error());
$DBMXCD = mysql_query("SELECT kountmx FROM gsmcnew WHERE slogin='$login'AND spassword='$password' AND activation='1' ");
$aryMXCD = mysql_fetch_array($DBMXCD) or die(mysql_error());
$DBMXCL = mysql_query("SELECT mxdvs, mxcount FROM gsmcnew WHERE slogin='$login'AND spassword='$password' AND activation='1' ");
$aryMXCL = mysql_fetch_array($DBMXCL) or die(mysql_error());
//--------------------end-hash300--------------------------
$DBCashDoge = mysql_query("SELECT Cashdoge, Cashlite FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$DBbutt = mysql_query("SELECT btndoge, btnltc, btndvs FROM ltcdogeming WHERE vlogin='$login'AND vpassword='$password' AND activation='1' ");
$DBTimes = mysql_query("SELECT timebtndoge, timebtnltc, timebtndvs FROM ltcdogeming WHERE vlogin='$login'AND vpassword='$password' AND activation='1' ");
$DBCountCrypt = mysql_query("SELECT countedc FROM ltcdogeming WHERE vlogin='$login'AND vpassword='$password' AND activation='1' ");
$DBMINIDVS = mysql_query("SELECT DVSm, cntdfirst, cntdtwo FROM ltcdogeming WHERE vlogin='$login'AND vpassword='$password' AND activation='1' ");
$arrayCsDg = mysql_fetch_array($DBCashDoge) or die(mysql_error());
$arraybutt = mysql_fetch_array($DBbutt) or die(mysql_error());
$arrayTimeC = mysql_fetch_array($DBTimes) or die(mysql_error());
$arCountCrypt = mysql_fetch_array($DBCountCrypt) or die(mysql_error());
$arDVSmiN = mysql_fetch_array($DBMINIDVS) or die(mysql_error());
$MiniPower = $arDVSmiN['DVSm'];
$SummaDoge=$arrayCsDg['Cashdoge'];
$SummaLtc = $arrayCsDg['Cashlite'];
$BtnDoge = $arraybutt['btndoge'];
$BtnLtc = $arraybutt['btnltc'];
$BtnDvs = $arraybutt['btndvs'];
$BtmnMXC = $aryMXKN['mxbtmnl'];
$CntMXC = $aryMXCL['mxdvs'];
//-------------------hash300--------------------------------------
if ($BtnDoge == "STOP") {
date_default_timezone_set('UTC');
$atTMdoge = $arrayTimeC['timebtndoge'];
$datebrDoge = date("d-m-Y H:i:s");
$tmOurdoge = (strtotime($datebrDoge)- strtotime($atTMdoge));  //------------cntdfirst ????
mysql_query("UPDATE ltcdogeming SET cntdfirst = '$tmOurdoge' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
include("scrdogejav.php");
print "<body onload=\"Dogeup();\">";
$ImgCicl1 = "images/44.gif";
}
else {
$ImgCicl1 = "images/dogecoin.png";
}
if ($BtnDvs == "STOP") {
date_default_timezone_set('UTC');
$atTMdvs = $arrayTimeC['timebtndvs'];
$datebrDvsm = date("d-m-Y H:i:s");
$tmOurDvsm = (strtotime($datebrDvsm)- strtotime($atTMdvs));
mysql_query("UPDATE ltcdogeming SET kountttMINI = '$tmOurDvsm' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
include("scrdvsmjav.php");
print "<body onload=\"Dvsmup();\">";
}
if ($Btmnl == "STOP") {
date_default_timezone_set('UTC');
$tmbdate = $arraytimeb['timebtnb'];
$datebr = date("d-m-Y H:i:s");
$tmbdtm = (strtotime($datebr)- strtotime($tmbdate));
mysql_query("UPDATE gusers SET kounttt = '$tmbdtm' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
include("scrprocess.php");
print "<body onload=\"updateEarn();\">";
$ImgCicl = "images/33.gif";
}
else {
$ImgCicl = "images/bitcoin.png";
}
if ($BtmnMXC == "STOP") {
date_default_timezone_set('UTC');
$atTMHSP = $aryMXTM['timebtnmx'];
$datebrHSP = date("d-m-Y H:i:s");
$tmOurHSP = (strtotime($datebrHSP)- strtotime($atTMHSP));
mysql_query("UPDATE gsmcnew SET kountttHSP = '$tmOurHSP' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
include("scrhsp.php");
print "<body onload=\"Hspmup();\">";
}
if ($BtmnDVS == "STOP") {
date_default_timezone_set('UTC');
$tmDVSdate = $arraytimeDVS['timebtnd'];
$datebrDVS = date("d-m-Y H:i:s");
$tmDVSdatem = (strtotime($datebrDVS)- strtotime($tmDVSdate));
mysql_query("UPDATE gusers SET kountdvs = '$tmDVSdatem' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
include ("scrprocdvs.php");
print "<body onload=\"updateEarnDVS();\">";
}
$TMPcount = $arCountCrypt['countedc'];
//hash500
$CBMainMini = mysql_query("SELECT kountttMINI FROM ltcdogeming WHERE vlogin='$login'AND vpassword='$password' AND activation='1' ");
$arDMinV = mysql_fetch_array($CBMainMini)or die(mysql_error()) ;
$intspdDVSm = number_format (($MiniPower/3.3), 11, '.','');
$ydvsKekundaMINI = ($intspdDVSm/2592000);
$ydvsKekundaFMINI = number_format($ydvsKekundaMINI,11, '.','');
$xKountdvsMINI = $arDMinV['kountttMINI'];
$xCountedBDVSMINI = ($MiniPower + ($xKountdvsMINI * $ydvsKekundaFMINI));
//-----------------------------end-hash500----------------------
//-----------------------------hash300--------------------------
$CBMainHSP = mysql_query("SELECT kountttHSP FROM gsmcnew WHERE slogin='$login'AND spassword='$password' AND activation='1' ");
$arDHSPV = mysql_fetch_array($CBMainHSP)or die(mysql_error()) ;
$intspdHSP = number_format (($CntMXC/3.5), 11, '.','');
$ydvsKekundaHSP = ($intspdHSP/2592000);
$ydvsKekundaFHSP = number_format($ydvsKekundaHSP,11, '.','');
$xKountdvsHSP = $arDMinV['kountttHSP'];
$xCountedBDVSHSP = ($CntMXC + ($xKountdvsHSP * $ydvsKekundaFHSP));
//-----------------------------end-hash300----------------------
//-------------------------------bitcoin-----------------------
$TEMPcount = $arrayD['countbtn'];
$PriceDVSONE=number_format($hashseven,11,'.','');
//-----------------------------------------new--------------------------
$BITdvs = (($DVST * $PriceDVSONE)/3.5);
$xBITdvsKekunda = ($BITdvs / 2592000);
if ($DVST == "0.00000000000") {
$BITdvsDVS = "0";
$BITDVSmon = "0";
$CloudDVSb = number_format("0",11,'.','');
}
else {
$BITdvsDVS = number_format($xBITdvsKekunda, 11,'.','');
$BITDVSmon = number_format(($DVST * $PriceDVSONE)/3.5,11,'.','');
$CloudDVSb = number_format($DVST,11,'.','');
}
//-----------------------------------------------------------------------
$PriceDVSONEMM = number_format($hashfive,11,'.','');
$BITmini = (($MiniPower * $PriceDVSONEMM)/3.3);
$xBITminiKekunda = ($BITmini / 2592000);
if ($DVSMini == "0.00000000000") {
$BITminiDVS = "0";
$BITminimon = "0";
$Cloudminibit = number_format("0",11,'.','');
}
else {
$BITminiDVS = number_format($xBITminiKekunda, 11,'.','');
$BITminimon = number_format(($MiniPower * $PriceDVSONEMM)/3.3,11,'.','');
$Cloudminibit = number_format($MiniPower,11,'.','');
}
//-----------------------------------------------------------------------
$BITsmc = (($CntMXC * $PriceDVSONE)/3.5);
$xBITsmcKekunda = ($BITsmc / 2592000);
if ($CntMXC == "0.00000000000") {
$BITsmcDVS = "0";
$BITsmcmon = "0";
$Cloudsmcbit = number_format("0",11,'.','');
}
else {
$BITsmcDVS = number_format($xBITsmcKekunda, 11,'.','');
$BITsmcmon = number_format(($CntMXC * $PriceDVSONE)/3.5,11,'.','');
$Cloudsmcbit = number_format($CntMXC,11,'.','');
}
$BITOURINI = ($BITDVSmon + $BITminimon + $BITsmcmon);
$CloudOurBit = number_format(($CloudDVSb + $Cloudminibit + $Cloudsmcbit),11,'.','');
$LBCAshC = ($BITdvsDVS + $BITminiDVS + $BITsmcDVS);
$xKounttt = $arrayD['kounttt'];
$xCountedCCB = ($Summa + ($tmbdtm * $LBCAshC));
$xCountedB = ($tmbdtm * $LBCAshC);
$xCountedFF = number_format($xCountedB,11,'.','');
//-----------------------------------------end-new----------------------
$daydvsbit = ($BITdvs/30);
$yeardvsbit = ($BITdvs * 12);
$threedvsbit = ($yeardvsbit *2);
$daysmcbit = ($BITsmc / 30);
$yearsmcbit = ($BITsmc * 12);
$threesmcbit = ($yearsmcbit * 2);
$dayminibit = ($BITmini / 30);
$yearminibit = ($BITmini * 12);
$threeminibit = ($yearminibit * 2);
//-------------Doge-----hash500+hash300-------------------
//-------------hash500------------
$LBDDoNEWge = (($MiniPower * $PrDgFive)/3.3);
$xDoNEWgeKekunda = ($LBDDoNEWge / 2592000);
if ($DVSMini == "0.00000000000") {
$LBCMINI = "0";
$OURDGmini = "0";
$CloudFIVE = number_format("0",11,'.','');
}
else {
$LBCMINI = number_format($xDoNEWgeKekunda, 11,'.','');
$OURDGmini = number_format(($MiniPower * $PrDgFive)/3.3,11,'.','');
$CloudFIVE = number_format($MiniPower,11,'.','');
}
//--------------end-hash500-----------
//--------------hash300---------------
$LBDDogNEWe = (($CntMXC * $Prdogesvn)/3.5);   // ОБЩИЕ ПЕРЕМЕННЫЕ ПРАЙСОВ +++
$xDogNEWeKekunda = ($LBDDogNEWe / 2592000);
if ($CntMXC == "0.00000000000") {
$LBCMXC = "0";
$OURDGsmc = "0";
$CloudTHREE = number_format("0",11,'.','');
}
else {
$LBCMXC = number_format($xDogNEWeKekunda, 11,'.','');  //---секундный доход
$OURDGsmc = number_format(($CntMXC * $Prdogesvn)/3.5,11,'.','');
$CloudTHREE = number_format($CntMXC,11,'.','');
}
$CloudOur = number_format(($CloudFIVE + $CloudTHREE),11,'.','');
$OURDGDG = ($OURDGmini + $OURDGsmc);
//---------------end-hash300------------------------------
//---------------Our-------------------------------------
$LBCDoge = $LBCMINI + $LBCMXC;
//-------------------------------------------------------
$xDogeKounttt =  $arDVSmiN['cntdfirst'];
$xCountedCCBDoge = ($SummaDoge + ($tmOurdoge * $LBCDoge));
$xCountedBDoge = ($tmOurdoge * $LBCDoge);   //--LBCDoge секундный результат
$xCountedFFDoge = number_format($xCountedBDoge,11,'.','');
$LBDdogday = ($LBDDogNEWe / 30);
$LBDdogyear = ($LBDDogNEWe * 12);
$LBDdogthree = ($LBDdogyear * 2);
$LBDDogefiday = ($LBDDoNEWge / 30);
$LBDDogefiyear = ($LBDDoNEWge * 12);
$LBDDogefithree = ($LBDDogefiyear * 2);
//--------------------end-hash500+hash300------------------------------------
//-------------LITECOIN-----hash500+hash300-------------------
//-------------hash500------------
$LBDLiNEWte = (($MiniPower * $PriceLtcNF)/3.3);
$xLiNEWteKekunda = ($LBDLiNEWte / 2592000);
if ($DVSMini == "0.00000000000") {
$LBCMINILIT = "0";
$OURLTCmini ="0";
$CloudFIVEL = number_format("0",11,'.','');
}
else {
$LBCMINILIT = number_format($xLiNEWteKekunda, 11,'.','');
$OURLTCmini = number_format(($MiniPower * $PriceLtcNF)/3.3,11,'.','');
$CloudFIVEL = number_format($MiniPower,11,'.','');
}
//--------------end-hash500-----------
//--------------hash300---------------
$LBDLitNEWe = (($CntMXC * $PriceLtcNF)/3.5);   // ОБЩИЕ ПЕРЕМЕННЫЕ ПРАЙСОВ +++
$xLitNEWeKekunda = ($LBDLitNEWe / 2592000);
if ($CntMXC == "0.00000000000") {
$LBCMXCLIT = "0";
$OURLTCsmc = "0";
$CloudTHREEL = number_format("0",11,'.','');
}
else {
$LBCMXCLIT = number_format($xLitNEWeKekunda, 11,'.','');   //---секундный доход
$OURLTCsmc = number_format(($CntMXC * $PriceLtcNF)/3.5,11,'.','');
$CloudTHREEL = number_format($CntMXC,11,'.','');
}
$CloudOurL = number_format(($CloudFIVEL + $CloudTHREEL),11,'.','');
$OURLTCc = ($OURLTCmini + $OURLTCsmc);
//---------------end-hash300------------------------------
//---------------Our-------------------------------------
$LBCLite = ($LBCMINILIT + $LBCMXCLIT);
//-------------------------------------------------------
$xLiteKounttt =  $arDVSmiN['cntdtwo'];
$xCountedCCBLite = ($SummaLtc + ($tmOurlite * $LBCLite));
$xCountedBLite = ($tmOurlite * $LBCLite);   //--LBCDoge секундный результат
$xCountedFFLite = number_format($xCountedBLite,11,'.','');
$LBDliteday = ($LBDLitNEWe / 30);
$LBDliteyear = ($LBDLitNEWe * 12);
$LBDlitethree = ($LBDliteyear * 2);
$LBDlitefiday = ($LBDLiNEWte / 30);
$LBDlitefiyear = ($LBDLiNEWte * 12);
$LBDlitefithree = ($LBDlitefiyear * 2);
//--------------------end-hash500+hash300------------------------------------
//------------------------Создать для дога и лайта такое же-------------
?>
<?Php
//DVS;
$CBDVSMain = mysql_query("SELECT kountdvs FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayMainD = mysql_fetch_array($CBDVSMain)or die(mysql_error()) ;
$intspeedDVS = number_format (($DVST/3.5), 11, '.','');
$ydvsKekunda = ($intspeedDVS/2592000);
$ydvsKekundaF = number_format($ydvsKekunda,11, '.','');
$xKountdvs = $arrayMainD['kountdvs'];
$xCountedBDVS = ($DVST + ($xKountdvs * $ydvsKekundaF));
?>
<?php
//DVS;
$DBMinDVS = mysql_query("SELECT DVSbtmnl FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayDVSbtmnl = mysql_fetch_array($DBMinDVS) or die(mysql_error());
$DBtimeDVS = mysql_query("SELECT timebtnd FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arraytimeDVS = mysql_fetch_array($DBtimeDVS) or die(mysql_error());
$BtmnDVS = $arrayDVSbtmnl['DVSbtmnl'];
if ($BtmnDVS == "STOP") {
date_default_timezone_set('UTC');
$tmDVSdate = $arraytimeDVS['timebtnd'];
$datebrDVS = date("d-m-Y H:i:s");
$tmDVSdatem = (strtotime($datebrDVS)- strtotime($tmDVSdate));
mysql_query("UPDATE gusers SET kountdvs = '$tmDVSdatem' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
include ("scrprocdvs.php");
print "<body onload=\"updateEarnDVS();\">";
}
?>
<?Php
if (isset($_POST['subMining1'])) {
if ($CloudOurBit == "0.00000000000") :
echo "<script>alert(\"".$BpwrPl.""."\");</script>";
 header('Refresh: 1; URL=buyhash.php');
exit;
endif;
if($Btmnl == "MINING"):
if ($BtmnDVS == "STOP") {
date_default_timezone_set('UTC');
$datebrNEWDVS = date("d-m-Y H:i:s");
$tmbdatemNEWDVS = (strtotime($datebrNEWDVS)- strtotime($tmDVSdate));
$xCountedBDVSNEW = ($DVST + ($tmbdatemNEWDVS * $ydvsKekundaF));
$ySummaDVS = number_format($xCountedBDVSNEW,11,'.','');
mysql_query("UPDATE gusers SET DVS = '$ySummaDVS' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
//---------------------------------------------------------
$rDVSgdate = "0";
$tmDVSgzirro = "0";
mysql_query("UPDATE gusers SET timebtnd = '$rDVSgdate' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET kountdvs = '$tmDVSgzirro' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
}
//-------------------------------------new------------------------------------------------------
if ($BtnDoge == "STOP") {
date_default_timezone_set('UTC');
$atTMdogeM = $arrayTimeC['timebtndoge'];
$datebrDogeM= date("d-m-Y H:i:s");
$tmOurdogeM = (strtotime($datebrDogeM)- strtotime($atTMdogeM));
$xCountedCCBDogeM = ($SummaDoge + ($tmOurdogeM * $LBCDoge));
$ySummaDogeM = number_format($xCountedCCBDogeM,11,'.','');
$yCountedCCBDogeM = ($tmOurdogeM * $LBCDoge);
$yzCountedCCBDogeM  = number_format($yCountedCCBDogeM,11,'.','');
mysql_query("UPDATE ltcdogeming SET btndoge = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET Cashdoge = '$ySummaDogeM' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
//------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)){
//------------------------------------
$DBherrefd = mysql_query("SELECT daycashdoge FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherherd = mysql_fetch_array($DBherrefd) or die(mysql_error());
$Refmaincashd = $Reherherd['daycashdoge'];
$Refpercentd = (($yzCountedCCBDogeM *5)/ 100);
$RefpercentdFO = number_format($Refpercentd,8,'.','');
$Refoursumd = ($Refmaincashd + $RefpercentdFO);
$RefoursumdFO = number_format($Refoursumd,8,'.','');
mysql_query("UPDATE greffer SET daycashdoge = '$RefoursumdFO' WHERE my_refflink='$ReReflink' ");
}
$rmingSdate = "0";
mysql_query("UPDATE ltcdogeming SET timebtndoge = '$rmingSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdfirst = '$rmingSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
}
//-------------------------------------------------------------------------------------
if ($BtnLtc == "STOP") {
date_default_timezone_set('UTC');
$atTMliteNR = $arrayTimeC['timebtnltc'];
$datebrLtcNR = date("d-m-Y H:i:s");
$tmOurliteNR = (strtotime($datebrLtcNR)- strtotime($atTMliteNR));
$xCountedCCBLiteNR = ($SummaLtc + ($tmOurliteNR * $LBCLite));
$ySummaLtcR = number_format($xCountedCCBLiteNR,11,'.','');
$yCountedCCBLiteNR = ($tmOurliteNR * $LBCLite);
$yzCountedCCBLiteNR = number_format($yCountedCCBLiteNR,11,'.','');
mysql_query("UPDATE ltcdogeming SET btnltc = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET Cashlite = '$ySummaLtcR' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
//-----------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)){
//------------------------------------
$DBherrefl = mysql_query("SELECT daycashlite FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherherl = mysql_fetch_array($DBherrefl) or die(mysql_error());
$Refmaincashl = $Reherherl['daycashlite'];
$Refpercentl = (($yzCountedCCBLiteNR *5)/ 100);
$RefpercentlLOR = number_format($Refpercentl,8,'.','');
$Refoursuml = ($Refmaincashl + $RefpercentlLOR);
$RefoursumlLOR = number_format($Refoursuml,8,'.','');
mysql_query("UPDATE greffer SET daycashlite = '$RefoursumlLOR' WHERE my_refflink='$ReReflink' ");
}
$rmingSLdate = "0";
mysql_query("UPDATE ltcdogeming SET timebtnltc = '$rmingSLdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdtwo = '$rmingSLdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
}
//-----------------------------------------------------------------------------------------------
if ($BtnDvs == "STOP") {
date_default_timezone_set('UTC');
$atTMdvsNED = $arrayTimeC['timebtndvs'];
$datebrDvsmNED = date("d-m-Y H:i:s");
$tmOurDvsmNED = (strtotime($datebrDvsmNED)- strtotime($atTMdvsNED));
$xCountedBDVSMININED = ($MiniPower + ($tmOurDvsmNED * $ydvsKekundaFMINI));
$ySummaDVSmND = number_format($xCountedBDVSMININED,11,'.','');
mysql_query("UPDATE ltcdogeming SET btndvs = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET DVSm = '$ySummaDVSmND' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
//-----------------
$rmingDSdate = "0";
mysql_query("UPDATE ltcdogeming SET timebtndvs = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdfirst = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET kountttMINI = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
}
//---------------------------------------hash300----------------------------------------------------
if ($BtmnMXC == "STOP") {
date_default_timezone_set('UTC');
$datebrNEWHSP = date("d-m-Y H:i:s");
$tmbdatemNEWHSP = (strtotime($datebrNEWHSP)- strtotime($atTMHSP));
$xCountedBHSPNEW = ($CntMXC + ($tmbdatemNEWHSP * $ydvsKekundaFHSP));
$ySummaHSPc = number_format($xCountedBHSPNEW,11,'.','');
mysql_query("UPDATE gsmcnew SET mxdvs = '$ySummaHSPc' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
//---------------------------------------------------------
$rDVSgdate = "0";
$tmDVSgzirro = "0";
mysql_query("UPDATE gsmcnew SET timebtnmx = '$rDVSgdate' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
mysql_query("UPDATE gsmcnew SET mxcount = '$tmDVSgzirro' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
mysql_query("UPDATE gsmcnew SET kountttHSP = '$tmDVSgzirro' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
}
//-------------------------------------end-new------------------------------------------------------
date_default_timezone_set('UTC');
mysql_query("UPDATE gusers SET btnml = 'STOP' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET DVSbtmnl = 'MINING' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET btndvs = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET btndoge = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gsmcnew SET mxbtmnl = 'MINING' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
$rdate = date("d-m-Y H:i:s");
mysql_query("UPDATE gusers SET timebtnb = '$rdate' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
//-------------------------------------------------------------------------------------------
print "<body onload=\"updateEarn();\">";
  header('Location:index.php');
endif;
if ($Btmnl == "STOP"):
date_default_timezone_set('UTC');
$datebrNEW = date("d-m-Y H:i:s");
$tmbdatemNEW = (strtotime($datebrNEW)- strtotime($tmbdate));
$xCountedCCBNEW = ($Summa + ($tmbdatemNEW * $LBCAshC));
$yCountedCCBNEW = ($tmbdatemNEW * $LBCAshC);
$ySumma = number_format($xCountedCCBNEW,11,'.','');
$yzCountedCCBNEW = number_format($yCountedCCBNEW,11,'.','');
mysql_query("UPDATE gusers SET Cash = '$ySumma' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET btnml = 'MINING' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
//------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)) {
//------------------------------------
$DBherref = mysql_query("SELECT daycash FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherher = mysql_fetch_array($DBherref) or die(mysql_error());
$Refmaincash = $Reherher['daycash'];
$Refpercent = (($yzCountedCCBNEW *5)/ 100);
$RefoursumNUM = number_format($Refpercent,8,'.','');
$Refoursum = ($Refmaincash + $RefoursumNUM);
$RefoursumL = number_format($Refoursum,8,'.','');
mysql_query("UPDATE greffer SET daycash = '$RefoursumL' WHERE my_refflink='$ReReflink' ");
}
$rgdate = "0";
$tmbdatemzirro = "0";
mysql_query("UPDATE gusers SET timebtnb = '$rgdate' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET kounttt = '$tmbdatemzirro' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
header('Location:index.php');
endif;
}
?>
<?php
//DVS;
if (isset($_POST['subMining2'])) {
if ($DVST == "0.00000000000") :
echo "<script>alert(\"".$BpwrPl.""."\");</script>";
 header('Refresh: 1; URL=buyhash.php');
exit;
endif;
if($BtmnDVS == "MINING"):
//-----------------------------------------------------------------------------------------------
if ($Btmnl == "STOP") {
date_default_timezone_set('UTC');
$datebrNEW = date("d-m-Y H:i:s");
$tmbdatemNEW = (strtotime($datebrNEW)- strtotime($tmbdate));
$xCountedCCBNEW = ($Summa + ($tmbdatemNEW * $LBCAshC));
$yCountedCCBNEW = ($tmbdatemNEW * $LBCAshC);
$ySumma = number_format($xCountedCCBNEW,11,'.','');
$yzCountedCCBNEW = number_format($yCountedCCBNEW,11,'.','');
mysql_query("UPDATE gusers SET Cash = '$ySumma' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
//------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)) {
//------------------------------------
$DBherref = mysql_query("SELECT daycash FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherher = mysql_fetch_array($DBherref) or die(mysql_error());
$Refmaincash = $Reherher['daycash'];
$Refpercent = (($yzCountedCCBNEW *5)/ 100);
$RefoursumNUM = number_format($Refpercent,8,'.','');
$Refoursum = ($Refmaincash + $RefoursumNUM);
$RefoursumL = number_format($Refoursum,8,'.','');
mysql_query("UPDATE greffer SET daycash = '$RefoursumL' WHERE my_refflink='$ReReflink' ");
}
$rgdate = "0";
$tmbdatemzirro = "0";
mysql_query("UPDATE gusers SET timebtnb = '$rgdate' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET kounttt = '$tmbdatemzirro' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
}
//-----------------------------------------------------------------------------------------------
if ($BtnDoge == "STOP") {
date_default_timezone_set('UTC');
$atTMdogeM = $arrayTimeC['timebtndoge'];
$datebrDogeM= date("d-m-Y H:i:s");
$tmOurdogeM = (strtotime($datebrDogeM)- strtotime($atTMdogeM));
$xCountedCCBDogeM = ($SummaDoge + ($tmOurdogeM * $LBCDoge));
$ySummaDogeM = number_format($xCountedCCBDogeM,11,'.','');
$yCountedCCBDogeM = ($tmOurdogeM * $LBCDoge);
$yzCountedCCBDogeM  = number_format($yCountedCCBDogeM,11,'.','');
mysql_query("UPDATE ltcdogeming SET btndoge = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET Cashdoge = '$ySummaDogeM' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
//------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)){
//------------------------------------
$DBherrefd = mysql_query("SELECT daycashdoge FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherherd = mysql_fetch_array($DBherrefd) or die(mysql_error());
$Refmaincashd = $Reherherd['daycashdoge'];
$Refpercentd = (($yzCountedCCBDogeM *5)/ 100);
$RefpercentdFO = number_format($Refpercentd,8,'.','');
$Refoursumd = ($Refmaincashd + $RefpercentdFO);
$RefoursumdFO = number_format($Refoursumd,8,'.','');
mysql_query("UPDATE greffer SET daycashdoge = '$RefoursumdFO' WHERE my_refflink='$ReReflink' ");
}
$rmingSdate = "0";
mysql_query("UPDATE ltcdogeming SET timebtndoge = '$rmingSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdfirst = '$rmingSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
}
//-------------------------------------------------------------------------------------
if ($BtnLtc == "STOP") {
date_default_timezone_set('UTC');
$atTMliteNR = $arrayTimeC['timebtnltc'];
$datebrLtcNR = date("d-m-Y H:i:s");
$tmOurliteNR = (strtotime($datebrLtcNR)- strtotime($atTMliteNR));
$xCountedCCBLiteNR = ($SummaLtc + ($tmOurliteNR * $LBCLite));
$ySummaLtcR = number_format($xCountedCCBLiteNR,11,'.','');
$yCountedCCBLiteNR = ($tmOurliteNR * $LBCLite);
$yzCountedCCBLiteNR = number_format($yCountedCCBLiteNR,11,'.','');
mysql_query("UPDATE ltcdogeming SET btnltc = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET Cashlite = '$ySummaLtcR' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
//-----------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)){
//------------------------------------
$DBherrefl = mysql_query("SELECT daycashlite FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherherl = mysql_fetch_array($DBherrefl) or die(mysql_error());
$Refmaincashl = $Reherherl['daycashlite'];
$Refpercentl = (($yzCountedCCBLiteNR *5)/ 100);
$RefpercentlLOR = number_format($Refpercentl,8,'.','');
$Refoursuml = ($Refmaincashl + $RefpercentlLOR);
$RefoursumlLOR = number_format($Refoursuml,8,'.','');
mysql_query("UPDATE greffer SET daycashlite = '$RefoursumlLOR' WHERE my_refflink='$ReReflink' ");
}
$rmingSLdate = "0";
mysql_query("UPDATE ltcdogeming SET timebtnltc = '$rmingSLdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdtwo = '$rmingSLdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
}
//-----------------------------------------------------------------------------------------------
if ($BtnDvs == "STOP") {
date_default_timezone_set('UTC');
$atTMdvsNED = $arrayTimeC['timebtndvs'];
$datebrDvsmNED = date("d-m-Y H:i:s");
$tmOurDvsmNED = (strtotime($datebrDvsmNED)- strtotime($atTMdvsNED));
$xCountedBDVSMININED = ($MiniPower + ($tmOurDvsmNED * $ydvsKekundaFMINI));
$ySummaDVSmND = number_format($xCountedBDVSMININED,11,'.','');
mysql_query("UPDATE ltcdogeming SET btndvs = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET DVSm = '$ySummaDVSmND' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
//-----------------
$rmingDSdate = "0";
mysql_query("UPDATE ltcdogeming SET timebtndvs = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdfirst = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET kountttMINI = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
}
//---------------------------------------hash300----------------------------------------------------
if ($BtmnMXC == "STOP") {
date_default_timezone_set('UTC');
$datebrNEWHSP = date("d-m-Y H:i:s");
$tmbdatemNEWHSP = (strtotime($datebrNEWHSP)- strtotime($atTMHSP));
$xCountedBHSPNEW = ($CntMXC + ($tmbdatemNEWHSP * $ydvsKekundaFHSP));
$ySummaHSPc = number_format($xCountedBHSPNEW,11,'.','');
mysql_query("UPDATE gsmcnew SET mxdvs = '$ySummaHSPc' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
//---------------------------------------------------------
$rDVSgdate = "0";
$tmDVSgzirro = "0";
mysql_query("UPDATE gsmcnew SET timebtnmx = '$rDVSgdate' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
mysql_query("UPDATE gsmcnew SET mxcount = '$tmDVSgzirro' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
mysql_query("UPDATE gsmcnew SET kountttHSP = '$tmDVSgzirro' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
}
//------------------------------------------end-hash300-------------------------------------------------
date_default_timezone_set('UTC');
mysql_query("UPDATE gusers SET DVSbtmnl = 'STOP' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET btnml = 'MINING' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET btndvs = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET btndoge = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET btnltc = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gsmcnew SET mxbtmnl = 'MINING' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
$rDVSdate = date("d-m-Y H:i:s");
mysql_query("UPDATE gusers SET timebtnd = '$rDVSdate' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
print "<body onload=\"updateEarnDVS();\">";
  header('Location:index.php');
endif;
if ($BtmnDVS == "STOP"):
date_default_timezone_set('UTC');
$datebrNEWDVS = date("d-m-Y H:i:s");
$tmbdatemNEWDVS = (strtotime($datebrNEWDVS)- strtotime($tmDVSdate));
$xCountedBDVSNEW = ($DVST + ($tmbdatemNEWDVS * $ydvsKekundaF));
$ySummaDVS = number_format($xCountedBDVSNEW,11,'.','');        //11 to 10
mysql_query("UPDATE gusers SET DVSbtmnl = 'MINING' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET DVS = '$ySummaDVS' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
//---------------------------------------------------------
$rDVSgdate = "0";
$tmDVSgzirro = "0";
mysql_query("UPDATE gusers SET timebtnd = '$rDVSgdate' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET kountdvs = '$tmDVSgzirro' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
header('Location:index.php');
endif;
}
?>
<?Php
if (isset($_POST['subMining5'])) {    //hash500
if ($DVSMini == "0.00000000000") :
echo "<script>alert(\"".$BpwrPl.""."\");</script>";
 header('Refresh: 1; URL=buyhash.php');
exit;
endif;
if($BtnDvs == "MINING"):
//-------------------------------------------------------------------------------------
if ($BtnDoge == "STOP") {
date_default_timezone_set('UTC');
$atTMdogeM = $arrayTimeC['timebtndoge'];
$datebrDogeM= date("d-m-Y H:i:s");
$tmOurdogeM = (strtotime($datebrDogeM)- strtotime($atTMdogeM));
$xCountedCCBDogeM = ($SummaDoge + ($tmOurdogeM * $LBCDoge));
$ySummaDogeM = number_format($xCountedCCBDogeM,11,'.','');
$yCountedCCBDogeM = ($tmOurdogeM * $LBCDoge);
$yzCountedCCBDogeM  = number_format($yCountedCCBDogeM,11,'.','');
mysql_query("UPDATE ltcdogeming SET btndoge = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET Cashdoge = '$ySummaDogeM' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
//------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)){
//------------------------------------
$DBherrefd = mysql_query("SELECT daycashdoge FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherherd = mysql_fetch_array($DBherrefd) or die(mysql_error());
$Refmaincashd = $Reherherd['daycashdoge'];
$Refpercentd = (($yzCountedCCBDogeM *5)/ 100);
$RefpercentdFO = number_format($Refpercentd,8,'.','');
$Refoursumd = ($Refmaincashd + $RefpercentdFO);
$RefoursumdFO = number_format($Refoursumd,8,'.','');
mysql_query("UPDATE greffer SET daycashdoge = '$RefoursumdFO' WHERE my_refflink='$ReReflink' ");
}
$rmingSdate = "0";
mysql_query("UPDATE ltcdogeming SET timebtndoge = '$rmingSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdfirst = '$rmingSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
}
//-------------------------------------------------------------------------------------
if ($BtnLtc == "STOP") {
date_default_timezone_set('UTC');
$atTMliteNR = $arrayTimeC['timebtnltc'];
$datebrLtcNR = date("d-m-Y H:i:s");
$tmOurliteNR = (strtotime($datebrLtcNR)- strtotime($atTMliteNR));
$xCountedCCBLiteNR = ($SummaLtc + ($tmOurliteNR * $LBCLite));
$ySummaLtcR = number_format($xCountedCCBLiteNR,11,'.','');
$yCountedCCBLiteNR = ($tmOurliteNR * $LBCLite);
$yzCountedCCBLiteNR = number_format($yCountedCCBLiteNR,11,'.','');
mysql_query("UPDATE ltcdogeming SET btnltc = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET Cashlite = '$ySummaLtcR' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
//-----------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)){
//------------------------------------
$DBherrefl = mysql_query("SELECT daycashlite FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherherl = mysql_fetch_array($DBherrefl) or die(mysql_error());
$Refmaincashl = $Reherherl['daycashlite'];
$Refpercentl = (($yzCountedCCBLiteNR *5)/ 100);
$RefpercentlLOR = number_format($Refpercentl,8,'.','');
$Refoursuml = ($Refmaincashl + $RefpercentlLOR);
$RefoursumlLOR = number_format($Refoursuml,8,'.','');
mysql_query("UPDATE greffer SET daycashlite = '$RefoursumlLOR' WHERE my_refflink='$ReReflink' ");
}
$rmingSLdate = "0";
mysql_query("UPDATE ltcdogeming SET timebtnltc = '$rmingSLdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdtwo = '$rmingSLdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
}
//-------------------------------------------------------------------------------------
if ($Btmnl == "STOP") {
date_default_timezone_set('UTC');
$datebrNEW = date("d-m-Y H:i:s");
$tmbdatemNEW = (strtotime($datebrNEW)- strtotime($tmbdate));
$xCountedCCBNEW = ($Summa + ($tmbdatemNEW * $LBCAshC));
$yCountedCCBNEW = ($tmbdatemNEW * $LBCAshC);
$ySumma = number_format($xCountedCCBNEW,11,'.','');
$yzCountedCCBNEW = number_format($yCountedCCBNEW,11,'.','');
mysql_query("UPDATE gusers SET Cash = '$ySumma' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
//------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)) {
//------------------------------------
$DBherref = mysql_query("SELECT daycash FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherher = mysql_fetch_array($DBherref) or die(mysql_error());
$Refmaincash = $Reherher['daycash'];
$Refpercent = (($yzCountedCCBNEW *5)/ 100);
$RefoursumNUM = number_format($Refpercent,8,'.','');
$Refoursum = ($Refmaincash + $RefoursumNUM);
$RefoursumL = number_format($Refoursum,8,'.','');
mysql_query("UPDATE greffer SET daycash = '$RefoursumL' WHERE my_refflink='$ReReflink' ");
}
$rgdate = "0";
$tmbdatemzirro = "0";
mysql_query("UPDATE gusers SET timebtnb = '$rgdate' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET kounttt = '$tmbdatemzirro' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
}
//-------------------------------------------------------------------------------------
if ($BtmnDVS == "STOP") {
date_default_timezone_set('UTC');
$datebrNEWDVS = date("d-m-Y H:i:s");
$tmbdatemNEWDVS = (strtotime($datebrNEWDVS)- strtotime($tmDVSdate));
$xCountedBDVSNEW = ($DVST + ($tmbdatemNEWDVS * $ydvsKekundaF));
$ySummaDVS = number_format($xCountedBDVSNEW,11,'.','');
mysql_query("UPDATE gusers SET DVS = '$ySummaDVS' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
//---------------------------------------------------------
$rDVSgdate = "0";
$tmDVSgzirro = "0";
mysql_query("UPDATE gusers SET timebtnd = '$rDVSgdate' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET kountdvs = '$tmDVSgzirro' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
}
//---------------------------------------hash300----------------------------------------------------
if ($BtmnMXC == "STOP") {
date_default_timezone_set('UTC');
$datebrNEWHSP = date("d-m-Y H:i:s");
$tmbdatemNEWHSP = (strtotime($datebrNEWHSP)- strtotime($atTMHSP));
$xCountedBHSPNEW = ($CntMXC + ($tmbdatemNEWHSP * $ydvsKekundaFHSP));
$ySummaHSPc = number_format($xCountedBHSPNEW,11,'.','');
mysql_query("UPDATE gsmcnew SET mxdvs = '$ySummaHSPc' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
//---------------------------------------------------------
$rDVSgdate = "0";
$tmDVSgzirro = "0";
mysql_query("UPDATE gsmcnew SET timebtnmx = '$rDVSgdate' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
mysql_query("UPDATE gsmcnew SET mxcount = '$tmDVSgzirro' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
mysql_query("UPDATE gsmcnew SET kountttHSP = '$tmDVSgzirro' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
}
//------------------------------------------end-hash300-------------------------------------------------
date_default_timezone_set('UTC');
mysql_query("UPDATE ltcdogeming SET btndvs = 'STOP' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET btndoge = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET btnml = 'MINING' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET DVSbtmnl = 'MINING' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gsmcnew SET mxbtmnl = 'MINING' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
$rmingDdate = date("d-m-Y H:i:s");
mysql_query("UPDATE ltcdogeming SET timebtndvs = '$rmingDdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
print "<body onload=\"Dvsmup();\">";
  header('Location:index.php');
endif;
if ($BtnDvs == "STOP"):
date_default_timezone_set('UTC');
$atTMdvsNEW = $arrayTimeC['timebtndvs'];
$datebrDvsmNEW = date("d-m-Y H:i:s");
$tmOurDvsmNEW = (strtotime($datebrDvsmNEW)- strtotime($atTMdvsNEW));
$xCountedBDVSMININEW = ($MiniPower + ($tmOurDvsmNEW * $ydvsKekundaFMINI));
$ySummaDVSm = number_format($xCountedBDVSMININEW,11,'.','');
mysql_query("UPDATE ltcdogeming SET btndvs = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
//-----------------
mysql_query("UPDATE ltcdogeming SET DVSm = '$ySummaDVSm' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
//-----------------
$rmingDSdate = "0";
mysql_query("UPDATE ltcdogeming SET timebtndvs = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdfirst = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET kountttMINI = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
header('Location:index.php');
endif;
}
?>
<?Php
if (isset($_POST['subMining6'])) {    //hash300
if ($CntMXC == "0.00000000000") :
echo "<script>alert(\"".$BpwrPl.""."\");</script>";
 header('Refresh: 1; URL=buyhash.php');
exit;
endif;
if($BtmnMXC == "MINING"):
//-------------------------------------------------------------------------------------
if ($BtnDoge == "STOP") {
date_default_timezone_set('UTC');
$atTMdogeM = $arrayTimeC['timebtndoge'];
$datebrDogeM= date("d-m-Y H:i:s");
$tmOurdogeM = (strtotime($datebrDogeM)- strtotime($atTMdogeM));
$xCountedCCBDogeM = ($SummaDoge + ($tmOurdogeM * $LBCDoge));
$ySummaDogeM = number_format($xCountedCCBDogeM,11,'.','');
$yCountedCCBDogeM = ($tmOurdogeM * $LBCDoge);
$yzCountedCCBDogeM  = number_format($yCountedCCBDogeM,11,'.','');
mysql_query("UPDATE ltcdogeming SET btndoge = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET Cashdoge = '$ySummaDogeM' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
//------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)){
//------------------------------------
$DBherrefd = mysql_query("SELECT daycashdoge FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherherd = mysql_fetch_array($DBherrefd) or die(mysql_error());
$Refmaincashd = $Reherherd['daycashdoge'];
$Refpercentd = (($yzCountedCCBDogeM *5)/ 100);
$RefpercentdFO = number_format($Refpercentd,8,'.','');
$Refoursumd = ($Refmaincashd + $RefpercentdFO);
$RefoursumdFO = number_format($Refoursumd,8,'.','');
mysql_query("UPDATE greffer SET daycashdoge = '$RefoursumdFO' WHERE my_refflink='$ReReflink' ");
}
$rmingSdate = "0";
mysql_query("UPDATE ltcdogeming SET timebtndoge = '$rmingSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdfirst = '$rmingSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
}
//-------------------------------------------------------------------------------------
if ($BtnLtc == "STOP") {
date_default_timezone_set('UTC');
$atTMliteNR = $arrayTimeC['timebtnltc'];
$datebrLtcNR = date("d-m-Y H:i:s");
$tmOurliteNR = (strtotime($datebrLtcNR)- strtotime($atTMliteNR));
$xCountedCCBLiteNR = ($SummaLtc + ($tmOurliteNR * $LBCLite));
$ySummaLtcR = number_format($xCountedCCBLiteNR,11,'.','');
$yCountedCCBLiteNR = ($tmOurliteNR * $LBCLite);
$yzCountedCCBLiteNR = number_format($yCountedCCBLiteNR,11,'.','');
mysql_query("UPDATE ltcdogeming SET btnltc = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET Cashlite = '$ySummaLtcR' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
//-----------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)){
//------------------------------------
$DBherrefl = mysql_query("SELECT daycashlite FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherherl = mysql_fetch_array($DBherrefl) or die(mysql_error());
$Refmaincashl = $Reherherl['daycashlite'];
$Refpercentl = (($yzCountedCCBLiteNR *5)/ 100);
$RefpercentlLOR = number_format($Refpercentl,8,'.','');
$Refoursuml = ($Refmaincashl + $RefpercentlLOR);
$RefoursumlLOR = number_format($Refoursuml,8,'.','');
mysql_query("UPDATE greffer SET daycashlite = '$RefoursumlLOR' WHERE my_refflink='$ReReflink' ");
}
$rmingSLdate = "0";
mysql_query("UPDATE ltcdogeming SET timebtnltc = '$rmingSLdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdtwo = '$rmingSLdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
}
//-------------------------------------------------------------------------------------
if ($Btmnl == "STOP") {
date_default_timezone_set('UTC');
$datebrNEW = date("d-m-Y H:i:s");
$tmbdatemNEW = (strtotime($datebrNEW)- strtotime($tmbdate));
$xCountedCCBNEW = ($Summa + ($tmbdatemNEW * $LBCAshC));
$yCountedCCBNEW = ($tmbdatemNEW * $LBCAshC);
$ySumma = number_format($xCountedCCBNEW,11,'.','');
$yzCountedCCBNEW = number_format($yCountedCCBNEW,11,'.','');
mysql_query("UPDATE gusers SET Cash = '$ySumma' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
//------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)) {
//------------------------------------
$DBherref = mysql_query("SELECT daycash FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherher = mysql_fetch_array($DBherref) or die(mysql_error());
$Refmaincash = $Reherher['daycash'];
$Refpercent = (($yzCountedCCBNEW *5)/ 100);
$RefoursumNUM = number_format($Refpercent,8,'.','');
$Refoursum = ($Refmaincash + $RefoursumNUM);
$RefoursumL = number_format($Refoursum,8,'.','');
mysql_query("UPDATE greffer SET daycash = '$RefoursumL' WHERE my_refflink='$ReReflink' ");
}
$rgdate = "0";
$tmbdatemzirro = "0";
mysql_query("UPDATE gusers SET timebtnb = '$rgdate' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET kounttt = '$tmbdatemzirro' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
}
//-------------------------------------------------------------------------------------
if ($BtmnDVS == "STOP") {
date_default_timezone_set('UTC');
$datebrNEWDVS = date("d-m-Y H:i:s");
$tmbdatemNEWDVS = (strtotime($datebrNEWDVS)- strtotime($tmDVSdate));
$xCountedBDVSNEW = ($DVST + ($tmbdatemNEWDVS * $ydvsKekundaF));
$ySummaDVS = number_format($xCountedBDVSNEW,11,'.','');
mysql_query("UPDATE gusers SET DVS = '$ySummaDVS' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
//---------------------------------------------------------
$rDVSgdate = "0";
$tmDVSgzirro = "0";
mysql_query("UPDATE gusers SET timebtnd = '$rDVSgdate' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET kountdvs = '$tmDVSgzirro' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
}
//-------------------------------------------------------------------------------------------
if ($BtnDvs == "STOP") {
date_default_timezone_set('UTC');
$atTMdvsNED = $arrayTimeC['timebtndvs'];
$datebrDvsmNED = date("d-m-Y H:i:s");
$tmOurDvsmNED = (strtotime($datebrDvsmNED)- strtotime($atTMdvsNED));
$xCountedBDVSMININED = ($MiniPower + ($tmOurDvsmNED * $ydvsKekundaFMINI));
$ySummaDVSmND = number_format($xCountedBDVSMININED,11,'.','');
mysql_query("UPDATE ltcdogeming SET btndvs = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET DVSm = '$ySummaDVSmND' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
//-----------------
$rmingDSdate = "0";
mysql_query("UPDATE ltcdogeming SET timebtndvs = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdfirst = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET kountttMINI = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
}
//-----------------------------------------------------------------------------------------------
date_default_timezone_set('UTC');
mysql_query("UPDATE gsmcnew SET mxbtmnl = 'STOP' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET btndvs = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET btndoge = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET btnml = 'MINING' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET DVSbtmnl = 'MINING' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
$rmingDdateH = date("d-m-Y H:i:s");
mysql_query("UPDATE gsmcnew SET timebtnmx = '$rmingDdateH' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
print "<body onload=\"Hspmup();\">";
  header('Location:index.php');
endif;
if ($BtmnMXC == "STOP"):
date_default_timezone_set('UTC');
$atTMHSPNEW = $aryMXTM['timebtnmx'];
$datebrHSPmNEW = date("d-m-Y H:i:s");
$tmOurHSPmNEW = (strtotime($datebrHSPmNEW)- strtotime($atTMHSPNEW));
$xCountedBDVSMININHSP = ($CntMXC + ($tmOurHSPmNEW * $ydvsKekundaFHSP));
$ySummaHSPm = number_format($xCountedBDVSMININHSP,11,'.','');
mysql_query("UPDATE gsmcnew SET mxbtmnl = 'MINING' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
//-----------------
mysql_query("UPDATE gsmcnew SET mxdvs = '$ySummaHSPm' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
//-----------------
$rmingDSdate = "0";
mysql_query("UPDATE gsmcnew SET timebtnmx = '$rmingDSdate' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
mysql_query("UPDATE gsmcnew SET kountmx = '$rmingDSdate' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
mysql_query("UPDATE gsmcnew SET kountttHSP = '$rmingDSdate' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
header('Location:index.php');
endif;
}
?>
<?Php
if (isset($_POST['subMining3'])) {   //---mining dog---
if ($CloudOur == "0.00000000000") :
echo "<script>alert(\"".$BpwrPl.""."\");</script>";
 header('Refresh: 1; URL=buyhash.php');
exit;
endif;
if($BtnDoge == "MINING"):
//---------------------------------------------------------------------------------------------------
if ($BtnLtc == "STOP") {
date_default_timezone_set('UTC');
$atTMliteNDO = $arrayTimeC['timebtnltc'];
$datebrLtcNDO = date("d-m-Y H:i:s");
$tmOurliteNDO = (strtotime($datebrLtcNDO)- strtotime($atTMliteNDO));
$xCountedCCBLiteNDO = ($SummaLtc + ($tmOurliteNDO * $LBCLite));
$ySummaLtcN = number_format($xCountedCCBLiteNDO,11,'.','');
$yCountedCCBLiteNDO = ($tmOurliteNDO * $LBCLite);
$yzCountedCCBLiteNDO = number_format($yCountedCCBLiteNDO,11,'.','');
mysql_query("UPDATE ltcdogeming SET btnltc = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
//----------------------------------------
mysql_query("UPDATE ltcdoge SET Cashlite = '$ySummaLtcN' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
//------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)){
//------------------------------------
$DBherrefl = mysql_query("SELECT daycashlite FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherherl = mysql_fetch_array($DBherrefl) or die(mysql_error());
$Refmaincashl = $Reherherl['daycashlite'];
$Refpercentl = (($yzCountedCCBLiteNDO *5)/ 100);
$RefpercentlLOR = number_format($Refpercentl,8,'.','');
$Refoursuml = ($Refmaincashl + $RefpercentlLOR);
$RefoursumlLOR = number_format($Refoursuml,8,'.','');
mysql_query("UPDATE greffer SET daycashlite = '$RefoursumlLOR' WHERE my_refflink='$ReReflink' ");
}
$rmingSLdate = "0";
mysql_query("UPDATE ltcdogeming SET timebtnltc = '$rmingSLdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdtwo = '$rmingSLdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
}
//---------------------------------------------------------------------------------------------------
if ($BtnDvs == "STOP") {
date_default_timezone_set('UTC');
$atTMdvsNEWD = $arrayTimeC['timebtndvs'];
$datebrDvsmNEWD = date("d-m-Y H:i:s");
$tmOurDvsmNEWD = (strtotime($datebrDvsmNEWD)- strtotime($atTMdvsNEWD));
$xCountedBDVSMININEWD = ($MiniPower + ($tmOurDvsmNEWD * $ydvsKekundaFMINI));
$ySummaDVSmD = number_format($xCountedBDVSMININEWD,11,'.','');
mysql_query("UPDATE ltcdogeming SET btndvs = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
//-----------------
mysql_query("UPDATE ltcdogeming SET DVSm = '$ySummaDVSmD' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
//-----------------
$rmingDSdate = "0";
mysql_query("UPDATE ltcdogeming SET timebtndvs = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdfirst = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET kountttMINI = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
}
//---------------------------------------------------------------------------------------------------
if ($Btmnl == "STOP") {
date_default_timezone_set('UTC');
$datebrNEW = date("d-m-Y H:i:s");
$tmbdatemNEW = (strtotime($datebrNEW)- strtotime($tmbdate));
$xCountedCCBNEW = ($Summa + ($tmbdatemNEW * $LBCAshC));
$yCountedCCBNEW = ($tmbdatemNEW * $LBCAshC);
$ySumma = number_format($xCountedCCBNEW,11,'.','');
$yzCountedCCBNEW = number_format($yCountedCCBNEW,11,'.','');
mysql_query("UPDATE gusers SET Cash = '$ySumma' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
//------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)) {
//------------------------------------
$DBherref = mysql_query("SELECT daycash FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherher = mysql_fetch_array($DBherref) or die(mysql_error());
$Refmaincash = $Reherher['daycash'];
$Refpercent = (($yzCountedCCBNEW *5)/ 100);
$RefoursumNUM = number_format($Refpercent,8,'.','');
$Refoursum = ($Refmaincash + $RefoursumNUM);
$RefoursumL = number_format($Refoursum,8,'.','');
mysql_query("UPDATE greffer SET daycash = '$RefoursumL' WHERE my_refflink='$ReReflink' ");
}
$rgdate = "0";
$tmbdatemzirro = "0";
mysql_query("UPDATE gusers SET timebtnb = '$rgdate' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET kounttt = '$tmbdatemzirro' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
}
//-------------------------------------------------------------------------------------
if ($BtmnDVS == "STOP") {
date_default_timezone_set('UTC');
$datebrNEWDVS = date("d-m-Y H:i:s");
$tmbdatemNEWDVS = (strtotime($datebrNEWDVS)- strtotime($tmDVSdate));
$xCountedBDVSNEW = ($DVST + ($tmbdatemNEWDVS * $ydvsKekundaF));
$ySummaDVS = number_format($xCountedBDVSNEW,11,'.','');
mysql_query("UPDATE gusers SET DVS = '$ySummaDVS' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
//---------------------------------------------------------
$rDVSgdate = "0";
$tmDVSgzirro = "0";
mysql_query("UPDATE gusers SET timebtnd = '$rDVSgdate' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET kountdvs = '$tmDVSgzirro' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
}
//-------------------------------------------------------------------------------------------
if ($BtmnMXC == "STOP") {
date_default_timezone_set('UTC');
$datebrNEWHSP = date("d-m-Y H:i:s");
$tmbdatemNEWHSP = (strtotime($datebrNEWHSP)- strtotime($atTMHSP));
$xCountedBHSPNEW = ($CntMXC + ($tmbdatemNEWHSP * $ydvsKekundaFHSP));
$ySummaHSPc = number_format($xCountedBHSPNEW,11,'.','');
mysql_query("UPDATE gsmcnew SET mxdvs = '$ySummaHSPc' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
//---------------------------------------------------------
$rDVSgdate = "0";
$tmDVSgzirro = "0";
mysql_query("UPDATE gsmcnew SET timebtnmx = '$rDVSgdate' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
mysql_query("UPDATE gsmcnew SET mxcount = '$tmDVSgzirro' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
mysql_query("UPDATE gsmcnew SET kountttHSP = '$tmDVSgzirro' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
}
//-------------------------------------------------------------------------------------------
date_default_timezone_set('UTC');
mysql_query("UPDATE ltcdogeming SET btndoge = 'STOP' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET btndvs = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET btnml = 'MINING' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET DVSbtmnl = 'MINING' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gsmcnew SET mxbtmnl = 'MINING' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
$rmingdate = date("d-m-Y H:i:s");
mysql_query("UPDATE ltcdogeming SET timebtndoge = '$rmingdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
print "<body onload=\"Dogeup();\">";
  header('Location:index.php');
endif;
if ($BtnDoge == "STOP"):
date_default_timezone_set('UTC');
$atTMdogeNEW = $arrayTimeC['timebtndoge'];
$datebrDogeNEW= date("d-m-Y H:i:s");
$tmOurdogeNEW = (strtotime($datebrDogeNEW)- strtotime($atTMdogeNEW));
$xCountedCCBDogeNEW = ($SummaDoge + ($tmOurdogeNEW * $LBCDoge));
$ySummaDoge = number_format($xCountedCCBDogeNEW,11,'.','');
$bSummaDoge = ($tmOurdogeNEW * $LBCDoge);
$bzSummaDoge = number_format($bSummaDoge,11,'.','');
mysql_query("UPDATE ltcdogeming SET btndoge = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET Cashdoge = '$ySummaDoge' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
//------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)){
//------------------------------------
$DBherrefd = mysql_query("SELECT daycashdoge FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherherd = mysql_fetch_array($DBherrefd) or die(mysql_error());
$Refmaincashd = $Reherherd['daycashdoge'];
$Refpercentd = (($bzSummaDoge *5)/ 100);
$RefpercentdFO = number_format($Refpercentd,8,'.','');
$Refoursumd = ($Refmaincashd + $RefpercentdFO);
$RefoursumdFO = number_format($Refoursumd,8,'.','');
mysql_query("UPDATE greffer SET daycashdoge = '$RefoursumdFO' WHERE my_refflink='$ReReflink' ");
}
$rmingSdate = "0";
mysql_query("UPDATE ltcdogeming SET timebtndoge = '$rmingSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdfirst = '$rmingSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
header('Location:index.php');
endif;
}
//-----------------------------------------------------------------------------------
?>
<?Php
if (isset($_POST['subMining4'])) {   //---mining LITE---
if ($CloudOurL == "0.00000000000") :
echo "<script>alert(\"".$BpwrPl.""."\");</script>";
 header('Refresh: 1; URL=buyhash.php');
exit;
endif;
if($BtnLtc == "MINING"):
//---------------------------------------------------------------------------------------------------
if ($BtnDoge == "STOP") {
date_default_timezone_set('UTC');
$atTMdogeM = $arrayTimeC['timebtndoge'];
$datebrDogeM= date("d-m-Y H:i:s");
$tmOurdogeM = (strtotime($datebrDogeM)- strtotime($atTMdogeM));
$xCountedCCBDogeM = ($SummaDoge + ($tmOurdogeM * $LBCDoge));
$ySummaDogeM = number_format($xCountedCCBDogeM,11,'.','');
$yCountedCCBDogeM = ($tmOurdogeM * $LBCDoge);
$yzCountedCCBDogeM  = number_format($yCountedCCBDogeM,11,'.','');
mysql_query("UPDATE ltcdogeming SET btndoge = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET Cashdoge = '$ySummaDogeM' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
//------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)){
//------------------------------------
$DBherrefd = mysql_query("SELECT daycashdoge FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherherd = mysql_fetch_array($DBherrefd) or die(mysql_error());
$Refmaincashd = $Reherherd['daycashdoge'];
$Refpercentd = (($yzCountedCCBDogeM *5)/ 100);
$RefpercentdFO = number_format($Refpercentd,8,'.','');
$Refoursumd = ($Refmaincashd + $RefpercentdFO);
$RefoursumdFO = number_format($Refoursumd,8,'.','');
mysql_query("UPDATE greffer SET daycashdoge = '$RefoursumdFO' WHERE my_refflink='$ReReflink' ");
}
$rmingSdate = "0";
mysql_query("UPDATE ltcdogeming SET timebtndoge = '$rmingSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdfirst = '$rmingSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
}
//-------------------------------------------------------------------------------------
if ($BtnDvs == "STOP") {
date_default_timezone_set('UTC');
$atTMdvsNEWD = $arrayTimeC['timebtndvs'];
$datebrDvsmNEWD = date("d-m-Y H:i:s");
$tmOurDvsmNEWD = (strtotime($datebrDvsmNEWD)- strtotime($atTMdvsNEWD));
$xCountedBDVSMININEWD = ($MiniPower + ($tmOurDvsmNEWD * $ydvsKekundaFMINI));
$ySummaDVSmD = number_format($xCountedBDVSMININEWD,10,'.','');
mysql_query("UPDATE ltcdogeming SET btndvs = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
//-----------------
mysql_query("UPDATE ltcdogeming SET DVSm = '$ySummaDVSmD' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
//-----------------
$rmingDSdate = "0";
mysql_query("UPDATE ltcdogeming SET timebtndvs = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdfirst = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET kountttMINI = '$rmingDSdate' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
}
//---------------------------------------------------------------------------------------------------
if ($Btmnl == "STOP") {
date_default_timezone_set('UTC');
$datebrNEW = date("d-m-Y H:i:s");
$tmbdatemNEW = (strtotime($datebrNEW)- strtotime($tmbdate));
$xCountedCCBNEW = ($Summa + ($tmbdatemNEW * $LBCAshC));
$yCountedCCBNEW = ($tmbdatemNEW * $LBCAshC);
$ySumma = number_format($xCountedCCBNEW,11,'.','');
$yzCountedCCBNEW = number_format($yCountedCCBNEW,11,'.','');
mysql_query("UPDATE gusers SET Cash = '$ySumma' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
//------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)) {
//------------------------------------
$DBherref = mysql_query("SELECT daycash FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherher = mysql_fetch_array($DBherref) or die(mysql_error());
$Refmaincash = $Reherher['daycash'];
$Refpercent = (($yzCountedCCBNEW *5)/ 100);
$RefoursumNUM = number_format($Refpercent,8,'.','');
$Refoursum = ($Refmaincash + $RefoursumNUM);
$RefoursumL = number_format($Refoursum,8,'.','');
mysql_query("UPDATE greffer SET daycash = '$RefoursumL' WHERE my_refflink='$ReReflink' ");
}
$rgdate = "0";
$tmbdatemzirro = "0";
mysql_query("UPDATE gusers SET timebtnb = '$rgdate' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET kounttt = '$tmbdatemzirro' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
}
//-------------------------------------------------------------------------------------
if ($BtmnDVS == "STOP") {
date_default_timezone_set('UTC');
$datebrNEWDVS = date("d-m-Y H:i:s");
$tmbdatemNEWDVS = (strtotime($datebrNEWDVS)- strtotime($tmDVSdate));
$xCountedBDVSNEW = ($DVST + ($tmbdatemNEWDVS * $ydvsKekundaF));
$ySummaDVS = number_format($xCountedBDVSNEW,11,'.','');
mysql_query("UPDATE gusers SET DVS = '$ySummaDVS' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
//---------------------------------------------------------
$rDVSgdate = "0";
$tmDVSgzirro = "0";
mysql_query("UPDATE gusers SET timebtnd = '$rDVSgdate' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET kountdvs = '$tmDVSgzirro' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
}
//-------------------------------------------------------------------------------------------
if ($BtmnMXC == "STOP") {
date_default_timezone_set('UTC');
$datebrNEWHSP = date("d-m-Y H:i:s");
$tmbdatemNEWHSP = (strtotime($datebrNEWHSP)- strtotime($atTMHSP));
$xCountedBHSPNEW = ($CntMXC + ($tmbdatemNEWHSP * $ydvsKekundaFHSP));
$ySummaHSPc = number_format($xCountedBHSPNEW,11,'.','');
mysql_query("UPDATE gsmcnew SET mxdvs = '$ySummaHSPc' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
//---------------------------------------------------------
$rDVSgdate = "0";
$tmDVSgzirro = "0";
mysql_query("UPDATE gsmcnew SET timebtnmx = '$rDVSgdate' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
mysql_query("UPDATE gsmcnew SET mxcount = '$tmDVSgzirro' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
mysql_query("UPDATE gsmcnew SET kountttHSP = '$tmDVSgzirro' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
}
//-------------------------------------------------------------------------------------------
date_default_timezone_set('UTC');
mysql_query("UPDATE ltcdogeming SET btnltc = 'STOP' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET btndoge = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET btndvs = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET btnml = 'MINING' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET DVSbtmnl = 'MINING' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gsmcnew SET mxbtmnl = 'MINING' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
$rmingdateltc = date("d-m-Y H:i:s");
mysql_query("UPDATE ltcdogeming SET timebtnltc = '$rmingdateltc' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
print "<body onload=\"Liteup();\">";
  header('Location:index.php');
endif;
if ($BtnLtc == "STOP"):
date_default_timezone_set('UTC');
$datebrLtcNEW = date("d-m-Y H:i:s");
$atTMliteNEW = $arrayTimeC['timebtnltc'];
$tmOurliteNEW = (strtotime($datebrLtcNEW)- strtotime($atTMliteNEW));
$xCountedCCBLiteNEW = ($SummaLtc + ($tmOurliteNEW * $LBCLite));
$ySummaLtc = number_format($xCountedCCBLiteNEW,11,'.','');
$yCountedCCBLiteNEW = ($tmOurliteNEW * $LBCLite);
$yzCountedCCBLiteNEW = number_format($yCountedCCBLiteNEW,11,'.','');
mysql_query("UPDATE ltcdogeming SET btnltc = 'MINING' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET Cashlite = '$ySummaLtc' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
//------------------------------------
$DBPerMy = mysql_query("SELECT reffer_id FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$RePerMy = mysql_fetch_array($DBPerMy) or die(mysql_error());
$ReReflink = $RePerMy['reffer_id'];
if (!empty($ReReflink)){
//------------------------------------
$DBherrefl = mysql_query("SELECT daycashlite FROM greffer WHERE my_refflink='$ReReflink' ");
$Reherherl = mysql_fetch_array($DBherrefl) or die(mysql_error());
$Refmaincashl = $Reherherl['daycashlite'];
$Refpercentl = (($yzCountedCCBLiteNEW * 5)/ 100);
$RefpercentlLOR = number_format($Refpercentl,8,'.','');
$Refoursuml = ($Refmaincashl + $RefpercentlLOR);
$RefoursumlLOR = number_format($Refoursuml,8,'.','');
mysql_query("UPDATE greffer SET daycashlite = '$RefoursumlLOR' WHERE my_refflink='$ReReflink' ");
}
$rmingSdatelt = "0";
mysql_query("UPDATE ltcdogeming SET timebtnltc = '$rmingSdatelt' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdogeming SET cntdtwo = '$rmingSdatelt' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1' ");
header('Location:index.php');
endif;
}
?>