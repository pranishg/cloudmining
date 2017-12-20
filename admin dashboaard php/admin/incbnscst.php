<?Php include_once("dbadm.php"); ?>
<?Php
$DBRCST = mysql_query("SELECT cost1, cost3 FROM costsmc WHERE id='1' ");
$arraCST = mysql_fetch_array($DBRCST);
$HTf = $arraCST['cost1'];
$HTc = $arraCST['cost3'];
?>
<?Php
$COSTS = $_POST['txtHS'];
$COSTF = $_POST['txtHF'];
if  (isset($_POST['btnHS'])) {
mysql_query("UPDATE costsmc SET cost3 = '$COSTS' WHERE id='1' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=cstadm.php');
  exit;
}
if  (isset($_POST['btnHF'])) {
mysql_query("UPDATE costsmc SET cost1 = '$COSTF' WHERE id='1' ");
echo "<script>alert(\"OK"."\");</script>";
  header('Refresh: 2; URL=cstadm.php');
  exit;
}
?>