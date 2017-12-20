<?Php
include_once("dbadm.php");
$MyAdrB = $_POST['txtBitAdr'];
$MyMailkB = $_POST['txtBitM'];
$MyDDB = "";
 if (isset($_POST['btnPAY'])){
$WiLOGIN = mysql_query("SELECT id, amountwithdraw FROM gusers WHERE email = '$MyMailkB' AND adresswithdraw = '$MyAdrB' ");
$WiNLOG = mysql_fetch_array($WiLOGIN) or die(mysql_error());
$WINAMWTH = $WiNLOG['amountwithdraw'];
$WiNHIS = $WiNLOG['id'];
$WiNmdl = md5($WiNHIS);
$WiNfilehis = $WiNmdl.".txt";
$WiNadrhis = '../histor/'.$WiNfilehis;
$witdate = date("d-m-Y  H:i");
$hisbuwith = $witdate." - ".$Adm7." ".$WINAMWTH." BTC"." ".$Tadrsb." ".$MyAdrB.'<br>';
//----------------------------------------------------------------------
  $text_1dwi=file_get_contents($WiNadrhis);
  $fdlzwi=$hisbuwith.$text_1dwi;
  $f_outzwi = fopen($WiNadrhis,"w");
  fwrite($f_outzwi, $fdlzwi);
  fclose($f_outzwi);
//----------------------------------------------------------------------
 mysql_query("UPDATE gusers SET datewithdraw = '$MyDDB', amountwithdraw = '$MyDDB', withbtctr = '$MyDDB' WHERE email = '$MyMailkB'  AND adresswithdraw = '$MyAdrB' ");
  header('Location:index.php');
 }
//----------------------------------------------------------------------
$MyAdr = $_POST['txtDogeAdr'];
$MyMailk = $_POST['txtDogeM'];
$MyDD = "";
 if (isset($_POST['btnPAYD'])){
$WiLadrrr = mysql_query("SELECT amountwithdrawd FROM ltcdoge WHERE email = '$MyMailk' AND adresswithdrawd = '$MyAdr' ");
$WiNLOGrrr = mysql_fetch_array($WiLadrrr) or die(mysql_error());
$WiLOGIN = mysql_query("SELECT id FROM gusers WHERE email = '$MyMailk' ");
$WiNLOG = mysql_fetch_array($WiLOGIN) or die(mysql_error());
$WiDgzdr = $WiNLOGrrr['amountwithdrawd'];
$WiNHIS1 = $WiNLOG['id'];
$WiNmdl1 = md5($WiNHIS1);
$WiNfilehis1 = $WiNmdl1.".txt";
$WiNadrhis1 = '../histor/'.$WiNfilehis1;
//--------------------------------------
$witdated = date("d-m-Y  H:i");
$hisbuwith1 = $witdated." - ".$Adm7." ".$WiDgzdr." Doge"." ".$Tadrsb." ".$MyAdr.'<br>';
//----------------------------------------------------------------------
  $text_1dwi1=file_get_contents($WiNadrhis1);
  $fdlzwi1=$hisbuwith1.$text_1dwi1;
  $f_outzwi1 = fopen($WiNadrhis1,"w");
  fwrite($f_outzwi1, $fdlzwi1);
  fclose($f_outzwi1);
//----------------------------------------------------------------------
 mysql_query("UPDATE ltcdoge SET datewithdrawd = '$MyDD', amountwithdrawd = '$MyDD', withdgtr = '$MyDD' WHERE email = '$MyMailk'  AND adresswithdrawd = '$MyAdr' ");
  header('Location:index.php');
 }
?>