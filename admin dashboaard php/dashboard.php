<?Php
ini_set('display_errors', 1);
error_reporting(1);
include_once("bd.php");
include_once("index.php");
include_once("incminingltcdog.php");
include_once("initsmc.php");
include_once("intmining.php");
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
$testtest = "display:none";
$testtestdoge = "display:none";
$testbuy = "display:none";
$testbonus = "display:none";
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
$CBCash = mysql_query("SELECT DVS FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayD = mysql_fetch_array($CBCash) or die(mysql_error()) ;
$DVST=$arrayD['DVS'];
$DVSTN = number_format($DVST,11,'.','');
$MINICashDL = mysql_query("SELECT DVSm FROM ltcdogeming WHERE vlogin='$login'AND vpassword='$password' AND activation='1' ");
$arLD = mysql_fetch_array($MINICashDL)or die(mysql_error()) ;
$DVSMini=$arLD['DVSm'];
$DVSMiniN = number_format($DVSMini,11,'.','');
?>
<?Php
$PerDayDash = ($LBCAshD / 30);
$PerHourDash = ($PerDayDash / 24);
$PerYearDash = ($LBCAshD * 12);
$PerThreeDash = ($PerYearDash *2);
//- - - - - - - - - - - - - - - - -
$PerHourDashN = number_format($PerHourDash,8,'.','');
$PerDayDashN = number_format($PerDayDash,8,'.','');
$PerMonthDashN = number_format($LBCAshD,8,'.','');
$PerYearDashN = number_format($PerYearDash,8,'.','');
$PerThreeDashN = number_format($PerThreeDash,8,'.','');
?>
<?Php
$MiniCountD= (($DVSMini* $PrDgFive)/3.3);
$PerDayDoge = ($MiniCountD /30);
$PerHourDoge = ($PerDayDoge / 24);
$PerYearDoge = ($MiniCountD * 12);
$PerThreeDoge = ($PerYearDoge * 2);
$PerHourDogeN = number_format($PerHourDoge,8,'.','');
$PerDayDogeN = number_format($PerDayDoge,8,'.','');
$PerMonthDogeN = number_format($MiniCountD,8,'.','');
$PerYearDogeN = number_format($PerYearDoge,8,'.','');
$PerThreeDogeN = number_format($PerThreeDoge,8,'.','');
//-------------------------------------------------------
$MiniCountL= (($DVSMini* $PriceLtcNF)/3.3);
$PerDayLite = ($MiniCountL /30);
$PerHourLite = ($PerDayLite / 24);
$PerYearLite = ($MiniCountL * 12);
$PerThreeLite = ($PerYearLite *2);
$PerHourLiteN = number_format($PerHourLite,8,'.','');
$PerDayLiteN = number_format($PerDayLite,8,'.','');
$PerMonthLiteN = number_format($MiniCountL,8,'.','');
$PerYearLiteN = number_format($PerYearLite,8,'.','');
$PerThreeLiteN = number_format($PerThreeLite,8,'.','');
?>
<?Php
include_once("percent.php");
$WiRERE = mysql_query("SELECT id FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$WiREFRE = mysql_fetch_array($WiRERE) or die(mysql_error());
$WiNRE = $WiREFRE['id'];
$WiREmdl = md5($WiNRE);
$WiNADRRE = $WiREmdl.".txt";
$WiARFE = './histor/'.$WiNADRRE;
if  (isset($_POST['btnOkref'])) {
$DBMyCash = mysql_query("SELECT Cash FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayMyCash = mysql_fetch_array($DBMyCash) or die(mysql_error());
$SummaREfCash=$arrayMyCash['Cash'];
$OurSumMy = ($SummaREfCash + $ReRenk);
//----------------------------------------------------------------------
$bbitdate = date("d-m-Y  H:i");
$textbit = $bbitdate." - ".$Rfbns." ".$ReRenk." BTC".'<br>';
//----------------------------------------------------------------------
  $text_bit=file_get_contents($WiARFE);
  $fdbit=$textbit.$text_bit;
  $f_outbit = fopen($WiARFE,"w");
  fwrite($f_outbit, $fdbit);
  fclose($f_outbit);
//----------------------------------------------------------------------
mysql_query("UPDATE gusers SET Cash = '$OurSumMy' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
mysql_query("UPDATE greffer SET daycash = '0' WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
header('Location:index.php');
}
//--------
if  (isset($_POST['btnOkrefd'])) {
$DBMyCashdoge = mysql_query("SELECT Cashdoge FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$arrayMyCashdoge = mysql_fetch_array($DBMyCashdoge) or die(mysql_error());
$SummaREfDOGE=$arrayMyCashdoge['Cashdoge'];
$OurSumMyD = ($SummaREfDOGE + $ReRenkdoge);
//----------------------------------------------------------------------
$ddogedate = date("d-m-Y  H:i");
$textdoge = $ddogedate." - ".$Rfbns." ".$ReRenkdoge." DOGE".'<br>';
//----------------------------------------------------------------------
  $text_doge=file_get_contents($WiARFE);
  $fddoge=$textdoge.$text_doge;
  $f_outdoge = fopen($WiARFE,"w");
  fwrite($f_outdoge, $fddoge);
  fclose($f_outdoge);
//----------------------------------------------------------------------
mysql_query("UPDATE ltcdoge SET Cashdoge = '$OurSumMyD' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
mysql_query("UPDATE greffer SET daycashdoge = '0' WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
 header('Location:index.php');
}
?>
<style type="text/css">
	body {
	    background-image: url(assets/img/b1.jpg);
	}
</style>
<style type="text/css">
#Lr12 {
    display: block;
	position:fixed;
	width:100%;
	height:40%;
	bottom: 300px;
	left: 0px;
	top: 0px;
	background: url(assets/img/faces/tbl1.png);
    background-repeat: repeat;
}
#Lr13 {
    display: block;
	position:fixed;
	width:100%;
	height:60%;
	bottom: 300px;
	left: 0px;
	top: 0px;
	background: url(assets/img/faces/tbl1.png);
    background-repeat: repeat;
}
#divtest {
    display: block;
	position:fixed;
	width:100%;
	height:40%;
	bottom: 300px;
	left: 0px;
	top: 0px;
	background: url(assets/img/faces/tbl1.png);
    background-repeat: repeat;
}
#divtestdoge {
    display: block;
	position:fixed;
	width:100%;
	height:40%;
	bottom: 300px;
	left: 0px;
	top: 0px;
	background: url(assets/img/faces/tbl1.png);
    background-repeat: repeat;
}
.popup {
    top: 25%;
    left: 0;
    right: 0;
    font-size: 14px;
    margin: auto;
    width: 85%;
    min-width: 320px;
    max-width: 600px;
    position: absolute;
    padding: 15px 20px;
    z-index: 1000;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px;
    font: 14px/18px 'Tahoma', Arial, sans-serif;
    -webkit-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    -moz-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    -ms-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    -webkit-animation: fade .6s;
    -moz-animation: fade .6s;
    animation: fade .6s;
}
</style>
<form class="frmSHAd" name="frmSHAd" id= "frmSHAd" method="post" action="">
         <input type="text" id="hdndoged" name="hdndoged" value="<?Php echo $Prdgsvn; ?>" hidden="hidden" />
         <input type="text" id="hdnbitd" name="hdnbitd" value="<?Php echo $hashsvn; ?>" hidden="hidden" />
         <input type="text" id="shacostusdd" name="shacostusdd" value="<?Php echo $SUSD1 = number_format(($usdinbtc * $hashsvn),2,'.',''); ?>" hidden="hidden" />
</form>
 <form class="frmMHSd" name="frmMHSd" id= "frmMHSd" method="post" action="">
               <input type="text" id="mhsdoged" name="mhsdoged" value="<?Php echo $PrDgFivef; ?>" hidden="hidden" />
                <input type="text" id="mhscostd" name="mhscostd" value="<?Php echo $PriceBitA; ?>" hidden="hidden" />
                <input type="text" id="mhscostusdd" name="mhscostusdd" value="<?Php echo $MUSD1 = number_format(($usdinbtc * $PriceBitA),2,'.',''); ?>" hidden="hidden" />
</form>
<?Php
//sha256
//bit
$ThrtBit = number_format(($hashsvn * $DVSTN),8,'.','');
$ShaMonth1 = ($ThrtBit / 3.5);
$ShaDay1 = ($ShaMonth1 / 30);
$ShaYear1 = ($ShaMonth1 * 12);
$ShaTYears1 = ($ShaYear1 * 2);
//doge
$ThrtDoge = number_format(($Prdgsvn * $DVSTN),8,'.','');
$ShaMonth1d = ($ThrtDoge / 3.5);
$ShaDay1d = ($ShaMonth1d / 30);
$ShaYear1d = ($ShaMonth1d * 12);
$ShaTYears1d = ($ShaYear1d * 2);
//usd
$ThrtUsd = number_format(($SUSD1 * $DVSTN),2,'.','');
$ShaMonth1du = ($ThrtUsd / 3.5);
$ShaDay1du = ($ShaMonth1du / 30);
$ShaYear1du = ($ShaMonth1du * 12);
$ShaTYears1du = ($ShaYear1du * 2);
//Mhs
//Bit
$ThrtBitM = number_format(($PriceBitA * $DVSMiniN),8,'.','');
$ShaMonth1m = ($ThrtBitM / 3.3);
$ShaDay1m = ($ShaMonth1m / 30);
$ShaYear1m = ($ShaMonth1m * 12);
$ShaTYears1m = ($ShaYear1m * 2);
//doge
$ThrtDogeM = number_format(($PrDgFivef * $DVSMiniN),8,'.','');
$ShaMonth1dm = ($ThrtDogeM / 3.3);
$ShaDay1dm = ($ShaMonth1dm / 30);
$ShaYear1dm = ($ShaMonth1dm * 12);
$ShaTYears1dm = ($ShaYear1dm * 2);
//usd
$ThrtUsdM = number_format(($MUSD1 * $DVSMiniN),2,'.','');
$ShaMonth1dum = ($ThrtUsdM / 3.3);
$ShaDay1dum = ($ShaMonth1dum / 30);
$ShaYear1dum = ($ShaMonth1dum * 12);
$ShaTYears1dum = ($ShaYear1dum * 2);
//Our
//Bit
$Bitour1Month = $ShaMonth1 + $ShaMonth1m;
$Bitour1Day = $ShaDay1 + $ShaDay1m;
$BitourYear = $ShaYear1 + $ShaYear1m;
$BitourTYear = $ShaTYears1 + $ShaTYears1m;
//Doge
$Dogeour1Month = $ShaMonth1d + $ShaMonth1dm;
$Dogeour1Day = $ShaDay1d + $ShaDay1dm;
$DogeourYear = $ShaYear1d + $ShaYear1dm;
$DogeourTYear = $ShaTYears1d + $ShaTYears1dm;
//Usd
$Usdour1Month = $ShaMonth1du + $ShaMonth1dum;
$Usdour1Day = $ShaDay1du + $ShaDay1dum;
$UsdourYear = $ShaYear1du + $ShaYear1dum;
$UsdourTYear = $ShaTYears1du + $ShaTYears1dum;
?>
<form id="form9" name="form9" method="post" action="" hidden disabled>
        <label>
        <input name="txtSecunda" type="text" id="txtSecunda" value="<?Php echo $xCountedB; ?>" hidden />
        </label>
        </form>
        <form id="form4" name="form4" method="post" action="" hidden>
          <label>
            <input name="txtTime" type="text" id="txtTime" value="<?Php echo $tmbdtm; ?>" hidden />
          </label>
        </form>

        <form id="form2" name="form2" method="post" action="" hidden>
          <label>
            <input name="earn_month" type="text" id="earn_month" value="<?Php  echo $intspeedL=number_format($BITOURINI,11,'.','');  ?>" hidden />
          </label>
        </form>
		 <form id="form3" name="form3" method="post" action="" hidden>
          <label>
            <input name="txtsum" type="text" id="txtsum" value="<?Php echo $CountebtnF = number_format($xCountedB,11,'.',''); ?>" hidden />
		   </label>
	    </form>
			<form id="form13" name="form13" method="post" action="" hidden>
          <label>
            <input name="txtSumDVS" type="text" id="txtSumDVS" value="<?php echo $CountedDVSum = number_format($xCountedBDVS,11,'.',''); ?>" hidden />
          </label>
	    </form>
		  <form id="formDVS" name="formDVS" method="post" action="" hidden>
          <label>
          <input name="earn_montt" type="text" id="earn_montt" value="<?php echo  $intspeedDVS = number_format (($DVST/3.5), 11,'.','');?>" hidden />
          </label>
		  </form>
          <form id="form6" name="form6" method="post" action="" hidden>
            <label>
            <input name="earn_doge" type="text" id="earn_doge" value="<?Php  echo $intspeedLDOGE=number_format($OURDGDG,11,'.','');  ?>"  hidden />
            </label>
        </form>
          <form id="form7" name="form7" method="post" action="" hidden>
            <label>
            <input name="txtDogeSum" type="text" id="txtDogeSum" value="<?Php echo $CoudogeF = number_format($xCountedBDoge,11,'.',''); ?>"  hidden/>
            </label>
        </form>
          <form id="form11" name="form11" method="post" action="" hidden>
            <label>
            <input name="earn_dvsm" type="text" id="earn_dvsm" value="<?php echo  $intdDVSm = number_format (($DVSMini/3.3), 11,'.','');?>" hidden/>
            </label>
        </form>
          <form id="form14" name="form14" method="post" action="" hidden>
            <label>
            <input name="txtSumDvsm" type="text" id="txtSumDvsm" value="<?php echo $CounDVSmSum = number_format($xCountedBDVSMINI,11,'.',''); ?>" hidden />
            </label>
          </form>


  <a href="javascript:look('Lr12');"></a>
<div id="Lr12" class="popup" style="<?Php echo $testbuy; ?>">
      <h2 class="btn-danger"><?Php echo $BpwrStp; ?></h2>
         <div align="center"><button type="submit" name="submit" onClick="javascript:look('Lr12');" class="btn btn-primary btn-block"><?Php echo $ClsWin; ?></button></div>
</div>
         <a href="javascript:look('divtest');"></a>
	<div id="divtest" class="popup" style="<?Php echo $testtest; ?>">
      <div align="center"><?Php echo $Rfbns1." + ".$ReRenk." BTC"; ?></div><br>
       <div align="center">
       	<form class="frmrefconf" method="post" name="frmrefconf" id="frmrefconf">
          <div align="center"><button type="submit" name="btnOkref" id="btnOkref" class="btn btn-primary btn-block"><?Php echo $LBtnConf; ?></button></div>
        </form>
        </div>
       <br>
	</div>
            <a href="javascript:look('divtestdoge');"></a>
	<div id="divtestdoge" class="popup" style="<?Php echo $testtestdoge; ?>">
      <div align="center"><?Php echo $Rfbns1." + ".$ReRenkdoge." DOGE"; ?></div><br>
       <div align="center">
       	<form class="frmrefconfd" method="post" name="frmrefconfd" id="frmrefconfd">
          <div align="center"><button type="submit" name="btnOkrefd" id="btnOkrefd" class="btn btn-primary btn-block"><?Php echo $LBtnConf; ?></button></div>
        </form>
        </div>
       <br>
	</div>
       <a href="javascript:look('Lr13');"></a>
<div id="Lr13" class="popup" style="<?Php echo $testbonus; ?>">
      <h2><?Php echo $Fq25; ?></h2><br>
      <h3><?Php echo $bnsBIT." BTC"; ?></h3><br>
      <h3><?Php echo $bnsDOGE." Doge"; ?></h3><br>
         <div align="center"><button type="submit" name="submit" onClick="javascript:look('Lr13');" class="btn btn-primary btn-block"><?Php echo $ClsWin; ?></button></div>
</div>


                                  	          <!-- Modal60 -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal60" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content" Style="background: #2b2b2b;">
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
		                  <div class="modal-content" Style="background:#2b2b2b;">
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
		                  <div class="modal-content" Style="background: #2b2b2b;">
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
				<a href="index.php" class="simple-text" style="color: white;">
				  CMine
				</a>
<center><span style="color:#aaaaaa;"><?Php echo "<b>1 BTC</b> = ".number_format($usdinbtc,2,'.','')." USD"; ?></span></center>

			</div>
	    	<div class="sidebar-wrapper" style="background: #333333;">
	            <ul class="nav">
	                <li class="active">
	                    <a href="index.php">
	                        	              <i class="fa fa-dashboard" aria-hidden="true"></i>

	                        <p><?Php echo $LDash; ?></p>
	                    </a>
	                </li>
	                <li>
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
 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-money" aria-hidden="true" ></i><span style="color:#ddd;">Withdraw</span><span class="caret"></span></a>
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
						<a class="navbar-brand" href="#"><?Php echo $LDash; ?></a>
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
								<div class="card-header" data-background-color="blue">
                                <h3>Sha-256</h3>
								</div>
								<div class="card-content">
                                <h3 class="title"><div id="labelDVS"><?Php echo $DVSTN; ?></div></h3>
									<p class="category">GH/s</p>
								</div>
                                
								<div class="card-footer" align="center">
                                 <div align="center">
                                 <form id="formMX" name="formMX" method="post" action="">
									<div align="center"><button type="submit" name="subMining2" id="subMining2" class="btn btn-primary btn-block"><?Php echo $BtmnDVS = $arrayDVSbtmnl['DVSbtmnl']; ?></button></div>
                                    </form>
                                    </div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
                                 <h3>Scrypt</h3>
								</div>
								<div class="card-content">
                                <h3 class="title"><div id="labeldvsm"><?Php echo $DVSMiniN; ?></div></h3>
									<p class="category">MH/s</p>
								</div>
                                 
								<div class="card-footer" align="center">
                                 <div align="center">
                                 <form id="frmMingMini" name="frmMingMini" method="post" action="">
									<div align="center"><button type="submit" name="subMining5" id="subMining5" class="btn btn-primary btn-block"><?Php echo $BtnDvs = $arraybutt['btndvs']; ?></button></div>
                                    </form>
                                    </div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div  data-background-color="green">
								 <h3 align="center">Bitcoin</h3>
								</div>   <br>
                                	<div class="card-content">
									<h3 class="title"><div Style=" color:#009933;text-align:center;"><?Php echo $arrayCVF; ?></div></h3>
                                    <p style="text-align:center;" class="category"><?Php echo $LPBall; ?></p>
								</div> <br>
								



                                <div align="center">
                                <img src="<?Php echo $ImgCicl; ?>" id="bitimg" name="bitimg" class="material-icons" alt="" Style=" width: 20%; height: 10%;" />
                                </div>  <br>
<div style="text-align:center;" class="card-content">
									<h3 class="title"><div id="labelcounted" name="labelcounted">0.0000000000</div></h3>
                                    <p class="category">BTC COUNT</p>
								</div>
								<div class="card-footer" align="center">
                                 <div align="center">
                                  <form id="form5" name="form5" method="post" action="">
									 <div align="center"><button type="submit" name="subMining1" id="subMining1" class="btn btn-primary btn-block"><?Php echo $Btmnl=$arraycount['btnml']; ?></button></div>
                                     </form>
                                   </div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div  data-background-color="orange">
								<h3 align="center">Dogecoin</h3>
								</div>  <br>
                                 	<div class="card-content">
									<h3 class="title" style="text-align:center;"><div Style=" color: #F07800;"><?Php echo $CashDogeF; ?></div></h3>
                                    <p class="category" style="text-align:center;"><?Php echo $LPBall; ?></p>
								</div> <br>
								
                                 <div align="center">
                                <img src="<?Php echo $ImgCicl1; ?>" id="dogeimg" name="dogeimg" class="material-icons" alt="" Style=" width: 20%; height: 10%;" />
                                </div>  <br>


<div class="card-content" style="text-align:center;">
                                <h3 class="title"><div id="labeldoge" name="dogecounted">0.0000000000</div></h3>
									<p class="category">DOGE COUNT</p>
								</div>


								<div class="card-footer" align="center">
                                    <div align="center">
                                    <form id="frmMingDoge" name="frmMingDoge" method="post" action="">
									 <div align="center"><button type="submit" name="subMining3" id="subMining3" class="btn btn-primary btn-block"><?Php echo $BtnDoge = $arraybutt['btndoge']; ?></button></div>
                                     </form>
                                    </div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">

						<div class="col-lg-12 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title" style="text-align:center;">Table of your Profitability Sha-256</h4>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-warning">
                                            <th><?Php echo $Crncytbl; ?></th>
	                                        <th><?Php echo $prdyc; ?></th>
	                                    	<th><?Php echo $prdyc1; ?></th>
	                                    	<th><?Php echo $prdyc2; ?></th>
                                            <th><?Php echo $prdyc3; ?></th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>Bitcoin</td>
	                                        	<td><?Php echo number_format($ShaDay1,'8','.',''); ?></td>
	                                        	<td><?Php echo number_format($ShaMonth1,8,'.',''); ?></td>
                                                <td><?Php echo number_format($ShaYear1,'8','.',''); ?></td>
                                                <td><?Php echo number_format($ShaTYears1,'8','.',''); ?></td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Usd</td>
	                                            <td><?Php echo number_format($ShaDay1du,'2','.',''); ?></td>
	                                        	<td><?Php echo number_format($ShaMonth1du,'2','.',''); ?></td>
                                                <td><?Php echo number_format($ShaYear1du,'2','.',''); ?></td>
                                                <td><?Php echo number_format($ShaTYears1du,'2','.',''); ?></td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
						</div>
					</div>
                    	<div class="row">

						<div class="col-lg-12 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title" style="text-align:center;">Table of your Profitability Scrypt</h4>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-warning">
                                            <th><?Php echo $Crncytbl; ?></th>
	                                        <th><?Php echo $prdyc; ?></th>
	                                    	<th><?Php echo $prdyc1; ?></th>
	                                    	<th><?Php echo $prdyc2; ?></th>
                                            <th><?Php echo $prdyc3; ?></th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>Bitcoin</td>
	                                        	 <td><?Php echo number_format($ShaDay1m,'8','.',''); ?></td>
                                                 <td><?Php echo number_format($ShaMonth1m,'8','.',''); ?></td>
                                                 <td><?Php echo number_format($ShaYear1m,'8','.',''); ?></td>
                                                 <td><?Php echo number_format($ShaTYears1m,'8','.',''); ?></td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Dogecoin</td>
	                                        	<td><?Php echo number_format($ShaDay1dm,'8','.',''); ?></td>
                                                <td><?Php echo number_format($ShaMonth1dm,'8','.',''); ?></td>
                                                <td><?Php echo number_format($ShaYear1dm,'8','.',''); ?></td>
                                                <td><?Php echo number_format($ShaTYears1dm,'8','.',''); ?></td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Usd</td>
	                                        	<td><?Php echo number_format($ShaDay1dum,'2','.',''); ?></td>
                                                <td><?Php echo number_format($ShaMonth1dum,'2','.',''); ?></td>
                                                <td><?Php echo number_format($ShaYear1dum,'2','.',''); ?></td>
                                                <td><?Php echo number_format($ShaTYears1dum,'2','.',''); ?></td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
						</div>
					</div>
                    <div class="row">

						<div class="col-lg-12 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title" style="text-align:center;">Table of your Profitability (Sha-256 + Scrypt)</h4>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-warning">
                                            <th><?Php echo $Crncytbl; ?></th>
	                                        <th><?Php echo $prdyc; ?></th>
	                                    	<th><?Php echo $prdyc1; ?></th>
	                                    	<th><?Php echo $prdyc2; ?></th>
                                            <th><?Php echo $prdyc3; ?></th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>Bitcoin</td>
	                                        	 <td><?Php echo number_format($Bitour1Day,'8','.',''); ?></td>
                                                 <td><?Php echo number_format($Bitour1Month,'8','.',''); ?></td>
                                                 <td><?Php echo number_format($BitourYear,'8','.',''); ?></td>
                                                 <td><?Php echo number_format($BitourTYear,'8','.',''); ?></td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Usd</td>
	                                        	<td><?Php echo number_format($Usdour1Day,'2','.',''); ?></td>
                                                <td><?Php echo number_format($Usdour1Month,'2','.',''); ?></td>
                                                <td><?Php echo number_format($UsdourYear,'2','.',''); ?></td>
                                                <td><?Php echo number_format($UsdourTYear,'2','.',''); ?></td>
	                                        </tr>
	                                    </tbody>
	                                </table>
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
  <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
</body>
<?Php include_once("incljs.php"); ?>
</html>
