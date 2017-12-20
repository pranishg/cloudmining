<?Php include_once("bd.php"); ?>
<style type="text/css">
<!--
body,td,th {
	font-size: 18px;
	color: #7C8081;
}
body {
	background-repeat: repeat;
}
-->
</style>
<?php
$DBID = mysql_query("SELECT id FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arIDFILE = mysql_fetch_array($DBID) or die(mysql_error());
$myideasy = $arIDFILE['id'];
$mymdid = md5($myideasy);
$myfileid = $mymdid.".txt";
$myfd = './histor/'.$myfileid;
	$f = fopen($myfd, "r");
	while(!feof($f)) { 
	    echo fgets($f) . "<br />";
	}
	fclose($f);

?>

