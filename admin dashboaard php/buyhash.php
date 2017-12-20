<?Php
ini_set('display_errors', 1);
error_reporting(1);
include_once("bd.php");
if(empty($login) and empty($password)){
require("main.html");
}
include_once("incminingltcdog.php");
include_once("initsmc.php");
include_once("Withbit.php");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" rel="stylesheet"/>


	<title>CMINE - Cloud Mining</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="css/range.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

        <!-- This is what you need -->
  <script src="https://cdn.jsdelivr.net/es6-promise/latest/es6-promise.auto.min.js"></script> <!-- IE11 support -->
  <script src="./dist/sweetalert2.js"></script>
  <link rel="stylesheet" href="dist/sweetalert2.min.css">
  <!--.......................-->

    <script>
function Ftest (obj)
{
if (this.ST) return; var ov = obj.value;
var ovrl = ov.replace (/\d*\.?\d*/, '').length; this.ST = true;
if (ovrl > 0) {obj.value = obj.lang; Fshowerror (obj); return}
obj.lang = obj.value; this.ST = null;
}

function Fshowerror (obj)
{
if (!this.OBJ)
   {this.OBJ = obj; obj.style.backgroundColor = 'pink'; this.TIM = setTimeout (Fshowerror, 50)}
else
   {this.OBJ.style.backgroundColor = ''; clearTimeout (this.TIM); this.ST = null; Ftest (this.OBJ); this.OBJ = null}
}
</script>
<script>
function look(type){
param=document.getElementById(type);
if(param.style.display == "none") param.style.display = "block";
else param.style.display = "none"
}
</script>
</head>
<body>
<?Php
$DBCash = mysql_query("SELECT Cash FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$DBLtcDoge = mysql_query("SELECT Cashdoge FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$array = mysql_fetch_array($DBCash);
$arrayCdoge = mysql_fetch_array($DBLtcDoge);
$arrayCF = $array['Cash'];
$CashDoge = $arrayCdoge['Cashdoge'];
$arrayCVF = number_format($arrayCF, 8, '.', '');
$CashDogeF = number_format($CashDoge, 8, '.','');
$currency = "USD";
$exchange_query_result = file_get_contents('https://blockchain.info/ru/ticker');
$exchange_data_obj = json_decode($exchange_query_result);
$KURS= "USD in BTC: ".$exchange_data_obj->$currency->last;
//-----------------------------------------------------------
$DBRATE = mysql_query("SELECT usdinbtc, dogeusd, dogebtc FROM costsmc WHERE id='1' ");
$arrayRATE = mysql_fetch_array($DBRATE);
$usdinbtc = $arrayRATE['usdinbtc'];
$dogeusd = $arrayRATE['dogeusd'];
$dogebtc = $arrayRATE['dogebtc'];
$DBDepWrite = mysql_query("SELECT deposit FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayDEPWrite = mysql_fetch_array($DBDepWrite) or die(mysql_error());
$Mydep = $arrayDEPWrite['deposit'];
$DBDepDOGE = mysql_query("SELECT dogedeposit FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$arrayDEPDOGE = mysql_fetch_array($DBDepDOGE) or die(mysql_error());
$MydepDOGE = $arrayDEPDOGE['dogedeposit'];
$DBINCML = mysql_query("SELECT minbitdep FROM costsmc WHERE id='1' ");
$arrayINCML = mysql_fetch_array($DBINCML);
$arINMINL = $arrayINCML['minbitdep'];
$DBINCMLD = mysql_query("SELECT mindogedep FROM costsmc WHERE id='1' ");
$arrayINCMLD = mysql_fetch_array($DBINCMLD);
$arINMINLD = $arrayINCMLD['mindogedep'];
//-------------------------------------------------------------
//----NEW------------------------------------------------------
//-------------------------------------------------------------
$CBCash = mysql_query("SELECT DVS FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayD = mysql_fetch_array($CBCash) or die(mysql_error()) ;
$DVST=$arrayD['DVS'];
$DBMXCOU = mysql_query("SELECT mxdvs FROM gsmcnew WHERE slogin='$login'AND spassword='$password' AND activation='1' ");
$arayMXCOUN = mysql_fetch_array($DBMXCOU) or die(mysql_error());
$CntMXB = $arayMXCOUN['mxdvs'];
//-----------------------------------------------------------
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
$arrDvsM = $arrbuttcrupt['btndvs'];
$GENHIS = $GENLOG['id'];
$GENmdl = md5($GENHIS);
$GENfilehis = $GENmdl.".txt";
$GENadrhis = 'histor/'.$GENfilehis;
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
$Ourtwo = ($arrFive + $arrSix);
$OurCloudsM = ($Ourone + $Ourtwo);
$SumReal= number_format($array['Cash'],8,'.','');
$SumBit = number_format($array['Cash'],8,'.','');
$SumBitm = number_format($array['Cash'],8,'.','');
$SumBitmm = number_format($array['Cash'],8,'.','');
//-------------------------------------------------------------
$MINICash = mysql_query("SELECT Cashdoge FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$arMIN = mysql_fetch_array($MINICash)or die(mysql_error()) ;
$SumReald=number_format($arMIN['Cashdoge'],8,'.','');
$REALDogem=number_format($arMIN['Cashdoge'],8,'.','');
$SumMiniDogeR = number_format($REALDoge,8,'.','');
$EasySumD = number_format($arMIN['Cashdoge'],8,'.','');
$EasySumDm = number_format($arMIN['Cashdoge'],8,'.','');
$SumBuyF = number_format($SumReal,8,'.','');
$SumBuy=number_format($array['Cash'],8,'.','');
$PriceDVS=number_format($hashseven,8,'.','');
$inmoney = number_format($_POST['shabuybit'],8,'.','');
$nombreMoney = number_format($inmoney, 8, '.', '');
if(empty($_POST['shabuybit'])){
$intDVS=$SumBuy/$PriceDVS;
}
else{
$intDVS=$nombreMoney/$PriceDVS;
$SumBuy=$nombreMoney;
$NOTDVS="Please fill up your account";
}
if(isset($_POST['btnCrpt'])){
$MyUSD = number_format($_POST['shabuybit'],8,'.','');
mysql_query("UPDATE gusers SET Pricecl = '$MyUSD' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
 header('Refresh: 0; URL=buygorlhash.php');
}
if(isset($_POST['MbtnCrpt'])){
$MyUSD1 =  number_format($_POST['mhsbuybit'],8,'.','');
mysql_query("UPDATE gusers SET Pricecl = '$MyUSD1' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
 header('Refresh: 0; URL=buygorlhash.php');
}
//---------------------MAIN GENERAL-----------------------------------
//-----------------------------ShaBIT---------------------------------------
if  (isset($_POST['btnBitPay'])) {
if ($OurCloudsM == "0") {
if ($SumBuy == "0"){
echo "<script>alert(\" ".$EntrAm."\");</script>";
 header('Refresh: 1; URL=buyhash.php');
exit;
}
$DVSMAIN=$intDVS+$DVST;
$SumNow=$SumReal-$SumBuy;
if ($SumReal < $SumBuy ) {
echo "Not enough money!";
echo "<script>alert(\" ".$Nomny."\");</script>";
 header('Refresh: 1; URL=buyhash.php');
exit;
}
else{
mysql_query("UPDATE gusers SET DVS = '$DVSMAIN' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE gusers SET Cash = '$SumNow' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
$hrefdate = date("d-m-Y  H:i");
$hisbu = $hrefdate." - "." ".$BuyedH." ".$intDVS." GH/s".'<br>';
//----------------------------------------------------------------------
  $text_1d=file_get_contents($GENadrhis);
  $fdlz=$hisbu.$text_1d;
  $f_outz = fopen($GENadrhis,"w");
  fwrite($f_outz, $fdlz);
  fclose($f_outz);
//----------------------------------------------------------------------
$Ybght = $Ybug." ".$intDVS;
echo "<script>alert(\" ".$Ybght." GH/s"."\");</script>";
  header('Refresh: 2; URL=index.php');
  exit;
				}
				}

else {
mysql_query("UPDATE gusers SET rulebuy = 'false' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
 header('Refresh: 2; URL=index.php');
  exit;
}
				}
//------------------------------------------------ShaBit-----------End------------------------------------
//-------------------------------------------------------------
$SumBuyFd = number_format($SumReald,8,'.','');
$SumBuyd=number_format($arrayCdoge['Cashdoge'],8,'.','');
$PriceDVSD=number_format($Prdogesvn,8,'.','');
$inmoneyd = number_format($_POST['shabuydoge'],8,'.','');
$nombreMoneyd = number_format($inmoneyd, 8, '.', '');
if(empty($_POST['shabuydoge'])){
$intDVSd=$SumBuyd/$PriceDVSD;
}
else{
$intDVSd=$nombreMoneyd/$PriceDVSD;
$SumBuyd=$nombreMoneyd;
$NOTDVS="Please fill up your account";
}
//-----------------------------ShaDoge---------------------------------------
if  (isset($_POST['btnDogePay'])) {
if ($OurCloudsM == "0") {
if ($SumBuyd == "0"){
echo "<script>alert(\" ".$EntrAm."\");</script>";
 header('Refresh: 1; URL=buyhash.php');
exit;
}
else{
$intDVSd=$nombreMoneyd/$PriceDVSD;
$SumBuyd=$nombreMoneyd;
$NOTDVS="Please fill up your account";
}
$usersevd = $_POST['shabuydoge'];
$DVSMAIND=$intDVSd+$DVST;
$SumNowd=$SumReald-$SumBuyd;
if ($SumReald < $SumBuyd ) {
echo "Not enough money!";
echo "<script>alert(\" ".$Nomny."\");</script>";
 header('Refresh: 1; URL=buyhash.php');
exit;
}
else{
mysql_query("UPDATE gusers SET DVS = '$DVSMAIND' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE ltcdoge SET Cashdoge = '$SumNowd' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1'");
$hrefdate = date("d-m-Y  H:i");
$hisbu = $hrefdate." - "." ".$BuyedH." ".$intDVSd." GH/s".'<br>';
//----------------------------------------------------------------------
  $text_1d=file_get_contents($GENadrhis);
  $fdlz=$hisbu.$text_1d;
  $f_outz = fopen($GENadrhis,"w");
  fwrite($f_outz, $fdlz);
  fclose($f_outz);
//----------------------------------------------------------------------
$Ybght = $Ybug." ".$intDVSd;
echo "<script>alert(\" ".$Ybght." GH/s"."\");</script>";
  header('Refresh: 2; URL=index.php');
  exit;
				}
				}
else {
mysql_query("UPDATE gusers SET rulebuy = 'false' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
 header('Refresh: 2; URL=index.php');
  exit;
}
				}
//------------------------------------------------ShaDoge-----------End------------------------------------
//----------------------------------------------MAIN GENERAL------------End-------------------------
//---------------------MAIN GENERAL2-----------------------------------
$SumBuyFml = number_format($SumReal,8,'.','');
$SumBuyml=number_format($array['Cash'],8,'.','');
$PriceDVSml=number_format($hashfive,8,'.','');
$inmoneyml = number_format($_POST['mhsbuybit'],8,'.','');
$nombreMoneyml = number_format($inmoneyml, 8, '.', '');
if(empty($_POST['mhsbuybit'])){
$intDVSml=$SumBuyml/$PriceDVSml;
}
else{
$intDVSml=$nombreMoneyml/$PriceDVSml;
$SumBuyml=$nombreMoneyml;
$NOTDVSl="Please fill up your account";
}
//-----------------------------MhsBIT---------------------------------------
if  (isset($_POST['MbtnBitPay'])) {
if ($OurCloudsM == "0") {
if ($SumBuyml == "0"){
echo "<script>alert(\" ".$EntrAm."\");</script>";
 header('Refresh: 1; URL=buyhash.php');
exit;
}
$DVSMAINml=$intDVSml+$DVSMini;
$SumNowml=$SumReal-$SumBuyml;
if ($SumReal < $SumBuyml ) {
echo "Not enough money!";
echo "<script>alert(\" ".$Nomny."\");</script>";
 header('Refresh: 1; URL=buyhash.php');
exit;
}
else{
mysql_query("UPDATE ltcdogeming SET DVSm = '$DVSMAINml' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1'");
mysql_query("UPDATE gusers SET Cash = '$SumNowml' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
$hrefdate = date("d-m-Y  H:i");
$hisbu = $hrefdate." - "." ".$BuyedH." ".$intDVSml." MH/s".'<br>';
//----------------------------------------------------------------------
  $text_1d=file_get_contents($GENadrhis);
  $fdlz=$hisbu.$text_1d;
  $f_outz = fopen($GENadrhis,"w");
  fwrite($f_outz, $fdlz);
  fclose($f_outz);
//----------------------------------------------------------------------
$Ybght = $Ybug." ".$intDVSml;
echo "<script>alert(\" ".$Ybght." MH/s"."\");</script>";
  header('Refresh: 2; URL=index.php');
  exit;
				}
				}

else {
mysql_query("UPDATE gusers SET rulebuy = 'false' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
 header('Refresh: 2; URL=index.php');
  exit;
}
				}
//------------------------------------------------MhsBit-----------End------------------------------------
//-------------------------------------------------------------
$SumBuyFdm = number_format($SumReald,8,'.','');
$SumBuydm=number_format($arrayCdoge['Cashdoge'],8,'.','');
$PriceDVSDm=number_format($PrDgFive,8,'.','');
$inmoneydm = number_format($_POST['mhsbuydoge'],8,'.','');
$nombreMoneydm = number_format($inmoneydm, 8, '.', '');
if(empty($_POST['mhsbuydoge'])){
$intDVSdm=$SumBuydm/$PriceDVSDm;
}
else{
$intDVSdm=$nombreMoneydm/$PriceDVSDm;
$SumBuydm=$nombreMoneydm;
$NOTDVS="Please fill up your account";
}
//-----------------------------MhsDoge---------------------------------------
if  (isset($_POST['MbtnDogePay'])) {
if ($OurCloudsM == "0") {
if ($SumBuyd == "0"){
echo "<script>alert(\" ".$EntrAm."\");</script>";
 header('Refresh: 1; URL=buyhash.php');
exit;
}
else{
$intDVSdm=$nombreMoneydm/$PriceDVSDm;
$SumBuydm=$nombreMoneydm;
$NOTDVS="Please fill up your account";
}
$usersevdm = $_POST['mhsbuydoge'];
$DVSMAINDm = $intDVSdm+$DVSMini;
$SumNowdm = $SumReald-$SumBuydm;
if ($SumReald < $SumBuydm ) {
echo "Not enough money!";
echo "<script>alert(\" ".$Nomny."\");</script>";
 header('Refresh: 1; URL=buyhash.php');
exit;
}
else{
mysql_query("UPDATE ltcdogeming SET DVSm = '$DVSMAINDm' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1'");
mysql_query("UPDATE ltcdoge SET Cashdoge = '$SumNowdm' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1'");
$hrefdate = date("d-m-Y  H:i");
$hisbu = $hrefdate." - "." ".$BuyedH." ".$intDVSdm." MH/s".'<br>';
//----------------------------------------------------------------------
  $text_1d=file_get_contents($GENadrhis);
  $fdlz=$hisbu.$text_1d;
  $f_outz = fopen($GENadrhis,"w");
  fwrite($f_outz, $fdlz);
  fclose($f_outz);
//----------------------------------------------------------------------
$Ybght = $Ybug." ".$intDVSdm;
echo "<script>alert(\" ".$Ybght." MH/s"."\");</script>";
  header('Refresh: 2; URL=index.php');
  exit;
				}
				}
else {
mysql_query("UPDATE gusers SET rulebuy = 'false' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
 header('Refresh: 2; URL=index.php');
  exit;
}
				}
//------------------------------------------------MhsDoge-----------End------------------------------------
//----------------------------------------------MAIN GENERAL2----------End---------------------------
?>
<style type="text/css">
	body {
	    background-image: url(assets/img/b1.jpg);
	}
</style>
                   	          <!-- Modal20 -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal20" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content" Style="background: url(assets/img/faces/tbl1.png);">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h3 class="modal-title" Style=" color: #FFFFFF;"><?Php echo $Slctpwr; ?></h3>
		                      </div>
		                      <div class="modal-body">
         <form class="frmSHA" name="frmSHA" id= "frmSHA" method="post" action="">
         <input type="text" id="hdndoge" name="hdndoge" value="<?Php echo $Prdgsvn; ?>" hidden="hidden" />
         <input type="text" id="hdnbit" name="hdnbit" value="<?Php echo $hashsvn; ?>" hidden="hidden" />
         <input type="text" id="shacostusd" name="shacostusd" value="<?Php echo $SUSD1 = number_format(($usdinbtc * $hashsvn),2,'.',''); ?>" hidden="hidden" />
         <input type="range" id="size" name="size" min="10" max="1000" step="1" oninput="sizePic(); GetCalcBIT();" value="10" />
             <h3 Style="color: #FFFFFF;"><?Php echo $Orpwr; ?></h3> <br>
             <div align="center"><h3 Style=" color: #FFFFFF;">GH/s:</h3> </div>
            <div align="center"><input type="text" class="form-control" id="textcallb" name="textcallb" oninput="GetCalcBIT(); Ftest (this)"
       onpropertychange="if ('v' == '\v' && parseFloat (navigator.userAgent.split ('MSIE ') [1].split (';') [0]) <= 9) Ftest (this)" value="10" Style=" font-size: x-large; text-align: center;"/> </div>
          <div align="center"><h3 Style="color: #FFFFFF;"><?Php echo $PriceCst.":"; ?></h3></div>
          <div align="center"><h3 Style="color: #FFFFFF;"><div id="txtSHA"></div></h3></div>
          <input type="text" id="shabuybit" name="shabuybit" oninput="Ftest (this)"
       onpropertychange="if ('v' == '\v' && parseFloat (navigator.userAgent.split ('MSIE ') [1].split (';') [0]) <= 9) Ftest (this)" hidden="hidden" />
        <input type="text" id="shabuydoge" name="shabuydoge" oninput="Ftest (this)"
       onpropertychange="if ('v' == '\v' && parseFloat (navigator.userAgent.split ('MSIE ') [1].split (';') [0]) <= 9) Ftest (this)" hidden="hidden" />
        <input type="text" id="shabuyusd" name="shabuyusd" oninput="Ftest (this)"
       onpropertychange="if ('v' == '\v' && parseFloat (navigator.userAgent.split ('MSIE ') [1].split (';') [0]) <= 9) Ftest (this)" hidden="hidden" />
          <div align="center"><h3 Style="color: #FFFFFF;"><div id="txtSHAD"></div></h3></div>
          <div align="center"><h3 Style="color: #FFFFFF;"><div id="txtSHADUSD"></div></h3></div> <br>
          <a href="javascript:look('divone');" name="btnBlnc" id="btnBlnc" class="btn btn-primary btn-block"><?Php echo $Pyfb; ?></a>
          <div id="divone" style="display:none">
           <div align="center"><img img src="images/bitltl.png" Style="width: 10%; height: 10%;" alt="Bitcoin"/></div>
           <div align="center"><?Php echo " ".$arrayCVF." "; ?></div>
           <div align="center"><button type="submit" name="btnBitPay" id="btnBitPay" class="btn btn-primary"><?Php echo $Pyblnc." Bitcoin"; ?></button></div><br>
           <div align="center"><img img src="images/dogeltl.png" Style="width: 10%; height: 10%;" alt="Dogecoin"/></div>
           <div align="center"><?Php echo " ".$CashDogeF." "; ?></div>
           <div align="center"><button type="submit" name="btnDogePay" id="btnDogePay" class="btn btn-primary"><?Php echo $Pyblnc." Dogecoin"; ?></button></div>
          </div>
           <input type="submit" name="btnCrpt" id="btnCrpt" value= "<?Php echo $PyCrp; ?>" class="btn btn-primary btn-block">
          <a href="javascript:look('divthree');" name="btnGnrt" id="btnGnrt" class="btn btn-primary btn-block"><?Php echo $Gnrtn; ?></a>
          <div id="divthree" style="display:none">
           <div align="center"><a data-toggle="modal" href="#myModal40" name="btnBitGnrt" id="btnBitGnrt" class="btn btn-primary">Bitcoin</a></div><br>
           <div align="center"><a data-toggle="modal" href="#myModal50" name="btnDogeGnrt" id="btnDogeGnrt" class="btn btn-primary">Dogecoin</a></div>
          </div>
          </form>
          </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal20 -->

                    	          <!-- Modal30 -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal30" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content" Style="background: url(assets/img/faces/tbl1.png);">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h3 class="modal-title" Style=" color: #FFFFFF;"><?Php echo $Slctpwr; ?></h3>
		                      </div>
		                      <div class="modal-body">
              <form class="frmMHS" name="frmMHS" id= "frmMHS" method="post" action="">
               <input type="text" id="mhsdoge" name="mhsdoge" value="<?Php echo $PrDgFivef; ?>" hidden="hidden" />
                <input type="text" id="mhscost" name="mhscost" value="<?Php echo $PriceBitA; ?>" hidden="hidden" />
                <input type="text" id="mhscostusd" name="mhscostusd" value="<?Php echo $MUSD1 = number_format(($usdinbtc * $PriceBitA),2,'.',''); ?>" hidden="hidden" />
              <input type="range" id="size1" name="size1" min="1" max="1000" step="1" oninput="sizePic1(); GetCalcMHS();" value="1" />
             <h3 Style="color: #FFFFFF;"><?Php echo $Orpwr; ?></h3> <br>
             <div align="center"><h3 Style=" color: #FFFFFF;">MH/s:</h3> </div>
            <div align="center"><input type="text" class="form-control" id="textcallbv" name="textcallbv" oninput="GetCalcMHS(); Ftest (this)"
       onpropertychange="if ('v' == '\v' && parseFloat (navigator.userAgent.split ('MSIE ') [1].split (';') [0]) <= 9) Ftest (this)" value="1" Style=" font-size: x-large; text-align: center;"/> </div>
          <div align="center"><h3 Style="color: #FFFFFF;"><?Php echo $PriceCst.":"; ?></h3></div>
            <div align="center"><h3 Style="color: #FFFFFF;"><div id="txtMHS"></div></h3></div>
              <input type="text" id="mhsbuybit" name="mhsbuybit" oninput="Ftest (this)"
       onpropertychange="if ('v' == '\v' && parseFloat (navigator.userAgent.split ('MSIE ') [1].split (';') [0]) <= 9) Ftest (this)" hidden="hidden" />
        <input type="text" id="mhsbuydoge" name="mhsbuydoge" oninput="Ftest (this)"
       onpropertychange="if ('v' == '\v' && parseFloat (navigator.userAgent.split ('MSIE ') [1].split (';') [0]) <= 9) Ftest (this)" hidden="hidden" />
       <input type="text" id="mhsbuyusd" name="mhsbuyusd" oninput="Ftest (this)"
       onpropertychange="if ('v' == '\v' && parseFloat (navigator.userAgent.split ('MSIE ') [1].split (';') [0]) <= 9) Ftest (this)" hidden="hidden" />
          <div align="center"><h3 Style="color: #FFFFFF;"><div id="txtMHSD"></div></h3></div>
           <div align="center"><h3 Style="color: #FFFFFF;"><div id="txtMUHSD"></div></h3></div><br>
          <a href="javascript:look('divtwo');" name="MbtnBlnc" id="MbtnBlnc" class="btn btn-primary btn-block"><?Php echo $Pyfb; ?></a>
          <div id="divtwo" style="display:none">
           <div align="center"><img img src="images/bitltl.png" Style="width: 10%; height: 10%;" alt="Bitcoin"/></div>
           <div align="center"><?Php echo " ".$arrayCVF." "; ?></div>
           <div align="center"><button type="submit" name="MbtnBitPay" id="MbtnBitPay" class="btn btn-primary"><?Php echo $Pyblnc." Bitcoin"; ?></button></div><br>
           <div align="center"><img img src="images/dogeltl.png" Style="width: 10%; height: 10%;" alt="Dogecoin"/></div>
           <div align="center"><?Php echo " ".$CashDogeF." "; ?></div>
           <div align="center"><button type="submit" name="MbtnDogePay" id="MbtnDogePay" class="btn btn-primary"><?Php echo $Pyblnc." Dogecoin"; ?></button></div>
          </div>
          <button type="submit" name="MbtnCrpt" id="MbtnCrpt" class="btn btn-primary btn-block"><?Php echo $PyCrp; ?></button>
          <a href="javascript:look('divfore');" name="MbtnGnrt" id="MbtnGnrt" class="btn btn-primary btn-block"><?Php echo $Gnrtn; ?></a>
          <div id="divfore" style="display:none">
           <div align="center"><a data-toggle="modal" href="#myModal40" name="MbtnBitGnrt" id="MbtnBitGnrt" class="btn btn-primary">Bitcoin</a></div><br>
           <div align="center"><a data-toggle="modal" href="#myModal50" name="MbtnDogeGnrt" id="MbtnDogeGnrt" class="btn btn-primary">Dogecoin</a></div>
          </div>
          </form>






















		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal30 -->

                  	          <!-- Modal40 -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal40" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content" Style="background: url(assets/img/faces/tbl1.png);">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h3 class="modal-title" Style=" color: #FFFFFF;"><?Php echo $Gnrtn; ?></h3>
		                      </div>
		                      <div class="modal-body">
                              <form action="Intgendb.php" method="post" name="frmBitcoin" class="frmBitcoin" id="frmBitcoin">
                                           <h3><?Php echo $MinDpst.": ".$arINMINL." BTC"; ?></h3>
                                          <h3><?Php echo $Mydep; ?></h3>
                                          <button type="submit" name="Subdeposit" id="Subdeposit" class="btn btn-primary"><?Php echo $Gnrtn; ?></button>
                                          <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true"><?Php echo $ClsWin; ?></button>
                                         </form>
          </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal40 -->

                          	          <!-- Modal50 -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal50" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content" Style="background: url(assets/img/faces/tbl1.png);">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h3 class="modal-title" Style=" color: #FFFFFF;"><?Php echo $Gnrtn; ?></h3>
		                      </div>
		                      <div class="modal-body">
                              <form action="Intgendbd.php" method="post" name="frmDogecoin" class="frmDogecoin" id="frmDogecoin">
                                           <h3><?Php echo $MinDpst.": ".$arINMINLD." Doge"; ?></h3>
                                          <h3><?Php echo $MydepDOGE; ?></h3>
                                          <button type="submit" name="Subdoge" id="Subdoge" class="btn btn-primary"><?Php echo $Gnrtn; ?></button>
                                          <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true"><?Php echo $ClsWin; ?></button>
                                         </form>
          </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal50 -->

                               	          <!-- Modal60 -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal60" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content" Style="background: url(assets/img/faces/tbl1.png);">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h3 class="modal-title" Style=" color: #FFFFFF;">?</h3>
		                      </div>
		                      <div class="modal-body">
                               <h3><?Php echo $SupZag; ?></h3>
<form name="Comments" method="post" action="supp.php" id="Form1">
<input name="mmail" type="email" id="mmail" class="form-control" placeholder = "<?Php echo $LtMail; ?>" required><br>
<textarea name="TextArea1" id="TextArea1" style="border: 1px solid rgb(192, 192, 192); width: 100%; height: 206px; font-family: Arial; font-size: 13px; " rows="5" cols="27"></textarea><br>
<input id="Button2" name="" value="<?Php echo $ClrSup; ?>" class="btn btn-primary" type="reset">
<input type="submit" id="Button1" name="ButtonSend" value="<?Php echo $SupSnd; ?>" class="btn btn-primary">
</form>
                              </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal60 -->

                                                    	          <!-- Moda410 -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModa410" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content" Style="background: url(assets/img/faces/tbl1.png);">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h3 class="modal-title" Style=" color: #FFFFFF;"><?Php echo $WithdrawLI; ?></h3>
		                      </div>
		                      <div class="modal-body">
                               <h3 Style = "color: #FFFFFF;"><?Php echo $WithdrawLIM.": ".$MINWITHbtc." BTC"; ?></h3>
                               <form action="Withbit.php" method="post" name="frmWithBit" class="frmWithBit" id="frmWithBit">
                                          <p><?Php echo $WithdrawLIM1; ?></p>
                                          <p><?Php echo $feewthb; ?></p>
                                          <input type="text" class="form-control" id="textwithdraw" name="textwithdraw" oninput="Ftest (this)"
       onpropertychange="if ('v' == '\v' && parseFloat (navigator.userAgent.split ('MSIE ') [1].split (';') [0]) <= 9) Ftest (this)" value="<?Php echo $arrayCVF; ?>" Style=" font-size: x-large; text-align: center;" required/>
										  <input type="text" name="txtWithdrawAdrw" id="txtWithdrawAdrw" value="<?Php echo $adrwthbtc; ?>" class="form-control" placeholder = "Bitcoin <?Php echo $LWall; ?> " Style=" font-size: x-large; text-align: center;" required>
                                          <input type="text" maxlength="4" name="txtcpin" id="txtcpin" value="" oninput="Ftest (this)"
       onpropertychange="if ('v' == '\v' && parseFloat (navigator.userAgent.split ('MSIE ') [1].split (';') [0]) <= 9) Ftest (this)"  class="form-control" placeholder="<?Php echo $LPncd." ".$LPncd1; ?>" Style=" font-size: x-large; text-align: center;">
                                          <button type="submit" name="Subwithdraw" id="Subdwithdraw" class="btn btn-primary"><?Php echo $WithdrawLI; ?></button>
                                          <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true"><?Php echo $ClsWin; ?></button>
                                         </form>
                              </div>
		                  </div>
		              </div>
		          </div>
		          <!-- moda410 -->

                                                              	          <!-- Moda420 -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModa420" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content" Style="background: url(assets/img/faces/tbl1.png);">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h3 class="modal-title" Style=" color: #FFFFFF;"><?Php echo $WithdrawLI; ?></h3>
		                      </div>
		                      <div class="modal-body">
                               <h3 Style = "color: #FFFFFF;"><?Php echo $WithdrawLIM.": ".$MINWITHdgs." DOGE"; ?></h3>
                               <form action="Withbit.php" method="post" name="frmWithDoge" class="frmWithDoge" id="frmWithDoge">
                                          <p><?Php echo $WithdrawLIM1; ?></p>
                                          <p><?Php echo $feewthb; ?></p>
                                          <input type="text" class="form-control" id="textwithdrawd" name="textwithdrawd" oninput="Ftest (this)"
       onpropertychange="if ('v' == '\v' && parseFloat (navigator.userAgent.split ('MSIE ') [1].split (';') [0]) <= 9) Ftest (this)" value="<?Php echo $CashDogeF; ?>" Style=" font-size: x-large; text-align: center;"/>
                                          <input type="text" name="txtWithdrawAdrwd" id="txtWithdrawAdrwd" value="<?Php echo $adrwthdg; ?>" class="form-control" placeholder = "Dogecoin <?Php echo $LWall; ?> " Style=" font-size: x-large; text-align: center;" required>
                                          <input type="text" maxlength="4" name="txtcpin1" id="txtcpin1" value="" oninput="Ftest (this)"
       onpropertychange="if ('v' == '\v' && parseFloat (navigator.userAgent.split ('MSIE ') [1].split (';') [0]) <= 9) Ftest (this)"  class="form-control" placeholder="<?Php echo $LPncd." ".$LPncd1; ?>" Style=" font-size: x-large; text-align: center;">
                                          <button type="submit" name="Subwithdrawd" id="Subdwithdrawd" class="btn btn-primary"><?Php echo $WithdrawLI; ?></button>
                                          <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true"><?Php echo $ClsWin; ?></button>
                                         </form>
                              </div>
		                  </div>
		              </div>
		          </div>
		          <!-- moda420 -->

	<div class="wrapper">

	    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo" style="background: #333333;">
				<a href="index.php" class="simple-text">
				  CMine
				</a>
<center><span  style="color:#aaaaaa;"><?Php echo "<b>1 BTC</b> = ".number_format($usdinbtc,2,'.','')." USD"; ?></span></center>

			</div>

	    	<div class="sidebar-wrapper" style="background: #333333;">
	            <ul class="nav">
	                <li>
	                    <a href="index.php">
	                        <i class="fa fa-dashboard" aria-hidden="true"></i>
	                        <p><?Php echo $LDash; ?></p>
	                    </a>
	                </li>
	                <li class="active">
	                    <a href="buyhash.php">
	                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
	                        <p><?Php echo $LBuy; ?></p>
	                    </a>
	                </li>
	                <li>
	                    <a href="history.php">
	                        <i class="fa fa-book" aria-hidden="true"></i>
	                        <p><?Php echo $LHist; ?></p>
	                    </a>
	                </li>
                          <li>
	                    <a href="user.php">
	                        <i class="fa fa-user" aria-hidden="true"></i>
	                        <p><?Php echo $LUsp; ?></p>
	                    </a>
	                </li>


<li class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-money" aria-hidden="true"></i><span style="color:#ddd;">Withdraw</span><span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu" style="text-alig:center;">
<li style="text-alig:center;"><a data-toggle="modal" href="#myModa410">Bitcoin</li></a>
<li style="text-alig:center;"><a data-toggle="modal" href="#myModa420">Dogecoin</li></a>
  </ul>
</li>


	                <li>
	                    <a href="help.php">
	                        <i class="fa fa-question" aria-hidden="true"></i>
	                        <p><?Php echo $LHlp; ?></p>
	                    </a>
	                </li>

<li>
								<a href="exit.php" class="dropdown-toggle" title="<?Php echo $LExt; ?>">
	 							   <i class="fa fa-sign-out" aria-hidden="true"></i>

	 							   <p><?Php echo $LExt; ?></p>
		 						</a>
							</li>
					<li class="active-pro">
	                    <a data-toggle="modal" href="#myModal60">
	                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
	                        <p><?Php echo $LSupp; ?></p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><?Php echo $LBuy; ?></a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
                        	<li class="dropdown">
							</li>
                           	<li class="dropdown">
								


								<ul class="dropdown-menu">
								  <li>&nbsp;<img src="images/bitltl.png" Style="width: 20%; height: 20%;" alt="Bitcoin" /> <?Php echo $arrayCVF; ?> &nbsp;<a data-toggle="modal" href="#<?Php echo $Lblbtnb; ?>"><?Php echo $WithdrawLI; ?></a><p Style=" color: #CC0000;"><?Php echo $Lblwith; ?></p></li><br>
                                  <li>&nbsp;<img src="images/dogeltl.png" Style="width: 20%; height: 20%;" alt="Dogecoin" /> <?Php echo $CashDogeF; ?> &nbsp;<a data-toggle="modal" href="#<?Php echo $Lbldgd; ?>"><?Php echo $WithdrawLI; ?></a><p Style=" color: #CC0000;"><?Php echo $Lblwith1; ?></p></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							     <img src="<?Php echo $imgFlag; ?>" alt="" />▼
									<p class="hidden-lg hidden-md"><?Php echo $LCLan; ?></p>
								</a>
								<ul class="dropdown-menu">
								  <li><a href="languages/enf.php"><img src="images/United-Kingdom.png" alt="" /> English &nbsp;</a></li>
                                  <li><a href="languages/esf.php"><img src="images/Spain.png" alt="" /> Espanol &nbsp;</a></li>
                                  <li><a href="languages/chf.php"><img src="images/China.png" alt="" /> 中国 &nbsp;</a></li>
                                  <li><a href="languages/def.php"><img src="images/Germany.png" alt="" /> Deutsch &nbsp;</a></li>
                                  <li><a href="languages/ruf.php"><img src="images/Russia.png" alt="" />  Русский &nbsp;</a></li>
                                  <li><a href="languages/itf.php"><img src="images/Italy.png" alt="" /> Italiano </a></li>
								</ul>
							</li>
							



						</ul>
					</div>
				</div>
			</nav>

			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i><img src="images/bitltl.png" Style="width: 100%; height: 100%;" alt="Bitcoin" /> </i>
								</div>
								<div class="card-content">
									<p class="category"><?Php echo $LPBall; ?></p>
									<h3 class="title" Style=" font-size: medium"><?Php echo $arrayCVF; ?></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="fa fa-chevron-right" aria-hidden="true"></i>
 <a data-toggle="modal" href="#myModal40" Style=" font-size: large;">Deposit</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="orange">
									<i><img src="images/dogeltl.png" Style="width: 100%; height: 100%;" alt="Dogecoin" /> </i>
								</div>
								<div class="card-content">
									<p class="category"><?Php echo $LPBall; ?></p>
									<h3 class="title" Style=" font-size: medium"><?Php echo $CashDogeF; ?></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="fa fa-chevron-right" aria-hidden="true"></i>
 <a data-toggle="modal" href="#myModal50" Style=" font-size: large;">Deposit</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div>
									<i><img src="" alt="" /></i>
								</div>
								<div class="card-content">
									<p class="category"><?Php echo $PriceCst.": "; ?></p>
									<h3 class="title"><b><?Php echo "10 GH/s</b> = ".$hashten. " BTC"; //0.001 10ghs ?></h3><br>
                                    <h3 class="title"><b><?Php echo "10 GH/s</b> = ".$PriceTenDoge. " DOGE"; //0.001 10ghs ?></h3><br>
                                    <h3 class="title"><b><?Php echo "10 GH/s </b>= ".$SHUSD = number_format(($usdinbtc * $hashten),2,'.',''). " USD"; ?></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
<a data-toggle="modal" href="#myModal20" Style="font-size: large;">Buy Sha-256</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div>
									<i><img src="" alt="" /></i>
								</div>
								<div class="card-content">
									<p class="category"><?Php echo $PriceCst.": "; ?></p>
									<h3 class="title"><b><?Php echo "1 MH/s</b> = ".$PriceBitA. " BTC"; // 0.006 1mhs ?></h3><br>
                                    <h3 class="title"><b><?Php echo "1 MH/s</b> = ".$PrDgFivef. " DOGE"; ?></h3><br>
                                    <h3 class="title"><b><?Php echo "1 MH/s </b>= ".$MUSD = number_format(($usdinbtc * $PriceBitA),2,'.',''). " USD"; // 0.006 1mhs ?></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i> <a data-toggle="modal" href="#myModal30" Style="font-size: large;">Buy Scrypt</a>
									</div>
								</div>
							</div>
						</div>
					</div>
                     <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                              <h4 class="title"><?Php echo $CalcDoh." GH/s"; ?></h4>
	                                <p class="category" Style="color: #FFFFFF; font-size: medium;"><?Php echo $CalcEntr; ?></p>
	                            </div>
                                 <form class="frmPriceS" name="frmPriceS" id= "frmPriceS" method="post" action="">
                                            <div align="center"><input type="text" class="form-control" id="txtcalcour" name="txtcalcour" value="" oninput="GetPriceSHA(); Ftest (this)"
       onpropertychange="if ('v' == '\v' && parseFloat (navigator.userAgent.split ('MSIE ') [1].split (';') [0]) <= 9) Ftest (this)" value="1" Style=" font-size: x-large; text-align: center;" placeholder="<?Php echo $Entrpwr." GH/s"; ?> "/> </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
                                             <th></th>
	                                    	<th><?Php echo $PerDay; ?></th>
	                                    	<th><?Php echo $PerMonth; ?></th>
	                                    	<th><?Php echo $PerYear; ?></th>
											<th><?Php echo $PerTwoYears; ?></th>
	                                    </thead>
	                                    <tbody>
	                                          <tr><td>Bitcoin</td>
	                                        	<td><div  id="ShadayB">0.00000000</div></td>
	                                        	<td><div  id="ShamonthB">0.00000000</div></td>
	                                        	<td><div  id="ShayearB">0.00000000</div></td>
												<td><div  id="ShatwoB">0.00000000</div></td>
	                                        </tr>
	                                        <tr><td>Usd</td>
	                                        	<td><div  id="ShadayU">0.00</div></td>
	                                        	<td><div  id="ShamonthU">0.00</div></td>
	                                        	<td><div  id="ShayearU">0.00</div></td>
												<td><div  id="ShatwoU">0.00</div></td>
	                                        </tr>
	                                    </tbody>
	                                </table>

	                            </div>
                                </form>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>

                   <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                              <h4 class="title"><?Php echo $CalcDoh." MH/s"; ?></h4>
	                                <p class="category" Style="color: #FFFFFF; font-size: medium;"><?Php echo $CalcEntr; ?></p>
	                            </div>
                                <form class="frmPriceM" name="frmPriceM" id= "frmPriceM" method="post" action="">
                                            <div align="center"><input type="text" class="form-control" id="txtcalcourm" name="txtcalcourm" value="" oninput="GetPriceMHS(); Ftest (this)"
       onpropertychange="if ('v' == '\v' && parseFloat (navigator.userAgent.split ('MSIE ') [1].split (';') [0]) <= 9) Ftest (this)" value="1" Style=" font-size: x-large; text-align: center;" placeholder="<?Php echo $Entrpwr." MH/s"; ?> "/> </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
                                             <th></th>
	                                    	<th><?Php echo $PerDay; ?></th>
	                                    	<th><?Php echo $PerMonth; ?></th>
	                                    	<th><?Php echo $PerYear; ?></th>
											<th><?Php echo $PerTwoYears; ?></th>
	                                    </thead>
	                                    <tbody>
	                                        <tr><td>Bitcoin</td>
	                                        	<td><div  id="MhsdayB">0.00000000</div></td>
	                                        	<td><div  id="MhsmonthB">0.00000000</div></td>
	                                        	<td><div  id="MhsyearB">0.00000000</div></td>
												<td><div  id="MhstwoB">0.00000000</div></td>
	                                        </tr>
	                                        <tr><td>Dogecoin</td>
	                                            <td><div  id="MhsdayD">0.00000000</div></td>
	                                        	<td><div  id="MhsmonthD">0.00000000</div></td>
	                                        	<td><div  id="MhsyearD">0.00000000</div></td>
												<td><div  id="MhstwoD">0.00000000</div></td>
	                                        </tr>
	                                        <tr><td>Usd</td>
	                                            <td><div  id="MhsdayU">0.00</div></td>
	                                        	<td><div  id="MhsmonthU">0.00</div></td>
	                                        	<td><div  id="MhsyearU">0.00</div></td>
												<td><div  id="MhstwoU">0.00</div></td>
	                                        </tr>
	                                    </tbody>
	                                </table>

	                            </div>
                                </form>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
				</div>
			</div>

			  <footer class="footer">
	            <div class="container-fluid">
	                <nav class="pull-left">

	                </nav>
	                <p class="copyright pull-right">
	                    	&copy; <script>document.write(new Date().getFullYear())</script> <a href="/">CMine</a> Cloud Mining cryptocurrency
	                </p>
	            </div>
	        </footer>
		</div>
	</div>
<?Php
print "<body onload=\"GetCalcBIT(); GetCalcMHS();\">";
?>
    <script type="text/javascript">
 function GetCalcBIT()
 {
  var sum_calcdvs = document.frmSHA.textcallb.value;
  var costsha = document.frmSHA.hdnbit.value;
  var sum_calcdds = document.frmSHA.hdndoge.value;
  var sum_calcshausd = document.frmSHA.shacostusd.value;
	 var cur_bitcalcdvs = (+sum_calcdvs * +costsha).toFixed(8);
     var cur_dogecalcdds = (+sum_calcdvs * +sum_calcdds).toFixed(8);
     var cur_usdcalcsha = (+sum_calcdvs * +sum_calcshausd).toFixed(2);
	 document.getElementById("txtSHA").innerHTML = cur_bitcalcdvs + " BTC";
     document.getElementById("txtSHAD").innerHTML = cur_dogecalcdds + " DOGE";
     document.getElementById("txtSHADUSD").innerHTML = cur_usdcalcsha + " USD";
     document.getElementById("shabuybit").value = cur_bitcalcdvs;
     document.getElementById("shabuydoge").value = cur_dogecalcdds;
     document.getElementById("shabuyusd").value = cur_usdcalcsha;
 }
 </script>
 <script type="text/javascript">
 function GetCalcMHS()
 {
  var sum_calcmhs = document.frmMHS.textcallbv.value;
  var costmhs = document.frmMHS.mhscost.value;
  var sum_calcmds = document.frmMHS.mhsdoge.value;
  var sum_calcmus = document.frmMHS.mhscostusd.value;
	 var cur_bitcalcmhs = (+sum_calcmhs * +costmhs).toFixed(8);
     var cur_dogecalcmhs = (+sum_calcmhs * +sum_calcmds).toFixed(8);
     var cur_usdcalcmhs = (+sum_calcmhs * +sum_calcmus).toFixed(2);
	 document.getElementById("txtMHS").innerHTML = cur_bitcalcmhs + " BTC";
     document.getElementById("txtMHSD").innerHTML = cur_dogecalcmhs + " DOGE";
     document.getElementById("txtMUHSD").innerHTML = cur_usdcalcmhs + "USD";
     document.getElementById("mhsbuybit").value = cur_bitcalcmhs;
     document.getElementById("mhsbuydoge").value = cur_dogecalcmhs;
     document.getElementById("mhsbuyusd").value = cur_usdcalcmhs;
 }
 </script>
 <script type="text/javascript">
 function GetPriceSHA()
 {
 var dvsm_countt = document.frmPriceS.txtcalcour.value;
 var price_bitt = document.frmSHA.hdnbit.value;
 var price_usdS = document.frmSHA.shacostusd.value;
 var ourcountBitt = (+dvsm_countt * +price_bitt).toFixed(8);
 var BourcountUsdS = (+dvsm_countt * +price_usdS).toFixed(2);
  var permonthBt = (+ourcountBitt / 3.5).toFixed(8);
  var perrayBt = (+permonthBt / 30).toFixed(8);
  var peryearBt = (+permonthBt * 12).toFixed(8);
  var threeyearsBt = (+peryearBt * 2).toFixed(8);
  var BpermonthDMUSDS = (+BourcountUsdS / 3.5).toFixed(2);
  var BperrayDMUSDS = (+BpermonthDMUSDS / 30).toFixed(2);
  var BperyearDMUSDS = (+BpermonthDMUSDS * 12).toFixed(2);
  var BthreeyearsDMUSDS = (+BperyearDMUSDS * 2).toFixed(2);
  document.getElementById("ShamonthB").innerHTML = permonthBt;
  document.getElementById("ShadayB").innerHTML = perrayBt;
  document.getElementById("ShayearB").innerHTML = peryearBt;
  document.getElementById("ShatwoB").innerHTML = threeyearsBt;
  document.getElementById("ShamonthU").innerHTML = BpermonthDMUSDS;
  document.getElementById("ShadayU").innerHTML = BperrayDMUSDS;
  document.getElementById("ShayearU").innerHTML = BperyearDMUSDS;
  document.getElementById("ShatwoU").innerHTML = BthreeyearsDMUSDS;
 }
</script>
 <script type="text/javascript">
 function GetPriceMHS()
 {
 var Bdvsm_counttM = document.frmPriceM.txtcalcourm.value;
 var Bprice_bittM = document.frmMHS.mhscost.value;
 var Bprice_dogeM = document.frmMHS.mhsdoge.value;
 var Bprice_usdM = document.frmMHS.mhscostusd.value;
 var BourcountBittM = (+Bdvsm_counttM * +Bprice_bittM).toFixed(8);
 var BourcountDogeM = (+Bdvsm_counttM * +Bprice_dogeM).toFixed(8);
 var BourcountUsdM = (+Bdvsm_counttM * +Bprice_usdM).toFixed(2);
  var BpermonthBtM = (+BourcountBittM / 3.3).toFixed(8);
  var BperrayBtM = (+BpermonthBtM / 30).toFixed(8);
  var BperyearBtM = (+BpermonthBtM * 12).toFixed(8);
  var BthreeyearsBtM = (+BperyearBtM * 2).toFixed(8);
  var BpermonthDM = (+BourcountDogeM / 3.3).toFixed(8);
  var BperrayDM = (+BpermonthDM / 30).toFixed(8);
  var BperyearDM = (+BpermonthDM * 12).toFixed(8);
  var BthreeyearsDM = (+BperyearDM * 2).toFixed(8);
  var BpermonthDMUSD = (+BourcountUsdM / 3.3).toFixed(2);
  var BperrayDMUSD = (+BpermonthDMUSD / 30).toFixed(2);
  var BperyearDMUSD = (+BpermonthDMUSD * 12).toFixed(2);
  var BthreeyearsDMUSD = (+BperyearDMUSD * 2).toFixed(2);
  document.getElementById("MhsmonthB").innerHTML = BpermonthBtM;
  document.getElementById("MhsdayB").innerHTML = BperrayBtM;
  document.getElementById("MhsyearB").innerHTML = BperyearBtM;
  document.getElementById("MhstwoB").innerHTML = BthreeyearsBtM;
  document.getElementById("MhsmonthD").innerHTML = BpermonthDM;
  document.getElementById("MhsdayD").innerHTML = BperrayDM;
  document.getElementById("MhsyearD").innerHTML = BperyearDM;
  document.getElementById("MhstwoD").innerHTML = BthreeyearsDM;
  document.getElementById("MhsmonthU").innerHTML = BpermonthDMUSD;
  document.getElementById("MhsdayU").innerHTML = BperrayDMUSD;
  document.getElementById("MhsyearU").innerHTML = BperyearDMUSD;
  document.getElementById("MhstwoU").innerHTML = BthreeyearsDMUSD;
 }
</script>
<!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
</body>
   <script>
   function sizePic() {
    size = document.getElementById("size").value;
    document.getElementById("textcallb").value = size;
   }
   function sizePic1() {
    size1 = document.getElementById("size1").value;
    document.getElementById("textcallbv").value = size1;
   }
  </script>
 <?Php include_once("incljs.php"); ?>

</html>