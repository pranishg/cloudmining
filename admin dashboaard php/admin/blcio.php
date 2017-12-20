<?Php
ini_set('display_errors', 0);
error_reporting(0);
include_once("dbadm.php");
if(empty($logina) and empty($passworda)){
require("madmcminentr.html");
}
include_once("initadmall.php");
$DBMINWITH133 = mysql_query("SELECT feebitblc, feedogeblc FROM costsmc WHERE id='1' ");
$arrMINWITH133 = mysql_fetch_array($DBMINWITH133);
$arbtcm133 = $arrMINWITH133['feebitblc'];
$ardogem133 = $arrMINWITH133['feedogeblc'];
$DBINPB1 = mysql_query("SELECT identbit FROM costsmc WHERE id='1' ");
$arrayINPB1 = mysql_fetch_array($DBINPB1);
$arINPB1 = $arrayINPB1['identbit'];
$DBINPD1 = mysql_query("SELECT identdoge FROM costsmc WHERE id='1' ");
$arrayINPD1 = mysql_fetch_array($DBINPD1);
$arINPD1 = $arrayINPD1['identdoge'];
//----------------------------------------1--------------------------------------------
$DBIdent = mysql_query("SELECT identbit1, identdoge1, adrbit1, adrdoge1, pinb1 FROM identblc WHERE id='0' ");
$arrDbident = mysql_fetch_array($DBIdent);
$arbdb1 = $arrDbident['identbit1'];
$arddb1 = $arrDbident['identdoge1'];
$arbit1b = $arrDbident['adrbit1'];
$arbit1d = $arrDbident['adrdoge1'];
$arPin1 = $arrDbident['pinb1'];
//-----------------------------------------2---------------------------------------------
$DBIdent2 = mysql_query("SELECT identbit2, identdoge2, adrbit2, adrdoge2, pinb2 FROM identblc WHERE id='0' ");
$arrDbident2 = mysql_fetch_array($DBIdent2);
$arbdb12 = $arrDbident2['identbit2'];
$arddb12 = $arrDbident2['identdoge2'];
$arbit1b2 = $arrDbident2['adrbit2'];
$arbit1d2 = $arrDbident2['adrdoge2'];
$arPin12 = $arrDbident2['pinb2'];
//-------------------------------------------3-------------------------------------------
$DBIdent3 = mysql_query("SELECT identbit3, identdoge3, adrbit3, adrdoge3, pinb3 FROM identblc WHERE id='0' ");
$arrDbident3 = mysql_fetch_array($DBIdent3);
$arbdb13 = $arrDbident3['identbit3'];
$arddb13 = $arrDbident3['identdoge3'];
$arbit1b3 = $arrDbident3['adrbit3'];
$arbit1d3 = $arrDbident3['adrdoge3'];
$arPin13 = $arrDbident3['pinb3'];
//-------------------------------------------4-------------------------------------------
$DBIdent4 = mysql_query("SELECT identbit4, identdoge4, adrbit4, adrdoge4, pinb4 FROM identblc WHERE id='0' ");
$arrDbident4 = mysql_fetch_array($DBIdent4);
$arbdb14 = $arrDbident4['identbit4'];
$arddb14 = $arrDbident4['identdoge4'];
$arbit1b4 = $arrDbident4['adrbit4'];
$arbit1d4 = $arrDbident4['adrdoge4'];
$arPin14 = $arrDbident4['pinb4'];
//-------------------------------------------5-------------------------------------------
$DBIdent5 = mysql_query("SELECT identbit5, identdoge5, adrbit5, adrdoge5, pinb5 FROM identblc WHERE id='0' ");
$arrDbident5 = mysql_fetch_array($DBIdent5);
$arbdb15 = $arrDbident5['identbit5'];
$arddb15 = $arrDbident5['identdoge5'];
$arbit1b5 = $arrDbident5['adrbit5'];
$arbit1d5 = $arrDbident5['adrdoge5'];
$arPin15 = $arrDbident5['pinb5'];
//--------------------------------------------------------------------------------------
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
<style type="text/css">
	body {
	    background-image: url(assets/img/b1.jpg);
	}
</style>
<style type="text/css">
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


   	<div class="wrapper">
	    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="index.php" class="simple-text">
				  CMine
				</a>
			</div>
	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li>
	                    <a href="index.php">
	                        <i class="fa fa-align-justify" aria-hidden="true"></i>
	                        <p><?Php echo $Fq27; ?></p>
	                    </a>
                    </li>
	                <li>
	                    <a href="wthadm.php">
	                        <i class="fa fa-align-justify" aria-hidden="true"></i>
	                        <p><?Php echo $Adm2; ?></p>
	                    </a>
	                </li>
	                <li>
	                    <a href="cstadm.php">
	                        <i class="fa fa-align-justify" aria-hidden="true"></i>
	                        <p><?Php echo $Adm10; ?></p>
	                    </a>
	                </li>
                          <li>
	                   <a href="bnad.php">
	                        <i class="fa fa-align-justify" aria-hidden="true"></i>
	                        <p><?Php echo $Adm12; ?></p>
	                    </a>
	                </li>
	                <li>
	                    <a href="pswrda.php">
	                        <i class="fa fa-align-justify" aria-hidden="true"></i>
	                        <p><?Php echo $LtPass; ?></p>
	                    </a>
	                </li>
                    <li>
	                    <a href="mwidep.php">
	                        <i class="fa fa-align-justify" aria-hidden="true"></i>
	                        <p><?Php echo $Adm15; ?></p>
	                    </a>
	                </li>
                      <li>
	                    <a href="GRL.php">
	                        <i class="fa fa-align-justify" aria-hidden="true"></i>
	                        <p>GoUrl</p>
	                    </a>
	                </li>
					<li class="active-pro">
	                    <a href="blcio.php">
	                        <i class="fa fa-align-justify" aria-hidden="true"></i>
	                        <p>BLOCKIO</p>
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
						<a class="navbar-brand" href="#">BLOCK.IO</a>
					</div>
				  	<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
                           	<li class="dropdown">

							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							     <img src="<?Php echo $imgFlag; ?>" alt="" />▼
									<p class="hidden-lg hidden-md"><?Php echo $LCLan; ?></p>
								</a>
								<ul class="dropdown-menu">
								  <li><a href="languages/enf.php"><img src="images/United-Kingdom.png" alt="" /> English &nbsp;</a></li>
                                  <li><a href="languages/ruf.php"><img src="images/Russia.png" alt="" />  Русский &nbsp;</a></li>
								</ul>
							</li>
							<li>
								<span><?Php echo $logina; ?></span><a href="exitadm.php" class="dropdown-toggle" title="<?Php echo $LExt; ?>">
	 							   <i class="fa fa-sign-out" aria-hidden="true"></i>
	 							   <p class="hidden-lg hidden-md">Exit</p>
		 						</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="content">
				<div class="container-fluid">
					<div class="row">


					</div>

					<div class="row">

						<div class="col-lg-6 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title"><?Php echo $Blciostng; ?></h4>
                                </div>
                                     <div class="card-content table-responsive">
	                                <table class="table table-hover">
            <div class="row">
            <br>
<div align="right"><a href="https://block.io/users/sign_in" target="_blank"><?Php echo $Adm9; ?></a><br></div>
<div>
<h3><?Php echo $Adm19." Bitcoin"; ?></h3>
<form action="" class="frmCntm14" method="post" name="frmCntm14" id="frmCntm14">
<br>
  <input name="txtMinfeeb" type="text" id="txtMinfeeb" value="<?Php echo $arbtcm133; ?>" size="40" placeholder="<?Php echo $arbtcm133; ?>"  required ><br>
  <input name="btnSvMinfBit" type="submit" id="btnSvMinfBit" value="<?Php echo $Adm11; ?>"  title="Save"> <br>
</form>
 <br>
 <h3><?Php echo $Adm19." Dogecoin"; ?></h3>
<form action="" class="frmCntd15" method="post" name="frmCntd15" id="frmCntd15">
<br>
  <input name="txtMinfeed" type="text" id="txtMinfeed" value="<?Php echo $ardogem133; ?>" size="40" placeholder="<?Php echo $ardogem133; ?>"  required ><br>
  <input name="btnSvMinfDoge" type="submit" id="btnSvMinfDoge" value="<?Php echo $Adm11; ?>"  title="Save"> <br>
</form>
<br>
<div>
<br>
<div class="card-header" data-background-color="blue">
	    <h4 class="title"><?Php echo $IdAdm3." Bitcoin"; ?></h4><br>
<form action="" class="frmCntd1522" method="post" name="frmCntd1522" id="frmCntd1522">
<input type="number" name="depcount" id="depcount" value="<?Php echo $arINPB1; ?>" Style="color: #000000;" required /> <br>
<input type="submit" name="btndepcount" id="btndepcount" value="<?Php echo $Adm11; ?>" /><br>
</form>
        </div>
<br>
<div class="card-header" data-background-color="blue">
	    <h4 class="title"><?Php echo $IdAdm3." Dogecoin"; ?></h4><br>
<form action="" class="frmCntd1521" method="post" name="frmCntd1521" id="frmCntd1521">
<input type="number" name="depcount1" id="depcount1" value="<?Php echo $arINPD1; ?>" Style="color: #000000;" required /> <br>
<input type="submit" name="btndepcount1" id="btndepcount1" value="<?Php echo $Adm11; ?>" /><br>
</form>
        </div>
<br>
<br>
<div class="card-header" data-background-color="blue">
	    <h4 class="title"><?Php echo $IdAdm; ?></h4>
        </div>
<h3><?Php echo $IdAdm." Bitcoin ".$IdAdm1." 1"; ?></h3>
<form action="" class="frmCntm144" method="post" name="frmCntm144" id="frmCntm144">
<br>
  <input name="txtMinfeeb01" type="text" id="txtMinfeeb01" value="<?Php echo $arbdb1; ?>" size="40" placeholder="<?Php echo $arbdb1; ?>"  required ><label><?Php echo $IdAdm2; ?></label><br>
  <input name="txtMinfeeb02" type="text" id="txtMinfeeb02" value="<?Php echo $arbit1b; ?>" size="40" placeholder="<?Php echo $arbit1b; ?>"  required ><label><?Php echo $Adm6; ?></label><br>
  <input name="txtMinfeeb03" type="text" id="txtMinfeeb03" value="<?Php echo $arPin1; ?>" size="40" placeholder="<?Php echo $arPin1; ?>"  required ><label><?Php echo $LPncd; ?></label><br>
  <input name="btnSvMinfBit01" type="submit" id="btnSvMinfBit01" value="<?Php echo $Adm11; ?>"  title="Save"> <br>
</form>
 <br>
 <h3><?Php echo $IdAdm." Dogecoin ".$IdAdm1." 1"; ?></h3>
<form action="" class="frmCntd155" method="post" name="frmCntd155" id="frmCntd155">
<br>
  <input name="txtMinfeed04" type="text" id="txtMinfeed04" value="<?Php echo $arddb1; ?>" size="40" placeholder="<?Php echo $arddb1; ?>"  required ><label><?Php echo $IdAdm2; ?></label><br>
  <input name="txtMinfeeb05" type="text" id="txtMinfeeb05" value="<?Php echo $arbit1d; ?>" size="40" placeholder="<?Php echo $arbit1d; ?>"  required ><label><?Php echo $Adm8; ?></label><br>
  <input name="txtMinfeeb06" type="text" id="txtMinfeeb06" value="<?Php echo $arPin1; ?>" size="40" placeholder="<?Php echo $arPin1; ?>"  required ><label><?Php echo $LPncd; ?></label><br>
  <input name="btnSvMinfDoge02" type="submit" id="btnSvMinfDoge02" value="<?Php echo $Adm11; ?>"  title="Save"> <br>
</form>
<h3><?Php echo $IdAdm." Bitcoin ".$IdAdm1." 2"; ?></h3>
<form action="" class="frmCntm143" method="post" name="frmCntm143" id="frmCntm143">
<br>
  <input name="txtMinfeeb011" type="text" id="txtMinfeeb011" value="<?Php echo $arbdb12; ?>" size="40" placeholder="<?Php echo $arbdb12; ?>"  required ><br>
  <input name="txtMinfeeb021" type="text" id="txtMinfeeb021" value="<?Php echo $arbit1b2; ?>" size="40" placeholder="<?Php echo $arbit1b2; ?>"  required ><br>
  <input name="txtMinfeeb031" type="text" id="txtMinfeeb031" value="<?Php echo $arPin12; ?>" size="40" placeholder="<?Php echo $arPin12; ?>"  required ><br>
  <input name="btnSvMinfBit011" type="submit" id="btnSvMinfBit011" value="<?Php echo $Adm11; ?>"  title="Save"> <br>
</form>
 <br>
 <h3><?Php echo $IdAdm." Dogecoin ".$IdAdm1." 2"; ?></h3>
<form action="" class="frmCntd154" method="post" name="frmCntd154" id="frmCntd154">
<br>
  <input name="txtMinfeed041" type="text" id="txtMinfeed041" value="<?Php echo $arddb12; ?>" size="40" placeholder="<?Php echo $arddb12; ?>"  required ><br>
  <input name="txtMinfeeb051" type="text" id="txtMinfeeb051" value="<?Php echo $arbit1d2; ?>" size="40" placeholder="<?Php echo $arbit1d2; ?>"  required ><br>
  <input name="txtMinfeeb061" type="text" id="txtMinfeeb061" value="<?Php echo $arPin12; ?>" size="40" placeholder="<?Php echo $arPin12; ?>"  required ><br>
  <input name="btnSvMinfDoge021" type="submit" id="btnSvMinfDoge021" value="<?Php echo $Adm11; ?>"  title="Save"> <br>
</form>
<h3><?Php echo $IdAdm." Bitcoin ".$IdAdm1." 3"; ?></h3>
<form action="" class="frmCntm139" method="post" name="frmCntm139" id="frmCntm139">
<br>
  <input name="txtMinfeeb019" type="text" id="txtMinfeeb019" value="<?Php echo $arbdb13; ?>" size="40" placeholder="<?Php echo $arbdb13; ?>"  required ><br>
  <input name="txtMinfeeb029" type="text" id="txtMinfeeb029" value="<?Php echo $arbit1b3; ?>" size="40" placeholder="<?Php echo $arbit1b3; ?>"  required ><br>
  <input name="txtMinfeeb039" type="text" id="txtMinfeeb039" value="<?Php echo $arPin13; ?>" size="40" placeholder="<?Php echo $arPin13; ?>"  required ><br>
  <input name="btnSvMinfBit019" type="submit" id="btnSvMinfBit019" value="<?Php echo $Adm11; ?>"  title="Save"> <br>
</form>
 <br>
 <h3><?Php echo $IdAdm." Dogecoin ".$IdAdm1." 3"; ?></h3>
<form action="" class="frmCntd1559" method="post" name="frmCntd1559" id="frmCntd1559">
<br>
  <input name="txtMinfeed049" type="text" id="txtMinfeed049" value="<?Php echo $arddb13; ?>" size="40" placeholder="<?Php echo $arddb13; ?>"  required ><br>
  <input name="txtMinfeeb059" type="text" id="txtMinfeeb059" value="<?Php echo $arbit1d3; ?>" size="40" placeholder="<?Php echo $arbit1d3; ?>"  required ><br>
  <input name="txtMinfeeb069" type="text" id="txtMinfeeb069" value="<?Php echo $arPin13; ?>" size="40" placeholder="<?Php echo $arPin13; ?>"  required ><br>
  <input name="btnSvMinfDoge029" type="submit" id="btnSvMinfDoge029" value="<?Php echo $Adm11; ?>"  title="Save"> <br>
</form>
<h3><?Php echo $IdAdm." Bitcoin ".$IdAdm1." 4"; ?></h3>
<form action="" class="frmCntm104" method="post" name="frmCntm104" id="frmCntm104">
<br>
  <input name="txtMinfeeb101" type="text" id="txtMinfeeb101" value="<?Php echo $arbdb14; ?>" size="40" placeholder="<?Php echo $arbdb14; ?>"  required ><br>
  <input name="txtMinfeeb102" type="text" id="txtMinfeeb102" value="<?Php echo $arbit1b4; ?>" size="40" placeholder="<?Php echo $arbit1b4; ?>"  required ><br>
  <input name="txtMinfeeb103" type="text" id="txtMinfeeb103" value="<?Php echo $arPin14; ?>" size="40" placeholder="<?Php echo $arPin14; ?>"  required ><br>
  <input name="btnSvMinfBit101" type="submit" id="btnSvMinfBit101" value="<?Php echo $Adm11; ?>"  title="Save"> <br>
</form>
 <br>
 <h3><?Php echo $IdAdm." Dogecoin ".$IdAdm1." 4"; ?></h3>
<form action="" class="frmCntd1155" method="post" name="frmCntd1155" id="frmCntd1155">
<br>
  <input name="txtMinfeed104" type="text" id="txtMinfeed104" value="<?Php echo $arddb14; ?>" size="40" placeholder="<?Php echo $arddb14; ?>"  required ><br>
  <input name="txtMinfeeb105" type="text" id="txtMinfeeb105" value="<?Php echo $arbit1d4; ?>" size="40" placeholder="<?Php echo $arbit1d4; ?>"  required ><br>
  <input name="txtMinfeeb106" type="text" id="txtMinfeeb106" value="<?Php echo $arPin14; ?>" size="40" placeholder="<?Php echo $arPin14; ?>"  required ><br>
  <input name="btnSvMinfDoge102" type="submit" id="btnSvMinfDoge102" value="<?Php echo $Adm11; ?>"  title="Save"> <br>
</form>
<h3><?Php echo $IdAdm." Bitcoin ".$IdAdm1." 5"; ?></h3>
<form action="" class="frmCntm1447" method="post" name="frmCntm1447" id="frmCntm1447">
<br>
  <input name="txtMinfeeb018" type="text" id="txtMinfeeb018" value="<?Php echo $arbdb15; ?>" size="40" placeholder="<?Php echo $arbdb15; ?>"  required ><br>
  <input name="txtMinfeeb028" type="text" id="txtMinfeeb028" value="<?Php echo $arbit1b5; ?>" size="40" placeholder="<?Php echo $arbit1b5; ?>"  required ><br>
  <input name="txtMinfeeb038" type="text" id="txtMinfeeb038" value="<?Php echo $arPin15; ?>" size="40" placeholder="<?Php echo $arPin15; ?>"  required ><br>
  <input name="btnSvMinfBit018" type="submit" id="btnSvMinfBit018" value="<?Php echo $Adm11; ?>"  title="Save"> <br>
</form>
 <br>
 <h3><?Php echo $IdAdm." Dogecoin ".$IdAdm1." 5"; ?></h3>
<form action="" class="frmCntd1558" method="post" name="frmCntd1558" id="frmCntd1558">
<br>
  <input name="txtMinfeed048" type="text" id="txtMinfeed048" value="<?Php echo $arddb15; ?>" size="40" placeholder="<?Php echo $arddb15; ?>"  required ><br>
  <input name="txtMinfeeb058" type="text" id="txtMinfeeb058" value="<?Php echo $arbit1d5; ?>" size="40" placeholder="<?Php echo $arbit1d5; ?>"  required ><br>
  <input name="txtMinfeeb068" type="text" id="txtMinfeeb068" value="<?Php echo $arPin15; ?>" size="40" placeholder="<?Php echo $arPin15; ?>"  required ><br>
  <input name="btnSvMinfDoge028" type="submit" id="btnSvMinfDoge028" value="<?Php echo $Adm11; ?>"  title="Save"> <br>
</form>
</div>
</div>

</div>
      </table>
      </div>
      </div>
      </div>
      </div>
      </div>    <br>

						</div>
					</div>

		    <footer class="footer">
	            <div class="container-fluid">
	                <nav class="pull-left">

	                </nav>
	                <p class="copyright pull-right">
	                    	&copy; <script>document.write(new Date().getFullYear())</script> <a href="/">CMine.com</a> Cloud Mining cryptocurrency
	                </p>
	            </div>
	        </footer>
		</div>
  <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
</body>
<?Php include_once("incljs.php"); ?>
</html>