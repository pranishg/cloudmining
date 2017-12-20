<?Php include_once("bd.php"); ?>
<?Php
$DBmyday = mysql_query("SELECT daycash, daycashdoge, countref FROM greffer WHERE rlogin='$login'AND rrpassword='$password' AND activation='1' ");
$ReMy = mysql_fetch_array($DBmyday) or die(mysql_error());
$ReRenk = $ReMy['daycash'];
//---------
$DBrule = mysql_query("SELECT rulebuy FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arRULE = mysql_fetch_array($DBrule) or die(mysql_error());
$SRULE=$arRULE['rulebuy'];
//---------
$ReRenkdoge = $ReMy['daycashdoge'];
$ReCountWin = $ReMy['countref'];
$DBRTB = mysql_query("SELECT bnsB, bnsD FROM costsmc WHERE id='1' ");
$arraRT = mysql_fetch_array($DBRTB);
$bnsBIT = $arraRT['bnsB'];
$bnsDOGE = $arraRT['bnsD'];
if ($ReRenk !=0) {
$testtest = "";
}
if ($ReRenkdoge !=0) {
$testtestdoge = "";
}
if ($SRULE == "false") {
$testbuy = "";
mysql_query("UPDATE gusers SET rulebuy = 'true' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
}
$CBBNREG = mysql_query("SELECT bforreg FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$GENREG1 = mysql_fetch_array($CBBNREG) or die(mysql_error());
$Mynmbdrreg = $GENREG1['bforreg'];
if (empty($GENREG1['bforreg'])){
$testbonus = "";
  $CBLOGINll1 = mysql_query("SELECT id FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
    $GENLOGll1 = mysql_fetch_array($CBLOGINll1) or die(mysql_error());
    $GENHISll1 = $GENLOGll1['id'];
    $GENmdlll1 = md5($GENHISll1);
    $GENfilehisll1 = $GENmdlll1.".txt";
    $GENadrhisll1 = './histor/'.$GENfilehisll1;

    $hreflogdate1 = date("d-m-Y  H:i");
    $hisbull1 = $hreflogdate1." - ".$Fq25." ".$bnsBIT." BTC ".$bnsDOGE." Doge"." ".'<br>';
//----------------------------------------------------------------------
    $text_1dll1=file_get_contents($GENadrhisll1);
    $fdlzll1=$hisbull1.$text_1dll1;
    $f_outzll1 = fopen($GENadrhisll1,"w");
    fwrite($f_outzll1, $fdlzll1);
    fclose($f_outzll1);
mysql_query("UPDATE gusers SET bforreg = '1' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
}
?>