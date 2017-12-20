<?Php
ini_set('display_errors', 1);
error_reporting(1);
include_once("bd.php");
if(empty($login) and empty($password)){
require("main.html");
}
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
?>
<style type="text/css">
	body {
	    background-image: url(assets/img/b1.jpg);
	}
</style>

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


	<div class="wrapper">

	    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo" style="background:#333333;">
				<a href="index.php" class="simple-text">
				  CMine
				</a>
<center><span  style="color:#aaaaaa;"><?Php echo "<b>1 BTC</b> = ".number_format($usdinbtc,2,'.','')." USD"; ?></span></center>

			</div>

	    	<div class="sidebar-wrapper" style="background:#333333;">
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
 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-money" aria-hidden="true"></i>
<span style="color:#ddd;">Withdraw</span><span class="caret"></span></a>
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
                                  <li><a href="languages/chf.php"><img src="images/China.png" alt="" /> ?? &nbsp;</a></li>
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
    <iframe src="Payment.php" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
                     <div class="content">
	            <div class="container-fluid">

	            </div>
	        </div>

                   <div class="content">
	            <div class="container-fluid">

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