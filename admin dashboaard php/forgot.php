<?php
include_once('bd.php');
if (isset($_POST['submit'])){
	$login = $_POST['login'];
	$email = $_POST['email'];

	if (empty($login)){
		echo "Enter login!";
	}
	elseif (empty($email)){
		echo "Enter e-mail!";
	}
   else{
		$resultat = mysql_query("SELECT * FROM gusers WHERE glogin = '$login' AND email = '$email'");
		$array = mysql_fetch_array($resultat);
		if (empty($array)){
   include_once("main.html");
                  if ($MyLang == "ch") {
             echo "<script>swal(
  '糟糕...',
  '錯誤！ 此用戶不存在！',
  'error'
);</script>";
                     }
if ($MyLang == "en") {
echo "<script>swal(
  'Oops...',
  'Error! This user does not exist!',
  'error'
);</script>";
 }
 if ($MyLang == "ru") {
echo "<script>swal(
  'К сожалению ...',
  'Ошибка! Этот пользователь не существует!',
  'error'
);</script>";
 }
 if ($MyLang == "de") {
echo "<script>swal(
  'Hoppla...',
  'Fehler! Dieser Benutzer existiert nicht!',
  'error'
);</script>";
 }
 if ($MyLang == "it") {
echo "<script>swal(
  'Spiacenti ...',
  'Errore! Questo utente non esiste!',
  'error'
);</script>";
 }
 if ($MyLang == "es") {
echo "<script>swal(
  'Vaya ...',
  '¡Error! ¡Este usuario no existe!',
  'error'
);</script>";
 }
 }
		elseif (mysql_num_rows($resultat) > 0){
			$chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP";
			$max=10;
			$size=StrLen($chars)-1;
			$password=null;

			while($max--){
			$password.=$chars[rand(0,$size)];
			}
			$newmdPassword = md5($password);
            $from = 'admin@coin-c.pro';
			$title = $PswrRec.' '.$login.' cmine.com!';
			$headerd = "From: \"Admin\" <admin@coin-c.pro>\n";
            $headerd .= "Content-type: text/plain; charset=\"utf-8\"";
			$letter = 	'You asked for the account password recovery '.$login.'  cmine.com \r\nYour new password: '.$password;
            mail($email, $title, $letter, $headerd);
            //----------------------
               $connect = fsockopen ('127.0.0.1', 25, $errno, $errstr, 30);
        if(!$connect){
            echo json_encode($errno);
        } else {
            fputs($connect, "HELO localhost\r\n");
            fputs($connect, "MAIL FROM: $from\n");
            fputs($connect, "RCPT TO: $email\n");
            fputs($connect, "DATA\r\n");
            fputs($connect, "Content-Type: text/plain; charset=UTF-8");
            fputs($connect, "MIME-Version: 1.0\nContent-Transfer-Encoding: 7bit\n");
            fputs($connect, "To: $email\r\n");
            fputs($connect, "Subject: =?utf-8?b?".base64_encode($title)."?=\r\n");
            fputs($connect, $letter." \r\n");
            fputs($connect, ".\r\n");
            fputs($connect, "RSET\r\n");
             mysql_query("UPDATE gusers SET gpassword = '$newmdPassword' WHERE glogin = '$login'  AND gusers.email = '$email'");
			   mysql_query("UPDATE ltcdoge SET fpassword = '$newmdPassword' WHERE flogin='$login' AND ltcdoge.email='$email'");
			   mysql_query("UPDATE ltcdogeming SET vpassword = '$newmdPassword' WHERE vlogin='$login' AND ltcdogeming.email='$email'");
               mysql_query("UPDATE greffer SET rrpassword = '$newmdPassword' WHERE rlogin='$login' AND greffer.email='$email'");
               mysql_query("UPDATE gsmcnew SET spassword = '$newmdPassword' WHERE slogin='$login' AND gsmcnew.email='$email'");
                mysql_query("UPDATE crypto_payments SET ppassword = '$newmdPassword' WHERE plogin='$login' AND crypto_payments.pemail='$email'");
             include_once("main.html");
                     if ($MyLang == "ch") {
                    echo "<script>swal(
  '恭喜！',
  '新密碼發送到您的電子郵件！',
  'success'
);</script>";
                     }
                       if ($MyLang == "en") {
                     echo "<script>swal(
  'Congratulations!',
  'New password sent to your e-mail!',
  'success'
);</script>";
 }
   if ($MyLang == "ru") {
                     echo "<script>swal(
  'Поздравляем!',
  'Новый пароль отправлен на ваш e-mail!',
  'success'
);</script>";
 }
    if ($MyLang == "es") {
                     echo "<script>swal(
  '¡Enhorabuena!',
  '¡Nueva contraseña enviada a su correo electrónico!',
  'success'
);</script>";
 }
                        if ($MyLang == "it") {
                     echo "<script>swal(
  'Complimenti!',
  'Nuova password inviato al tuo indirizzo e-mail!',
  'success'
);</script>";
 }
                        if ($MyLang == "de") {
                     echo "<script>swal(
  'Glückwünsche!',
  'Neues Passwort an Ihre E-Mail gesendet!',
  'success'
);</script>";
 }
        }
        fclose($connect);
            //-----------------------
		}
	}
}
mysql_close();
?>