<?Php
$xxx = "fsdf";
include_once("buyhash.php");
print "<body onload=\"swal();\">";
?>
<script type="text/javascript">
swal({ html: '<p><?Php echo $xxx; ?></p>', showCloseButton: true})
</script>