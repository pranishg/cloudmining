<?Php
include_once("dbadm.php");
$UsLog = $_POST['txtLogu'];
$UsMal = $_POST['txtMailu'];
if (isset($_POST['btnDelu'])){
 mysql_query("DELETE FROM gusers WHERE glogin = '$UsLog' AND email = '$UsMal' ");
 mysql_query("DELETE FROM gsmcnew WHERE slogin = '$UsLog' AND email = '$UsMal' ");
 mysql_query("DELETE FROM greffer WHERE rlogin = '$UsLog' AND email = '$UsMal' ");
 mysql_query("DELETE FROM ltcdoge WHERE flogin = '$UsLog' AND email = '$UsMal' ");
 mysql_query("DELETE FROM ltcdogeming WHERE vlogin = '$UsLog' AND email = '$UsMal' ");
 header('Location:index.php'); 
}
?>