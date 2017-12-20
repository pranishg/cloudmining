<?Php
include_once("bd.php");
if (isset($_POST['Subdoge'])) {
include("lib/blockdoge.php");
mysql_query("UPDATE ltcdoge SET pressdoge = '1' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1' ");
include_once("buyhash.php");
print "<body onload=\"swal();\">";
}
?>
<script type="text/javascript">
swal({ html: '<p><?Php echo $MydepDOGE; ?></p>', showCloseButton: true})
</script>