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
<?Php
$DBCash = mysql_query("SELECT Cash FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$DBLtcDoge = mysql_query("SELECT Cashdoge FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$array = mysql_fetch_array($DBCash);
$arrayCdoge = mysql_fetch_array($DBLtcDoge);
$arrayCF = $array['Cash'];
$CashDoge = $arrayCdoge['Cashdoge'];
$arrayCVF = number_format($arrayCF, 8, '.', '');
$CashDogeF = number_format($CashDoge, 8, '.','');
//----------------------------------------------------------
$DBProf = mysql_query("SELECT IP, email, reg_date FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$DBReffer = mysql_query("SELECT my_refflink FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$arrayProf = mysql_fetch_array($DBProf) or die(mysql_error());
$arrayMyref = mysql_fetch_array($DBReffer) or die(mysql_error());
$IPProf = $arrayProf['IP'];
$mailProf = $arrayProf['email'];
$RegDProf = $arrayProf['reg_date'];
$DVSsite = "http://test.z-files.site";    //    Изменить на свой новый домен
$Myreflink = $arrayMyref['my_refflink'];
//-------------------------------------------------
$DBProfMain = mysql_query("SELECT gpassword, name_user, lastname, adresswithdraw, cpin  FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$DBDogeDeposit = mysql_query("SELECT adresswithdrawd FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$DepoDogeProf = mysql_fetch_array($DBDogeDeposit) or die(mysql_error());
$arrayAdrP = mysql_fetch_array($DBProfMain) or die(mysql_error()) ;
$MypasswordP = $arrayAdrP['gpassword'];
$UsernameP = $arrayAdrP['name_user'];
$UserlastP = $arrayAdrP['lastname'];
$UseradrP = $arrayAdrP['adresswithdraw'];
$cpin = $arrayAdrP['cpin'];
$UseradrDadr = $DepoDogeProf['adresswithdrawd'];
if (empty($arrayAdrP['cpin'])) {
$ccpin = "";
$cdis = "";
}
else {
$ccpin = $LPncd2;
$cdis = "disabled";
}
?>
<?Php
$DBRefframe = mysql_query("SELECT reffer_id, my_refflink FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$Refmain = mysql_fetch_array($DBRefframe) or die(mysql_error());
$Refidframe = $Refmain['reffer_id'];
$Myrefframe = $Refmain['my_refflink'];
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
</head>

<body>
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

                                                                 	          <!-- Moda500 -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModa500" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content" Style="background: url(assets/img/faces/tbl1.png);">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h3 class="modal-title" Style=" color: #FFFFFF;">CMINE</h3>
		                      </div>
		                      <div class="modal-body">

                              	<div class="row">

						<div class="col-lg-6 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title"><?Php echo $Yrrfls1; ?></h4>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-warning">

	                                    </thead>
	                                    <tbody>
                                        <th><div align="center">
<form name="frmarrayref" method="post" action="">
  <br>
<div><?Php $DBvabref = mysql_query("SELECT * FROM greffer WHERE reffer_id='$Myrefframe'");
while ($Refvar = mysql_fetch_array($DBvabref))
{
$refherid = $Refvar['id'];
$refherlink = $Refvar['email'];
$refhername = $Refvar['name'];
if (empty($refhername)) {
$refhernamer = "NoName";
}
else {
$refhernamer = $Refvar['name'];
}
//------------------------------------

//------------------------------------
echo $refherlink."<br />\n";
}  ?><br></div>
  </form>

  <p align="left">&nbsp;</p>
</div></th>
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
						</div>
					</div>
                              </div>
		                  </div>
		              </div>
		          </div>
		          <!-- moda500 -->

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
	                <li>
	                    <a href="history.php">
	              <i class="fa fa-book" aria-hidden="true"></i>
	                        <p><?Php echo $LHist; ?></p>
	                    </a>
	                </li>
                          <li class="active">
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
						<a class="navbar-brand" href="#"><?Php echo $LUsp; ?></a>
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
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title"><?Php echo $LUPrf; ?></h4>
									<p class="category"><?Php echo $LUPrf1; ?></p>
	                            </div>
	                            <div class="card-content">
	                                <form method="post" action="users.php" name="frmProf" id="frmProf">
	                                    <div class="row">
                                             <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label"><?Php echo $LtLog; ?></label>
													<input type="text" value="<?Php echo $login; ?>" class="form-control" disabled>
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label"><?Php echo $LtMail; ?></label>
													<input type="email" value="<?Php echo $mailProf; ?>" class="form-control" disabled>
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label"><?Php echo $LUPFn; ?></label>
													<input type="text" name="txtName" id="txtName" value="<?Php echo $UsernameP; ?>" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label"><?Php echo $LUPLn; ?></label>
													<input type="text" name="txtLastName" id="txtLastName" value="<?Php echo $UserlastP; ?>" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Bitcoin <?Php echo $LWall; ?></label>
													<input type="text" name="txtWithdrawAdr" id="txtWithdrawAdr" value="<?Php echo $UseradrP; ?>" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

                                           <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Dogecoin <?Php echo $LWall; ?></label>
													<input type="text" name="txtWithdrawAdrDoge" id="txtWithdrawAdrDoge" value="<?Php echo $UseradrDadr; ?>" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

                                         <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label"><?Php echo $LPncd." ".$LPncd1; ?></label>
													<input type="text" maxlength="4" name="txtcpin" id="txtcpin" value="<?Php echo $ccpin; ?>" oninput="Ftest (this)"
       onpropertychange="if ('v' == '\v' && parseFloat (navigator.userAgent.split ('MSIE ') [1].split (';') [0]) <= 9) Ftest (this)"  class="form-control" <?Php echo $cdis; ?> >
												</div>
	                                        </div>
	                                    </div>

                                          <button type="submit" name="btnSave" id="btnSave" class="btn btn-primary pull-right"><?Php echo $LUPrfbtn; ?></button>
	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
													<div class="form-group label-floating">
								    					<span class="form-control" rows="5"></span>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>
                                          </form>
                                           <form  method="post" action="password.php" name="frmPass" id="frmPass">
	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label"><?Php echo $LtPass; ?></label>
													<input type="password" name="txtPassword" id="txtPassword" class="form-control" required >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label"><?Php echo $LtNNPass; ?></label>
													<input type="text" name="txtNewpassword" id="txtNewpassword" class="form-control" required >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label"><?Php echo $LtCPass; ?></label>
													<input type="text" name="txtConfirm" id="txtConfirm" class="form-control" required >
												</div>
	                                        </div>
	                                    </div>
                                        <button type="submit" name="btnChange" id="btnChange" class="btn btn-primary pull-right"><?Php echo $LChPass; ?></button>
                                         </form>
                                           <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
													<div class="form-group label-floating">
								    					<span class="form-control" rows="5"></span>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="clearfix"></div>
	                            </div>
	                        </div>
	                    </div>
						<div class="col-md-12">
    						<div class="card card-profile">
    							<div class="card-avatar">
    								<a href="/">
    									<img class="img" src="assets/img/faces/marc.jpg" />
    								</a>
    							</div>

    							<div class="content">
    								<h6 class="category text-gray">CMINE</h6>
    								<h4 class="card-title"><?Php echo $login; ?></h4>
    								<p class="card-content">
    									<?Php echo $LPIP." ".$IPProf; ?>
                                        <input type="button" onclick="swal.queue([{
  title: '<?Php echo $LPInn; ?>',
  confirmButtonText: '<?Php echo $LPInn2; ?>',
  text:
    '<?Php echo $LPInn." ".$LPInn1; ?> ',
  showLoaderOnConfirm: true,
  preConfirm: function () {
    return new Promise(function (resolve) {
      $.get('https://api.ipify.org?format=json')
        .done(function (data) {
          swal.insertQueueStep(data.ip)
          resolve()
        })
    })
  }
}])" value="<?Php echo $LPIPn; ?>" class="btn btn-primary btn-round">
    								</p> <br>
                                    <p class="card-content">
                                      <?Php echo $LPdtr." ".$RegDProf; ?>
                                    </p>
                                    <p class="card-content">
                                       <?Php echo $LPrefl; ?>
                                    </p>
    								<input type="button" onclick="swal({ html: '<p><?Php echo $DVSsite; ?>/?ref=<?php echo $Myreflink; ?></p>', showCloseButton: true})" value="<?Php echo $LPshow; ?>" class="btn btn-primary btn-round">
                                    <a data-toggle="modal" href="#myModa500" class="btn btn-primary btn-round"><?Php echo $Yrrfls2; ?></a>
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
