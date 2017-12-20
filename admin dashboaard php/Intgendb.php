<?Php
include_once("bd.php"); 
if (isset($_POST['Subdeposit'])) {
include("lib/block.php");
mysql_query("UPDATE gusers SET pressblock = '1' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
 include_once("buyhash.php");
print "<body onload=\"swal();\">";
}
?>
<script type="text/javascript">
swal({ html: '<p><?Php echo $Mydep; ?></p>', showCloseButton: true})
</script>