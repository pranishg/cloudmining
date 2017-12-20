<?Php include_once("dbadm.php"); ?>
<?Php
$BONUSB = $_POST['txtBONb'];
$BONUSD = $_POST['txtBONd'];
$MDNUSD = $_POST['txtBitMin'];
$MBBNUSB = $_POST['txtDogeMin'];
$MDNUSD12 = $_POST['txtBitMin1'];
$MBBNUSB12 = $_POST['txtDogeMin1'];
$MDNUSD123 = $_POST['txtMinfeeb'];
$MBBNUSB123 = $_POST['txtMinfeed'];
//----------------1-------------------------------
$MBBidentq = $_POST['txtMinfeeb01'];
$MDNidentq = $_POST['txtMinfeeb02'];
$MBBidentqq = $_POST['txtMinfeeb03'];
$MBBidentqd = $_POST['txtMinfeed04'];
$MDNidentqd = $_POST['txtMinfeeb05'];
$MBBidentqqd = $_POST['txtMinfeeb06'];
//-----------------2------------------------------
$MBBidentq2 = $_POST['txtMinfeeb011'];
$MDNidentq2 = $_POST['txtMinfeeb021'];
$MBBidentqq2 = $_POST['txtMinfeeb031'];
$MBBidentqd2 = $_POST['txtMinfeed041'];
$MDNidentqd2 = $_POST['txtMinfeeb051'];
$MBBidentqqd2 = $_POST['txtMinfeeb061'];
//-----------------3------------------------------
$MBBidentq3 = $_POST['txtMinfeeb019'];
$MDNidentq3 = $_POST['txtMinfeeb029'];
$MBBidentqq3 = $_POST['txtMinfeeb039'];
$MBBidentqd3 = $_POST['txtMinfeed049'];
$MDNidentqd3 = $_POST['txtMinfeeb059'];
$MBBidentqqd3 = $_POST['txtMinfeeb069'];
//-----------------4------------------------------
$MBBidentq4 = $_POST['txtMinfeeb101'];
$MDNidentq4 = $_POST['txtMinfeeb102'];
$MBBidentqq4 = $_POST['txtMinfeeb103'];
$MBBidentqd4 = $_POST['txtMinfeed104'];
$MDNidentqd4 = $_POST['txtMinfeeb105'];
$MBBidentqqd4 = $_POST['txtMinfeeb106'];
//-----------------5------------------------------
$MBBidentq5 = $_POST['txtMinfeeb018'];
$MDNidentq5 = $_POST['txtMinfeeb028'];
$MBBidentqq5 = $_POST['txtMinfeeb038'];
$MBBidentqd5 = $_POST['txtMinfeed048'];
$MDNidentqd5 = $_POST['txtMinfeeb058'];
$MBBidentqqd5 = $_POST['txtMinfeeb068'];
//-----------------------------------------------
$MNMR = $_POST['depcount'];
$MNMR1 = $_POST['depcount1'];
//----------------------------------------------------
$MBBidentqd512 = $_POST['txtPrvKy'];
$MDNidentqd513 = $_POST['txtPblKy'];
$MBBidentqqd514 = $_POST['txtPblKys'];
if  (isset($_POST['btnBONb'])) {
mysql_query("UPDATE costsmc SET bnsB = '$BONUSB' WHERE id='1' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=bnad.php');
  exit;
}
if  (isset($_POST['btnBONd'])) {
mysql_query("UPDATE costsmc SET bnsD = '$BONUSD' WHERE id='1' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=bnad.php');
  exit;
}
//-------------------------------------------
if  (isset($_POST['btnSvBit'])) {
mysql_query("UPDATE costsmc SET minwithbit = '$MDNUSD' WHERE id='1' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=mwidep.php');
  exit;
}
if  (isset($_POST['btnSvDoge'])) {
mysql_query("UPDATE costsmc SET minwithdoge = '$MBBNUSB' WHERE id='1' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=mwidep.php');
  exit;
}
//---------------------------------------------
if  (isset($_POST['btnSvBit1'])) {
mysql_query("UPDATE costsmc SET minbitdep = '$MDNUSD12' WHERE id='1' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=mwidep.php');
  exit;
}
if  (isset($_POST['btnSvDoge1'])) {
mysql_query("UPDATE costsmc SET mindogedep = '$MBBNUSB12' WHERE id='1' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=mwidep.php');
  exit;
}
//-------------------------------------------------------------------
if  (isset($_POST['btnSvMinfBit'])) {
mysql_query("UPDATE costsmc SET feebitblc = '$MDNUSD123' WHERE id='1' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=blcio.php');
  exit;
}
if  (isset($_POST['btnSvMinfDoge'])) {
mysql_query("UPDATE costsmc SET feedogeblc = '$MBBNUSB123' WHERE id='1' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=blcio.php');
  exit;
}
//---------------------------------------------------------------------
//-----------------------------------1----------------------------------
if  (isset($_POST['btnSvMinfBit01'])) {
mysql_query("UPDATE identblc SET identbit1 = '$MBBidentq', adrbit1 = '$MDNidentq', pinb1 = '$MBBidentqq'  WHERE id='0' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=blcio.php');
  exit;
}
if  (isset($_POST['btnSvMinfDoge02'])) {
mysql_query("UPDATE identblc SET identdoge1 = '$MBBidentqd', adrdoge1 = '$MDNidentqd', pinb1 = '$MBBidentqqd'  WHERE id='0' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=blcio.php');
  exit;
}
//------------------------------------2-------------------------------------
if  (isset($_POST['btnSvMinfBit011'])) {
mysql_query("UPDATE identblc SET identbit2 = '$MBBidentq2', adrbit2 = '$MDNidentq2', pinb2 = '$MBBidentqq2'  WHERE id='0' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=blcio.php');
  exit;
}
if  (isset($_POST['btnSvMinfDoge021'])) {
mysql_query("UPDATE identblc SET identdoge2 = '$MBBidentqd2', adrdoge2 = '$MDNidentqd2', pinb2 = '$MBBidentqqd2'  WHERE id='0' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=blcio.php');
  exit;
}
//------------------------------------3-------------------------------------
if  (isset($_POST['btnSvMinfBit019'])) {
mysql_query("UPDATE identblc SET identbit3 = '$MBBidentq3', adrbit3 = '$MDNidentq3', pinb3 = '$MBBidentqq3'  WHERE id='0' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=blcio.php');
  exit;
}
if  (isset($_POST['btnSvMinfDoge029'])) {
mysql_query("UPDATE identblc SET identdoge3 = '$MBBidentqd3', adrdoge3 = '$MDNidentqd3', pinb3 = '$MBBidentqqd3'  WHERE id='0' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=blcio.php');
  exit;
}
//-------------------------------------4------------------------------------
if  (isset($_POST['btnSvMinfBit101'])) {
mysql_query("UPDATE identblc SET identbit4 = '$MBBidentq4', adrbit4 = '$MDNidentq4', pinb4 = '$MBBidentqq4'  WHERE id='0' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=blcio.php');
  exit;
}
if  (isset($_POST['btnSvMinfDoge102'])) {
mysql_query("UPDATE identblc SET identdoge4 = '$MBBidentqd4', adrdoge4 = '$MDNidentqd4', pinb4 = '$MBBidentqqd4'  WHERE id='0' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=blcio.php');
  exit;
}
//-------------------------------------5------------------------------------
if  (isset($_POST['btnSvMinfBit018'])) {
mysql_query("UPDATE identblc SET identbit5 = '$MBBidentq5', adrbit5 = '$MDNidentq5', pinb5 = '$MBBidentqq5'  WHERE id='0' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=blcio.php');
  exit;
}
if  (isset($_POST['btnSvMinfDoge028'])) {
mysql_query("UPDATE identblc SET identdoge5 = '$MBBidentqd5', adrdoge5 = '$MDNidentqd5', pinb5 = '$MBBidentqqd5'  WHERE id='0' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=blcio.php');
  exit;
}
//-------------------------------------------------------------------------
if  (isset($_POST['btndepcount'])) {
mysql_query("UPDATE costsmc SET identbit = '$MNMR' WHERE id='1' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=blcio.php');
  exit;
}
if  (isset($_POST['btndepcount1'])) {
mysql_query("UPDATE costsmc SET identdoge = '$MNMR1' WHERE id='1' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=blcio.php');
  exit;
}
//--------------------------------------------------------------------------------
$MBBidentqd512 = $_POST['txtPrvKy'];
$MDNidentqd513 = $_POST['txtPblKy'];
$MBBidentqqd514 = $_POST['txtPblKys'];
if  (isset($_POST['btnPblKy'])) {
mysql_query("UPDATE costsmc SET Prvtky = '$MBBidentqd512' WHERE id='1' ");
mysql_query("UPDATE costsmc SET Pblky = '$MDNidentqd513' WHERE id='1' ");
mysql_query("UPDATE costsmc SET Wbdvky = '$MBBidentqqd514' WHERE id='1' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=GRL.php');
  exit;
}
?>