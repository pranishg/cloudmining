<?Php
include_once("bd.php");
$DBProf = mysql_query("SELECT email FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$arrayProf = mysql_fetch_array($DBProf) or die(mysql_error());
$mailProf = $arrayProf['email'];
//-------------------------------------------------
$DBProfMain = mysql_query("SELECT gpassword, name_user, lastname, adresswithdraw, cpin  FROM gusers WHERE glogin='$login'AND gpassword='$password' AND activation='1' ");
$DBDogeDeposit = mysql_query("SELECT adresswithdrawd FROM ltcdoge WHERE flogin='$login'AND fpassword='$password' AND activation='1' ");
$DepoDogeProf = mysql_fetch_array($DBDogeDeposit) or die(mysql_error());
$arrayAdrP = mysql_fetch_array($DBProfMain) or die(mysql_error()) ;
$MypasswordP = $arrayAdrP['gpassword'];
$UsernameP = $arrayAdrP['name_user'];
$UserlastP = $arrayAdrP['lastname'];
$UseradrP = $arrayAdrP['adresswithdraw'];
$cpin = $arrayAdrP['cpin'];
$UseradrDadr = $DepoDogeProf['adresswithdrawd'];
if (empty($arrayAdrP['cpin'])) {
$ccpin = "";
$cdis = "";
}
else {
$ccpin = $LPncd2;
$cdis = "disabled";
}
if (isset($_POST['btnSave'])){
$txtWith = ($_POST['txtWithdrawAdr']);
$txtWithDoge = ($_POST['txtWithdrawAdrDoge']);
$txtName = ($_POST['txtName']);
$txtLast = ($_POST['txtLastName']);
if ($arrayAdrP['cpin'] == "") {
$txtcpin = ($_POST['txtcpin']);
mysql_query("UPDATE gusers SET cpin = '$txtcpin' WHERE glogin = '$login'  AND gpassword =   '$password' AND activation='1' ");
}
	mysql_query("UPDATE gusers SET adresswithdraw = '$txtWith' WHERE glogin = '$login'  AND gpassword =   '$password' AND activation='1' ");
	mysql_query("UPDATE ltcdoge SET adresswithdrawd = '$txtWithDoge' WHERE flogin = '$login'  AND fpassword =   '$password' AND activation='1' ");
	mysql_query("UPDATE gusers SET name_user = '$txtName' WHERE glogin = '$login'  AND gpassword =   '$password' AND activation='1' ");
	mysql_query("UPDATE gusers SET lastname = '$txtLast' WHERE glogin = '$login'  AND gpassword =   '$password' AND activation='1' ");
    include_once("user.php");
    if ($MyLang == "ch") {
                    echo "<script>swal(
  '恭喜！',
  '更改已成功',
  'success'
);</script>";
                     }
                       if ($MyLang == "en") {
                     echo "<script>swal(
  'Congratulations!',
  'Changes made successfully.',
  'success'
);</script>";
 }
   if ($MyLang == "ru") {
                     echo "<script>swal(
  'Поздравляем!',
  'Изменения внесены успешно.',
  'success'
);</script>";
 }
    if ($MyLang == "es") {
                     echo "<script>swal(
  '¡Enhorabuena!',
  'Cambios realizados con éxito.',
  'success'
);</script>";
 }
                        if ($MyLang == "it") {
                     echo "<script>swal(
  'Complimenti!',
  'Le modifiche apportate con successo.',
  'success'
);</script>";
 }
                        if ($MyLang == "de") {
                     echo "<script>swal(
  'Glückwünsche!',
  'Änderungen wurden erfolgreich vorgenommen.',
  'success'
);</script>";
 }
}
?>