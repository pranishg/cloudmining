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
if (isset($_POST['btnChange'])){
$passwordP=$_POST['txtPassword'];
$passwordP = stripslashes($passwordP);
$passwordP = htmlspecialchars($passwordP);
$passwordP = trim($passwordP);
$passwordP = md5($passwordP);
$userPas = mysql_query("SELECT gpassword FROM gusers WHERE glogin='$login' AND gpassword='$password' AND activation='1'");
$Pass_user = mysql_fetch_array($userPas);
 if ($passwordP != $_SESSION['password']) {
             include_once("user.php");
             if ($MyLang == "ch") {
             echo "<script>swal(
  '糟糕...',
  '密碼錯誤！',
  'error'
);</script>";
                     }
if ($MyLang == "en") {
echo "<script>swal(
  'Oops...',
  'Password incorrect!',
  'error'
);</script>";
 }
 if ($MyLang == "ru") {
echo "<script>swal(
  'К сожалению ...',
  'Неверный пароль!',
  'error'
);</script>";
 }
 if ($MyLang == "de") {
echo "<script>swal(
  'Hoppla...',
  'Falsches Passwort!',
  'error'
);</script>";
 }
 if ($MyLang == "it") {
echo "<script>swal(
  'Spiacenti ...',
  'Password non corretta!',
  'error'
);</script>";
 }
 if ($MyLang == "es") {
echo "<script>swal(
  'Vaya ...',
  '¡Contraseña incorrecta!',
  'error'
);</script>";
 }
 exit;
 }
 elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['txtNewpassword'])) {
            include_once("user.php");
             if ($MyLang == "ch") {
             echo "<script>swal(
  '糟糕...',
  '密碼太短！ 密碼必須至少為6個字符！',
  'error'
);</script>";
                     }
if ($MyLang == "en") {
echo "<script>swal(
  'Oops...',
  'Password is too short! The password must be at least 6 characters!',
  'error'
);</script>";
 }
 if ($MyLang == "ru") {
echo "<script>swal(
  'К сожалению ...',
  'Пароль слишком короткий! Пароль должен быть не менее 6 символов!',
  'error'
);</script>";
 }
 if ($MyLang == "de") {
echo "<script>swal(
  'Hoppla...',
  'Das Passwort ist zu kurz! Das Passwort muss mindestens 6 Zeichen haben!',
  'error'
);</script>";
 }
 if ($MyLang == "it") {
echo "<script>swal(
  'Spiacenti ...',
  'La password è troppo corta! La password deve essere di almeno 6 caratteri!',
  'error'
);</script>";
 }
 if ($MyLang == "es") {
echo "<script>swal(
  'Vaya ...',
  '¡La contraseña es demasiado corta! ¡La contraseña debe tener al menos 6 caracteres!',
  'error'
);</script>";
 }
  exit;
		}
 elseif($_POST['txtNewpassword'] != $_POST['txtConfirm']) {
             include_once("user.php");
             if ($MyLang == "ch") {
             echo "<script>swal(
  '糟糕...',
  '確認密碼不正確！',
  'error'
);</script>";
                     }
if ($MyLang == "en") {
echo "<script>swal(
  'Oops...',
  'Confirm password incorrect!',
  'error'
);</script>";
 }
 if ($MyLang == "ru") {
echo "<script>swal(
  'К сожалению ...',
  'Подтверждение пароля неправильно!',
  'error'
);</script>";
 }
 if ($MyLang == "de") {
echo "<script>swal(
  'Hoppla...',
  'Passwort bestätigen falsch!',
  'error'
);</script>";
 }
 if ($MyLang == "it") {
echo "<script>swal(
  'Spiacenti ...',
  'Confermare la password errata!',
  'error'
);</script>";
 }
 if ($MyLang == "es") {
echo "<script>swal(
  'Vaya ...',
  'Confirmar contraseña incorrecta!',
  'error'
);</script>";
 }
  exit;
		}
 	else{
	$Newpassword = $_POST['txtNewpassword'];
	$mdPasswordNew = md5($Newpassword);
	mysql_query("UPDATE gusers SET gpassword = '$mdPasswordNew' WHERE glogin = '$login'  AND gpassword = '$password' AND activation='1'");
	mysql_query("UPDATE ltcdoge SET fpassword = '$mdPasswordNew' WHERE flogin = '$login'  AND fpassword = '$password' AND activation='1'");
	mysql_query("UPDATE ltcdogeming SET vpassword = '$mdPasswordNew' WHERE vlogin = '$login'  AND vpassword = '$password' AND activation='1'");
    mysql_query("UPDATE greffer SET rrpassword = '$mdPasswordNew' WHERE rlogin = '$login'  AND rrpassword = '$password' AND activation='1'");
     mysql_query("UPDATE gsmcnew SET spassword = '$mdPasswordNew' WHERE slogin = '$login'  AND spassword = '$password' AND activation='1' ");
                         if ($MyLang == "ch") {
                    echo "<script>swal(
  '恭喜！',
  '密碼修改成功',
  'success'
);</script>";
                     }
                       if ($MyLang == "en") {
                     echo "<script>swal(
  'Congratulations!',
  'Password successfully changed.',
  'success'
);</script>";
 }
   if ($MyLang == "ru") {
                     echo "<script>swal(
  'Поздравляем!',
  'Пароль успешно изменен.',
  'success'
);</script>";
 }
    if ($MyLang == "es") {
                     echo "<script>swal(
  '¡Enhorabuena!',
  'Contraseña cambiada correctamente.',
  'success'
);</script>";
 }
                        if ($MyLang == "it") {
                     echo "<script>swal(
  'Complimenti!',
  'Password cambiata con successo.',
  'success'
);</script>";
 }
                        if ($MyLang == "de") {
                     echo "<script>swal(
  'Glückwünsche!',
  'Passwort erfolgreich geändert.',
  'success'
);</script>";
 }
    header('Refresh: 1; URL=exit.php');
    exit;
	}
}
?>