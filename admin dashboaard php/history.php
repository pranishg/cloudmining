<?Php
ini_set('display_errors', 1);
error_reporting(1);
include_once("bd.php");
if(empty($login) and empty($password)){
require("main.html");
}
include_once("incminingltcdog.php");
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
$DBHist = mysql_query("SELECT reg_date FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayHistory = mysql_fetch_array($DBHist) or die(mysql_error());
$ArrDatereg = $arrayHistory['reg_date'];
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
				<a href="/" class="simple-text">
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
	                <li>
	                    <a href="buyhash.php">
	                        	              <i class="fa fa-shopping-cart" aria-hidden="true"></i>

	                        <p><?Php echo $LBuy; ?></p>
	                    </a>
	                </li>
	                <li class="active">
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

<li class="dropdown" style="font-size: 14px;">
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
						<a class="navbar-brand" href="#"><?Php echo $LHist; ?></a>
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
                    <h4><?Php echo $hststr; ?></h4>
                    <p><?Php echo $hstlgn; ?></p><br>
                    <div align="center"><?Php echo $LPdtr.$ArrDatereg; ?></div> <br>

					</div>

					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card card-nav-tabs">
                           <?Php include_once("histor/idincludefind.php"); ?>

								<div class="card-content">
									<div class="tab-content">
										<div class="tab-pane active" id="profile">

										</div>
										<div class="tab-pane" id="messages">

										</div>
										<div class="tab-pane" id="settings">

										</div>
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
</body>
<?Php include_once("incljs.php"); ?>
</html>