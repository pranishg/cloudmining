<?Php include_once("bd.php"); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>CMINE</title>
	</head>

  <body>
<br>
<br>
<br>
<br>
<br>
<div align="center" Style="top: 50%"><img src="img/demo-screen-3.gif" alt=""><h1>LOGIN...</h1></img></div>
<?Php
  $ip = $_SERVER['REMOTE_ADDR'];
    $CBLOGINll = mysql_query("SELECT id FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
    $GENLOGll = mysql_fetch_array($CBLOGINll) or die(mysql_error());
    $GENHISll = $GENLOGll['id'];
    $GENmdlll = md5($GENHISll);
    $GENfilehisll = $GENmdlll.".txt";
    $GENadrhisll = './histor/'.$GENfilehisll;

    $hreflogdate = date("d-m-Y  H:i");
    $hisbull = $hreflogdate." - ".$LtLog." IP ".$ip." ".'<br>';
//----------------------------------------------------------------------
    $text_1dll=file_get_contents($GENadrhisll);
    $fdlzll=$hisbull.$text_1dll;
    $f_outzll = fopen($GENadrhisll,"w");
    fwrite($f_outzll, $fdlzll);
    fclose($f_outzll);
echo "<meta http-equiv='Refresh' content='0; URL=index.php'>";
?>
</body>
</html>