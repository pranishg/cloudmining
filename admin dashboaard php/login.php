<?php
include_once("bd.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>CMINE</title>
	</head>

  <body>

<?php
if (isset($_POST['login'])) {
	$login = $_POST['login']; 
	if ($login == '') {
		unset($login);
		exit ("Enter you login!");
	} 
}
if (isset($_POST['password'])) {
	$password=$_POST['password']; 
	if ($password =='') {
		unset($password);
		exit ("enter password");
	}
}

$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);


$login = trim($login);
$password = trim($password);

$password = md5($password);

$user = mysql_query("SELECT id FROM gusers WHERE glogin='$login' AND gpassword='$password' AND activation='1'");
$id_user = mysql_fetch_array($user);
if (empty($id_user['id'])){
    include_once("main.html");
                if ($MyLang == "ch") {
             echo "<script>swal(
  '糟糕...',
  '登錄或密碼不正確！',
  'error'
);</script>";
                     }
if ($MyLang == "en") {
echo "<script>swal(
  'Oops...',
  'login or password are incorrect!',
  'error'
);</script>";
 }
 if ($MyLang == "ru") {
echo "<script>swal(
  'К сожалению ...',
  'Логин или пароль неверны!',
  'error'
);</script>";
 }
 if ($MyLang == "de") {
echo "<script>swal(
  'Hoppla...',
  'Login oder Passwort sind falsch!',
  'error'
);</script>";
 }
 if ($MyLang == "it") {
echo "<script>swal(
  'Spiacenti ...',
  'accesso o la password sono errati!',
  'error'
);</script>";
 }
 if ($MyLang == "es") {
echo "<script>swal(
  'Vaya ...',
  'Login o contraseña son incorrectos!',
  'error'
);</script>";
 }
	exit;
}
else {
   
    $_SESSION['password']=$password; 
	$_SESSION['login']=$login; 
    $_SESSION['id']=$id_user['id'];

}
include_once("logtxt.php");
?>
</body>
</html>
