<?Php
include_once("bd.php");
if(isset($_POST['btnCrpt'])){
$MyUSD = number_format($_POST['shabuyusd'],2,'.','');
mysql_query("UPDATE gusers SET Pricecl = '$MyUSD' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
 header('Refresh: 1; URL=buygorlhash.php');
}
if(isset($_POST['MbtnCrpt'])){
$MyUSD1 =  number_format($_POST['mhsbuyusd'],2,'.','');
mysql_query("UPDATE gusers SET Pricecl = '$MyUSD1' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1' ");
 header('Refresh: 1; URL=buygorlhash.php');
}
?>