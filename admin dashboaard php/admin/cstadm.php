<?Php
ini_set('display_errors', 0);
error_reporting(0);
include_once("dbadm.php");
if(empty($logina) and empty($passworda)){
require("madmcminentr.html");
}
?>
<?Php
$DBRCST = mysql_query("SELECT cost1, cost3 FROM costsmc WHERE id='1' ");
$arraCST = mysql_fetch_array($DBRCST);
$HTf = $arraCST['cost1'];
$HTc = $arraCST['cost3'];
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
	                <li class="active">
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
						<a class="navbar-brand" href="#"><?Php echo $Adm10; ?></a>
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
	                                <h4 class="title"><?Php echo $Adm10; ?></h4>
                                </div>
                                     <div class="card-content table-responsive">
	                                <table class="table table-hover">
            <div class="row">
            <br>
       <div id="biths">
        <form action="incbnscst.php" class="frmHS" name="frmHS" id= "frmHS" method="post" action="">
        <Label>Sha-256 (1 GH/s)</Label><br>
        <input name="txtHS" id= "txtHS" type="text" value="<?Php echo $HTc; ?>"  size="35" placeholder="0.00000000" required ><br>
          <input name="btnHS" type="submit" value="<?Php echo $Adm11; ?>" >
        </form>
        </div>
        <div id="litehs">
        <form action="incbnscst.php" class="frmHF" name="frmHF" id= "frmHF" method="post" action="">
        <Label>Scrypt (1 MH/s)</Label><br>
        <input name="txtHF" id= "txtHF" type="text" value="<?Php echo $HTf; ?>"  size="35"  placeholder="0.00000000" required ><br>
        <input name="btnHF" type="submit" value="<?Php echo $Adm11; ?>"  >
        </form>
        </div>
<br>
</div>
      </table>
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