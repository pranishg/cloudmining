<!--<!doctype html>-->
<?php session_start();
if(empty($_SESSION['name']))
{
    header("Location:http://54.37.2.42");
}
//echo $_SESSION['name'];
$dedicatedminor="";$shareddminor="";;
        include_once '../../dbconfig.php';
        $username=$_SESSION['name'];
        $password=$_SESSION['password'];
        $sql = "select * from user_details where username='$username' and password='$password'";
        $result = mysqli_query($conn, $sql);
//        $rows = mysqli_fetch_assoc($result);
       while($row = mysqli_fetch_assoc($result)){   //Creates a loop to loop through results
$dedicatedminor=$row['dedicated_minor'];
$shareddminor=$row['shared_minor'];
}
$daily_income="";$monthly_forcast="";$days_forcast="";$end_of_contract="";
    $sql = "select * from income where username='$username'";
        $result = mysqli_query($conn, $sql);
//        $rows = mysqli_fetch_assoc($result);
       while($row = mysqli_fetch_assoc($result)){   //Creates a loop to loop through results
$daily_income=$row['daily_income'];
$monthly_forcast=$row['monthly_forcast'];
$days_forcast=$row['45days_forcast'];
$end_of_contract=$row['end_of_contract'];
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">
    
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="assets/lib/onoffcanvas/onoffcanvas.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="assets/lib/animate.css/animate.css">


        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
body {font-family: calibri;}
.bgColor {
        max-width: 384px;
    height: 328px;
    background-color: #c3e8cb;
    padding: 30px;
    border-radius: 4px;
	text-align: center;    
}
#targetOuter{	
	position:relative;
    text-align: center;
    background-color: #F0E8E0;
    margin: 20px auto;
    width: 200px;
    height: 200px;
	border-radius: 4px;
}
.btnSubmit {
    background-color: #565656;
    border-radius: 4px;
    padding: 10px;
    border: #333 1px solid;
    color: #FFFFFF;
    width: 200px;
	cursor:pointer;
}
.inputFile {
    padding: 5px 0px;
	margin-top:8px;	
    background-color: #FFFFFF;
    width: 48px;	
    overflow: hidden;
	opacity: 0;	
	cursor:pointer;
}
.icon-choose-image {
    position: absolute;
    opacity: 0.1;
    top: 50%;
    left: 50%;
    margin-top: -24px;
    margin-left: -24px;
    width: 48px;
    height: 48px;
}
.upload-preview {border-radius:4px;}
#body-overlay {background-color: rgba(0, 0, 0, 0.6);z-index: 999;position: absolute;left: 0;top: 0;width: 100%;height: 100%;display: none;}
#body-overlay div {position:absolute;left:50%;top:50%;margin-top:-32px;margin-left:-32px;}

</style>
    <!--For Development Only. Not required -->
    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/assets/"
        };
    </script>
    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>

  </head>

        <body class="  ">
            <div class="bg-dark dk" id="wrap">
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">
                    
                    
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <header class="navbar-header">
                    
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
                    
                            </header>
                    
                    
                    
                            <div class="topnav">
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                                       class="btn btn-default btn-sm" id="toggleFullScreen">
                                        <i class="glyphicon glyphicon-fullscreen"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-envelope"></i>
                                        <span class="label label-warning">5</span>
                                    </a>
                                    <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-comments"></i>
                                        <span class="label label-danger">4</span>
                                    </a>
                                    <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                       class="btn btn-default btn-sm"
                                       href="#helpModal">
                                        <i class="fa fa-question"></i>
                                    </a>
                                </div>
                            <!--    <div class="btn-group">
                                    <a href="login.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>
                                    </a>
                                </div>
-->
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip"
                                       class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                    <a href="#right" data-toggle="onoffcanvas" class="btn btn-default btn-sm" aria-expanded="false">
                                        <span class="fa fa-fw fa-comment"></span>
                                    </a>
                                </div>
                    
                            </div>
                    
                    
                    
                    
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                    
                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="dashboard.php">Dashboard</a></li>
<!--                                    <li><a href="table.html">Tables</a></li>
                                    <li class='dropdown '>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Form Elements <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="form-general.html">General</a></li>
                                            <li><a href="form-validation.html">Validation</a></li>
                                            <li><a href="form-wysiwyg.html">WYSIWYG</a></li>
                                            <li><a href="form-wizard.html">Wizard &amp; File Upload</a></li>
                                        </ul>
                                    </li>-->
                                </ul>
                                <!-- /.nav -->
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                    <!-- /.navbar -->
                        <header class="head">
                                <div class="search-bar">
                                    <form class="main-search" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Live Search ...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                    <!-- /.main-search -->                                </div>
                                <!-- /.search-bar -->
                            <div class="main-bar">
                                <h3>
              <i class="fa fa-dashboard"></i>&nbsp;
            Dashboard
          </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
                <!-- /#top -->
                    <div id="left">
                        <div class="media user-media bg-dark dker">
                            <div class="user-media-toggleHover">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="user-wrapper bg-dark">
                                
                                
  
                                <div id="body-overlay"><div><img src="images/loading.gif" width="64px" height="64px"/></div></div>
<form id="uploadForm" action="upload.php" method="post">
                                <div class="bgColor">

<div id="targetOuter">
   
	<div id="targetLayer"></div>
       
        
        <!--<img src="//<?php //echo $filename;?>"  width="200px" height="200px" id="txtuserimage"/>-->
        <?php
//        }
//        else{
        ?>
	<img src="images/photo.png"  class="icon-choose-image" alt="change image"/>
        <?php //} ?>
	<div class="icon-choose-image" >
	<input name="userImage" id="userImage" type="file" class="inputFile" onChange="showPreview(this);" />
	</div>
</div>
<div>
<input type="submit" value="Upload Photo" class="btnSubmit" />

</div>
</div>
    </form>
<!--                                <a class="user-link" href="">
                                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif" onChange="showPreview(this);">
                                    <span class="label label-danger user-label"></span>
                                </a>-->
                                
                                
                        
                                <div class="media-body">
                                    <h2 class="media-heading" style="color:red;"><strong><?php echo $_SESSION['name'];?></strong></h2>
                                    <ul class="list-unstyled user-info">
                                        <li><a href="">Administrator</a></li>
<!--                                        <li>Last Access : <br>
                                            <small><i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small>
                                        </li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- #menu -->
                        <ul id="menu" class="bg-blue dker">
                                  <li class="nav-header">Menu</li>
                                  <li class="nav-divider"></li>
                                  <li class="">
                                    <a href="dashboard.php">
                                      <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span>
                                    </a>
                                  </li>
                                  <li class="">
                                    <a href="" id="mydiv">
                                      <i class="fa fa-building "></i>
                                      <span class="link-title">My Wallet</span>
                                      <span class="fa arrow"></span>
                                    </a>
<!--                                    <ul class="collapse">
                                      <li>
                                        <a href="boxed.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout </a>
                                      </li>
                                      <li>
                                        <a href="fixed-header-boxed.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout &amp; Fixed Header </a>
                                      </li>
                                      <li>
                                        <a href="fixed-header-fixed-mini-sidebar.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Fixed Header and Fixed Mini Menu </a>
                                      </li>
                                      <li>
                                        <a href="fixed-header-menu.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Fixed Header &amp; Menu </a>
                                      </li>
                                      <li>
                                        <a href="fixed-header-mini-sidebar.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Fixed Header &amp; Mini Menu </a>
                                      </li>
                                      <li>
                                        <a href="fixed-header.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Fixed Header </a>
                                      </li>
                                      <li>
                                        <a href="fixed-menu-boxed.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout &amp; Fixed Menu </a>
                                      </li>
                                      <li>
                                        <a href="fixed-menu.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Fixed Menu </a>
                                      </li>
                                      <li>
                                        <a href="fixed-mini-sidebar.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Fixed &amp; Mini Menu </a>
                                      </li>
                                      <li>
                                        <a href="fxhmoxed.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Boxed and Fixed Header &amp; Nav </a>
                                      </li>
                                      <li>
                                        <a href="no-header-sidebar.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; No Header &amp; Sidebars </a>
                                      </li>
                                      <li>
                                        <a href="no-header.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; No Header </a>
                                      </li>
                                      <li>
                                        <a href="no-left-right-sidebar.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; No Left &amp; Right Sidebar </a>
                                      </li>
                                      <li>
                                        <a href="no-left-sidebar-main-search.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; No Left Sidebar &amp; Main Search </a>
                                      </li>
                                      <li>
                                        <a href="no-left-sidebar.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; No Left Sidebar </a>
                                      </li>
                                      <li>
                                        <a href="no-main-search.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; No Main Search </a>
                                      </li>
                                      <li>
                                        <a href="no-right-sidebar.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; No Right Sidebar </a>
                                      </li>
                                      <li>
                                        <a href="sm.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Mini Sidebar </a>
                                      </li>
                                    </ul>-->
                                  </li>
                                  <li class="">
                                    <a href="javascript:;">
                                      <i class="fa fa-tasks"></i>
                                      <span class="link-title">Transaction History</span>
                                      <span class="fa arrow"></span>
                                    </a>
<!--                                    <ul class="collapse">
                                      <li>
                                        <a href="bgcolor.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Bg Color </a>
                                      </li>
                                      <li>
                                        <a href="bgimage.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Bg Image </a>
                                      </li>
                                      <li>
                                        <a href="button.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Buttons </a>
                                      </li>
                                      <li>
                                        <a href="icon.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Icon </a>
                                      </li>
                                      <li>
                                        <a href="pricing.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Pricing Table </a>
                                      </li>
                                      <li>
                                        <a href="progress.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Progress </a>
                                      </li>
                                    </ul>-->
                                  </li>
                                  <li class="">
                                    <a href="javascript:;">
                                      <i class="fa fa-pencil"></i>
                                      <span class="link-title">
                                    Refereel Status
                        	  </span>
                                      <span class="fa arrow"></span>
                                    </a>
<!--                                    <ul class="collapse">
                                      <li>
                                        <a href="form-general.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Form General </a>
                                      </li>
                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Form Validation </a>
                                      </li>
                                      <li>
                                        <a href="form-wizard.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Form Wizard </a>
                                      </li>
                                      <li>
                                        <a href="form-wysiwyg.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Form WYSIWYG </a>
                                      </li>
                                    </ul>-->
                                  </li>
                                  <li>
                                    <a href="logout.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Logout</span>
                                    </a>
                                  </li>
                                  <!--<li>-->
<!--                                    <a href="typography.html">
                                      <i class="fa fa-font"></i>
                                      <span class="link-title">
                                    Typography
                                  </span>  </a>
                                  </li>
                                  <li>
                                    <a href="maps.html">
                                      <i class="fa fa-map-marker"></i><span class="link-title">
                                    Maps
                                  </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="chart.html">
                                      <i class="fa fa fa-bar-chart-o"></i>
                                      <span class="link-title">
                                    Charts
                                  </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="calendar.html">
                                      <i class="fa fa-calendar"></i>
                                      <span class="link-title">
                                    Calendar
                                  </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="javascript:;">
                                      <i class="fa fa-exclamation-triangle"></i>
                                      <span class="link-title">
                                      Error Pages
                                    </span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="403.html">
                                          <i class="fa fa-angle-right"></i>&nbsp;403</a>
                                      </li>
                                      <li>
                                        <a href="404.html">
                                          <i class="fa fa-angle-right"></i>&nbsp;404</a>
                                      </li>
                                      <li>
                                        <a href="405.html">
                                          <i class="fa fa-angle-right"></i>&nbsp;405</a>
                                      </li>
                                      <li>
                                        <a href="500.html">
                                          <i class="fa fa-angle-right"></i>&nbsp;500</a>
                                      </li>
                                      <li>
                                        <a href="503.html">
                                          <i class="fa fa-angle-right"></i>&nbsp;503</a>
                                      </li>
                                      <li>
                                        <a href="offline.html">
                                          <i class="fa fa-angle-right"></i>&nbsp;offline</a>
                                      </li>
                                      <li>
                                        <a href="countdown.html">
                                          <i class="fa fa-angle-right"></i>&nbsp;Under Construction</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="grid.html">
                                      <i class="fa fa-columns"></i>
                                      <span class="link-title">
                            Grid
                            </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="blank.html">
                                      <i class="fa fa-square-o"></i>
                                      <span class="link-title">
                            Blank Page
                            </span>
                                    </a>
                                  </li>
                                  <li class="nav-divider"></li>
                                  <li>
                                    <a href="login.html">
                                      <i class="fa fa-sign-in"></i>
                                      <span class="link-title">
                            Login Page
                            </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="javascript:;">
                                      <i class="fa fa-code"></i>
                                      <span class="link-title">
                            	Unlimited Level Menu
                            	</span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a>
                                        <ul class="collapse">
                                          <li> <a href="javascript:;">Level 2</a>  </li>
                                          <li> <a href="javascript:;">Level 2</a>  </li>
                                          <li>
                                            <a href="javascript:;">Level 2  <span class="fa arrow"></span>  </a>
                                            <ul class="collapse">
                                              <li> <a href="javascript:;">Level 3</a>  </li>
                                              <li> <a href="javascript:;">Level 3</a>  </li>
                                              <li>
                                                <a href="javascript:;">Level 3  <span class="fa arrow"></span>  </a>
                                                <ul class="collapse">
                                                  <li> <a href="javascript:;">Level 4</a>  </li>
                                                  <li> <a href="javascript:;">Level 4</a>  </li>
                                                  <li>
                                                    <a href="javascript:;">Level 4  <span class="fa arrow"></span>  </a>
                                                    <ul class="collapse">
                                                      <li> <a href="javascript:;">Level 5</a>  </li>
                                                      <li> <a href="javascript:;">Level 5</a>  </li>
                                                      <li> <a href="javascript:;">Level 5</a>  </li>
                                                    </ul>
                                                  </li>
                                                </ul>
                                              </li>
                                              <li> <a href="javascript:;">Level 4</a>  </li>
                                            </ul>
                                          </li>
                                          <li> <a href="javascript:;">Level 2</a>  </li>
                                        </ul>
                                      </li>
                                      <li> <a href="javascript:;">Level 1</a>  </li>
                                      <li>
                                        <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a>
                                        <ul class="collapse">
                                          <li> <a href="javascript:;">Level 2</a>  </li>
                                          <li> <a href="javascript:;">Level 2</a>  </li>
                                          <li> <a href="javascript:;">Level 2</a>  </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </li>
                                </ul>-->
                        <!-- /#menu -->
                    </div>
                    <!-- /#left -->
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <div class="text-center">
    <ul class="stats_box">
	<li style="height: 46px;">
            <div class="bar_week"><img src="antminer-logo.png" width="50px"/></div>
	    <div class="stat_text">
		<strong><?php echo $dedicatedminor?></strong>
		<!--<span class="percent down"> <i class="fa fa-caret-down"></i> </span>-->
	    </div>
	</li>
	<li style="height: 46px;">
            <div class="bar_week"><img src="energy_lightning_power_electric_electricity_logo_by_andrea_perry-d840ydr.png" width="18px"/></div>
	    <div class="stat_text">
		<strong><?php echo $shareddminor;?></strong>
		<!--<span class="percent up"> <i class="fa fa-caret-up"></i> </span>-->
	    </div>
	</li>
	<li>
	    <div class="sparkline pie_week"></div>
	    <div class="stat_text">
		<strong><?php echo $daily_income;?></strong>
		<span class="percent"></span>
	    </div>
	</li>
	<li>
	    <div class="sparkline stacked_month"></div>
	    <div class="stat_text">
		<strong><?php echo $monthly_forcast;?></strong>
		<span class="percent down"> <i class="fa fa-caret-down"></i> </span>
	    </div>
	</li>
        	<li>
	    <div class="sparkline stacked_month"></div>
	    <div class="stat_text">
		<strong><?php echo $days_forcast;?></strong>
		<span class="percent down"> <i class="fa fa-caret-down"></i> </span>
	    </div>
	</li>
        	<li>
	    <div class="sparkline stacked_month"></div>
	    <div class="stat_text">
		<strong><?php echo $end_of_contract;?></strong>
		<span class="percent down"> <i class="fa fa-caret-down"></i> </span>
	    </div>
	</li>
    </ul>
</div>
<hr>
<!--<div class="text-center">

    <a class="quick-btn" href="#">
	<i class="fa fa-bolt fa-2x"></i>
	<span>default</span>
	<span class="label label-default">2</span>
    </a>
    <a class="quick-btn" href="#">
	<i class="fa fa-check fa-2x"></i>
	<span>danger</span>
	<span class="label label-danger">2</span>
    </a>
    <a class="quick-btn" href="#">
	<i class="fa fa-building-o fa-2x"></i>
	<span>No Label</span>
    </a>
    <a class="quick-btn" href="#">
	<i class="fa fa-envelope fa-2x"></i>
	<span>success</span>
	<span class="label label-success">-456</span>
    </a>
    <a class="quick-btn" href="#">
	<i class="fa fa-signal fa-2x"></i>
	<span>warning</span>
	<span class="label label-warning">+25</span>
    </a>
    <a class="quick-btn" href="#">
	<i class="fa fa-external-link fa-2x"></i>
	<span>π</span>
	<span class="label btn-metis-2">3.14159265</span>
    </a>
    <a class="quick-btn" href="#">
	<i class="fa fa-lemon-o fa-2x"></i>
	<span>é</span>
	<span class="label btn-metis-4">2.71828</span>
    </a>
    <a class="quick-btn" href="#">
	<i class="fa fa-glass fa-2x"></i>
	<span>φ</span>
	<span class="label btn-metis-3">1.618</span>
    </a>

</div>-->
<hr>
<div class="row">
    <div class="col-lg-8">
	<div class="box">
	    <header>
		<h5>Line Chart</h5>
	    </header>
	    <div class="body" id="trigo" style="height: 250px;"></div>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="box">
	    <div class="body">
		<table class="table table-condensed table-hovered sortableTable">
		    <thead>
			<tr>
			    <th>Country <i class="fa sort"></i></th>
			    <th>Visit <i class="fa sort"></i></th>
			    <th>Time <i class="fa sort"></i></th>
			</tr>
		    </thead>
		    <tbody>
			<tr class="active">
			    <td>Andorra</td>
			    <td>1126</td>
			    <td>00:00:15</td>
			</tr>
			<tr>
			    <td>Belarus</td>
			    <td>350</td>
			    <td>00:01:20</td>
			</tr>
			<tr class="danger">
			    <td>Paraguay</td>
			    <td>43</td>
			    <td>00:00:30</td>
			</tr>
			<tr class="warning">
			    <td>Malta</td>
			    <td>547</td>
			    <td>00:10:20</td>
			</tr>
			<tr>
			    <td>Australia</td>
			    <td>560</td>
			    <td>00:00:10</td>
			</tr>
			<tr>
			    <td>Kenya</td>
			    <td>97</td>
			    <td>00:20:00</td>
			</tr>
			<tr class="success">
			    <td>Italy</td>
			    <td>2450</td>
			    <td>00:10:00</td>
			</tr>
		    </tbody>
		</table>
	    </div>
	</div>
    </div>
</div>
<hr>
<!--<div class="row">
    <div class="col-lg-12">
	<div class="box">
	    <header>
		<h5>Calendar</h5>
	    </header>
	    <div id="calendar_content" class="body">
		<div id='calendar'></div>
	    </div>
	</div>
    </div>
</div>-->

                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>
                <!-- /#content -->

                    <div id="right" class="onoffcanvas is-right is-fixed bg-light" aria-expanded=false>
                        <a class="onoffcanvas-toggler" href="#right" data-toggle=onoffcanvas aria-expanded=false></a>
                        <br>
                        <br>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                        </div>
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                                <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span></li>
                                <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span></li>
                                <li>Popularity <span class="dynamicbar pull-right">Loading..</span></li>
                                <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span></li>
                            </ul>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <button class="btn btn-block">Default</button>
                            <button class="btn btn-primary btn-block">Primary</button>
                            <button class="btn btn-info btn-block">Info</button>
                            <button class="btn btn-success btn-block">Success</button>
                            <button class="btn btn-danger btn-block">Danger</button>
                            <button class="btn btn-warning btn-block">Warning</button>
                            <button class="btn btn-inverse btn-block">Inverse</button>
                            <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
                            <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
                            <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
                            <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
                            <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
                            <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <span>Default</span><span class="pull-right"><small>20%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                            </div>
                            <span>Success</span><span class="pull-right"><small>40%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                            </div>
                            <span>warning</span><span class="pull-right"><small>60%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                            </div>
                            <span>Danger</span><span class="pull-right"><small>80%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /#right -->
            </div>
            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2017 &copy; Metis Bootstrap Admin Template v2.4.2</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->
            <div id="helpModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- /#helpModal -->
            <!--jQuery -->
            <script src="assets/lib/jquery/jquery.js"></script>

                    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>

            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- onoffcanvas -->
            <script src="assets/lib/onoffcanvas/onoffcanvas.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>

                <script>
                 $(document).ready(function() {
                     
   $("#targetLayer").html('<img src="<?php echo "images/".$_SESSION['name'].".jpg";?>" width="200px" height="200px" class="upload-preview" />');
//    $("#mydiv a").click(function() {
//        alert(document.URL);
////       load(document.URL +  ' #content');
//    });



});
$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "upload.php",
			type: "POST",
			data:  new FormData(this),
			beforeSend: function(){$("#body-overlay").show();},
			contentType: false,
                        processData:false,
			success: function(data)
		    {
//                        alert(data);
//                         $('#txtuserimage').hide();
//			$("#targetLayer").html(data);
			$("#targetLayer").css('opacity','1');
			setInterval(function() {$("#body-overlay").hide(); },500);
			},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
function showPreview(objFileInput) {
    if (objFileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (e) {
            $("#targetLayer").html('<img src="'+e.target.result+'" width="200px" height="200px" class="upload-preview" />');
			$("#targetLayer").css('opacity','0.7');
			$(".icon-choose-image").css('opacity','0.5');
                        $('#txtuserimage').hide();
        }
		fileReader.readAsDataURL(objFileInput.files[0]);
    }
}


	


                    $(function() {
                      Metis.dashboard();
                    });
                    
//                    $('#mydiv').click(document.URL +  ' #content');
                </script>

            <script src="assets/js/style-switcher.js"></script>
        </body>

</html>
