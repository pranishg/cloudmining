<?php
$url = 'https://www.google.com/recaptcha/api/siteverify?secret=6LdE-DgUAAAAALXEdPM6PhcJMruYN7ibyLZt1D2s&response='.(array_key_exists('g-recaptcha-response', $_POST) ? $_POST["g-recaptcha-response"] : '').'&remoteip='.$_SERVER['REMOTE_ADDR'];
$resp = json_decode(file_get_contents($url), true);
    include_once("bdl.php");
    if (isset($_POST['submit'])){
        if ($resp['success'] == true) {
		if(empty($_POST['login']))  {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Enter login!"> Enter login! </font>';
		} 
		elseif (!preg_match("/^\w{3,}$/", $_POST['login'])) {
             include_once("main.html");
             if ($MyLang == "ch") {
             echo "<script>swal(
  '糟糕...',
  '在登錄輸入的無效字符！ 只有字母，數字和下劃線！',
  'error'
);</script>";
                     }
if ($MyLang == "en") {
echo "<script>swal(
  'Oops...',
  'In the Login entered invalid characters! Only letters, numbers and underscore!',
  'error'
);</script>";
 }
 if ($MyLang == "ru") {
echo "<script>swal(
  'К сожалению ...',
  'В Логине введены недопустимые символы! Только буквы, цифры и подчеркивания!',
  'error'
);</script>";
 }
 if ($MyLang == "de") {
echo "<script>swal(
  'Hoppla...',
  'Im Login eingegebene ungültige Zeichen! Nur Briefe, Zahlen und Unterstriche!',
  'error'
);</script>";
 }
 if ($MyLang == "it") {
echo "<script>swal(
  'Spiacenti ...',
  'Nella Accesso inserito caratteri non validi! Solo lettere, numeri e underscore!',
  'error'
);</script>";
 }
 if ($MyLang == "es") {
echo "<script>swal(
  'Vaya ...',
  'En el Login ingresó caracteres no válidos! Sólo letras, números y subrayado!',
  'error'
);</script>";
 }
             exit;
        }
		elseif(empty($_POST['password'])) {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Enter password !"> Enter password!</font>';
		}
		elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])) {
            include_once("main.html");
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
		elseif(empty($_POST['password2'])) {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Enter the password confirmation!"> Enter the password confirmation!</font>';
		}
		elseif($_POST['password'] != $_POST['password2']) {
             include_once("main.html");
             if ($MyLang == "ch") {
             echo "<script>swal(
  '糟糕...',
  '輸入的密碼不匹配！',
  'error'
);</script>";
                     }
if ($MyLang == "en") {
echo "<script>swal(
  'Oops...',
  'The entered passwords do not match!',
  'error'
);</script>";
 }
 if ($MyLang == "ru") {
echo "<script>swal(
  'К сожалению ...',
  'Введенные пароли не совпадают!',
  'error'
);</script>";
 }
 if ($MyLang == "de") {
echo "<script>swal(
  'Hoppla...',
  'Die eingegebenen Passwörter stimmen nicht überein!',
  'error'
);</script>";
 }
 if ($MyLang == "it") {
echo "<script>swal(
  'Spiacenti ...',
  'Le password immesse non corrispondono!',
  'error'
);</script>";
 }
 if ($MyLang == "es") {
echo "<script>swal(
  'Vaya ...',
  '¡Las contraseñas introducidas no coinciden!',
  'error'
);</script>";
 }
             exit;
        }
		elseif(empty($_POST['email'])) {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Enter E-mail!">Enter E-mail! </font>';
		}
		elseif (!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/", $_POST['email'])) {
             include_once("main.html");
             if ($MyLang == "ch") {
             echo "<script>swal(
  '糟糕...',
  '電子郵件的格式無效！ 例如，name@gmail.com！',
  'error'
);</script>";
                     }
if ($MyLang == "en") {
echo "<script>swal(
  'Oops...',
  'E-mail has an invalid format! For example, name@gmail.com!',
  'error'
);</script>";
 }
 if ($MyLang == "ru") {
echo "<script>swal(
  'К сожалению ...',
  'Электронная почта имеет неверный формат! Например, name@gmail.com!',
  'error'
);</script>";
 }
 if ($MyLang == "de") {
echo "<script>swal(
  'Hoppla...',
  'E-Mail hat ein ungültiges Format! Zum Beispiel, name@gmail.com!',
  'error'
);</script>";
 }
 if ($MyLang == "it") {
echo "<script>swal(
  'Spiacenti ...',
  'E-mail ha un formato non valido! Ad esempio, name@gmail.com!',
  'error'
);</script>";
 }
 if ($MyLang == "es") {
echo "<script>swal(
  'Vaya ...',
  '¡El correo electrónico tiene un formato no válido! Por ejemplo, name@gmail.com!',
  'error'
);</script>";
 }
             exit;
        }

		else{
		    $DBNEWUS = mysql_query("SELECT bnsB, bnsL, bnsD FROM costsmc WHERE id='1'");
            $aNEWUS = mysql_fetch_array($DBNEWUS) or die(mysql_error());
            $BNSbit = $aNEWUS['bnsB'];
            $BNSlite = $aNEWUS['bnsL'];
            $BNSdoge = $aNEWUS['bnsD'];
			$login = $_POST['login'];
			$password = $_POST['password'];
			$mdPassword = md5($password);
			$password2 = $_POST['password2'];
			$email = $_POST['email'];
			$rdate = date("d-m-Y  H:i");
			$name = $_POST['name'];
			$lastname = $_POST['lastname'];
			$ip = $_SERVER['REMOTE_ADDR'];
            $Activebez = "1";
			$cash = number_format($BNSbit,8,'.','');
			$dvs = "0.00000000";
			$MINING = "MINING";
			$MININGD = "MINING";
			$Depreg = "";
			$cashdoggy = number_format($BNSdoge,8,'.','');
			$cashlite = number_format($BNSlite,8,'.','');
			$Myref = md5($login);
			$dvsm = "0.00000000";
			$pros = "0.00000000";
            $mxdvs = "0.00000000";
			$query = ("SELECT id FROM gusers WHERE glogin='$login'");
			$sql = mysql_query($query) or die(mysql_error());
            $pppin = "";
            $imageml = 'images/maileri.png';

			if (mysql_num_rows($sql) > 0) {
                 include_once("main.html");
             if ($MyLang == "ch") {
             echo "<script>swal(
  '糟糕...',
  '用戶與此類登錄註冊！',
  'error'
);</script>";
                     }
if ($MyLang == "en") {
echo "<script>swal(
  'Oops...',
  'User with such login registered!',
  'error'
);</script>";
 }
 if ($MyLang == "ru") {
echo "<script>swal(
  'К сожалению ...',
  'Пользователь с таким логином зарегистрирован!',
  'error'
);</script>";
 }
 if ($MyLang == "de") {
echo "<script>swal(
  'Hoppla...',
  'Benutzer mit solchem Login registriert!',
  'error'
);</script>";
 }
 if ($MyLang == "it") {
echo "<script>swal(
  'Spiacenti ...',
  'Utente con tale login registrato!',
  'error'
);</script>";
 }
 if ($MyLang == "es") {
echo "<script>swal(
  'Vaya ...',
  'El usuario con tal registro registrado!',
  'error'
);</script>";
 }
             exit;
            }
			else {
				$query2 = ("SELECT id FROM gusers WHERE email='$email'");
				$sql = mysql_query($query2) or die(mysql_error());
				if (mysql_num_rows($sql) > 0){
             include_once("main.html");
             if ($MyLang == "ch") {
             echo "<script>swal(
  '糟糕...',
  '用戶註冊此電子郵件！',
  'error'
);</script>";
                     }
if ($MyLang == "en") {
echo "<script>swal(
  'Oops...',
  'User with this e-mail is registered!',
  'error'
);</script>";
 }
 if ($MyLang == "ru") {
echo "<script>swal(
  'К сожалению ...',
  'Пользователь с такой электронной почтой уже зарегистрирован!',
  'error'
);</script>";
 }
 if ($MyLang == "de") {
echo "<script>swal(
  'Hoppla...',
  'Benutzer mit dieser E-Mail ist registriert!',
  'error'
);</script>";
 }
 if ($MyLang == "it") {
echo "<script>swal(
  'Spiacenti ...',
  'Utente con questa e-mail è stato registrato!',
  'error'
);</script>";
 }
 if ($MyLang == "es") {
echo "<script>swal(
  'Vaya ...',
  '¡El usuario con este e-mail está registrado!',
  'error'
);</script>";
 }
             exit;
             }
				else{
	if(isset($_COOKIE['ref_id'])){
    $refrel = $_COOKIE['ref_id'];
	$rrefdate = date("d-m-Y  H:i");
	//-----------------------------------------------------------------------------
	$DBRefHIS = mysql_query("SELECT email,countref FROM greffer WHERE my_refflink='$refrel'");
    $RefHIS = mysql_fetch_array($DBRefHIS) or die(mysql_error());
	$hisidhis = $RefHIS['email'];
    $countmyref = $RefHIS['countref'];
    $countourmy = ($countmyref + 1);
    mysql_query("UPDATE greffer SET countref = '$countourmy' WHERE my_refflink='$refrel'");
	//-----------------------------------------------------------------------------
	$DBGUSHIS = mysql_query("SELECT id FROM gusers WHERE email='$hisidhis'");
    $GUSHIS = mysql_fetch_array($DBGUSHIS) or die(mysql_error());
	$hisgushis = $GUSHIS['id'];
	//-----------------------------------------------------------------------------
	$hisidmdhisl = md5($hisgushis);
	$hisidmdhis = $hisidmdhisl.".txt";
	$filehistref = 'histor/'.$hisidmdhis;
	$textref= $rrefdate." - ".$Prtnew.'<br>';
    $text_1=file_get_contents($filehistref);
    $fdl=$textref.$text_1;
    $f_out = fopen($filehistref,"w");
    fwrite($f_out, $fdl);
    fclose($f_out);
	}
					$query = "INSERT INTO gusers (glogin, gpassword, email, reg_date, name_user, lastname,IP, activation, Cash, DVS, deposit, btnml, DVSbtmnl, cpin)
							  VALUES ('$login', '$mdPassword', '$email', '$rdate', '$name', '$lastname','$ip', '$Activebez','$cash', '$dvs', '$Depreg', '$MINING', '$MININGD', '$pppin')";
					$result = mysql_query($query) or die(mysql_error());;
					$query3 = "INSERT INTO ltcdoge (flogin, fpassword, email, activation, dogedeposit, Cashdoge, litedeposit, Cashlite, hisbit, hisdoge, hislite)
					            VALUES ('$login', '$mdPassword', '$email', '$Activebez', '$Depreg', '$cashdoggy', '$Depreg', '$cashlite', '$pros', '$pros', '$pros')";
					$result2 = mysql_query($query3) or die(mysql_error());;
					$query4 = "INSERT INTO ltcdogeming (vlogin, vpassword, email, activation, btndoge, btnltc,btndvs, DVSm)
					            VALUES ('$login', '$mdPassword', '$email', '$Activebez', '$MINING', '$MINING', '$MINING', '$dvsm' )";
					$result3 = mysql_query($query4) or die(mysql_error());;
					$query5 = "INSERT INTO greffer (rlogin, rrpassword, email, activation, reffer_id, my_refflink, name)
					             VALUES ('$login', '$mdPassword', '$email', '$Activebez','$refrel','$Myref', '$name')";
					$result4 = mysql_query($query5) or die(mysql_error());;
                    $query6 = "INSERT INTO gsmcnew (slogin, spassword, email, activation, mxdvs, mxbtmnl)
					             VALUES ('$login', '$mdPassword', '$email', '$Activebez', '$mxdvs','$MINING')";
					$result5 = mysql_query($query6) or die(mysql_error());;
                    $query7 = "INSERT INTO crypto_payments (plogin, ppassword, pemail)
					             VALUES ('$login', '$mdPassword', '$email')";
					$result6 = mysql_query($query7) or die(mysql_error());;
					$activ = mysql_query ("SELECT id FROM gusers WHERE glogin='$login'");
					$id_activ = mysql_fetch_array($activ);
					$activation = md5($id_activ['id']);
                    $from = 'support@z-files.site';
                     $headerd = "From: \"Admin\" <admin@z-files.site>\n";    //   Изменить на свой домен
                    $headerd .= "Content-type: text/plain; charset=\"utf-8\"";
					$subject = "CMine Confirmation of registration";
					$message = "Hello! Thank you for registering on the site http://z-file.site  Your login:".$login."\n
					Sincerely, Administration of this site http://z-files.site";   //  Изменить на свой домен
                    mail($email, $subject, $message, $headerd);
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
            fputs($connect, "Subject: =?utf-8?b?".base64_encode($subject)."?=\r\n");
            fputs($connect, $message." \r\n");
            fputs($connect, ".\r\n");
            fputs($connect, "RSET\r\n");
        }
        fclose($connect);
                    include_once("index.php");
                     if ($MyLang == "ch") {
                    echo "<script>swal(
  '恭喜！',
  '註冊成功完成！ 現在您可以登錄您的帳戶。',
  'success'
);</script>";
                     }
                       if ($MyLang == "en") {
                     echo "<script>swal(
  'Congratulations!',
  'Registration completed successfully! Now you can log into your account.',
  'success'
);</script>";
 }
   if ($MyLang == "ru") {
                     echo "<script>swal(
  'Поздравляем!',
  'Регистрация прошла успошно! Теперь вы можете войти в свой аккаунт.',
  'success'
);</script>";
 }
    if ($MyLang == "es") {
                     echo "<script>swal(
  '¡Enhorabuena!',
  'El registro fue usposhno! Ahora se puede acceder a su cuenta.',
  'success'
);</script>";
 }
                        if ($MyLang == "it") {
                     echo "<script>swal(
  'Complimenti!',
  'Registrazione completata con successo! Ora è possibile accedere al proprio account.',
  'success'
);</script>";
 }
                        if ($MyLang == "de") {
                     echo "<script>swal(
  'Glückwünsche!',
  'Registrierung erfolgreich abgeschlossen! Jetzt können Sie sich in Ihrem Konto anmelden.',
  'success'
);</script>";
 }
				}
			}
		}

    }
else {
             include_once("main.html");
             if ($MyLang == "ch") {
             echo "<script>swal(
  '糟糕...',
  '您輸入的驗證碼無效',
  'error'
);</script>";
                     }
if ($MyLang == "en") {
echo "<script>swal(
  'Oops...',
  'You entered invalid captcha',
  'error'
);</script>";
 }
 if ($MyLang == "ru") {
echo "<script>swal(
  'К сожалению ...',
  'Вы ввели неверный код проверки',
  'error'
);</script>";
 }
 if ($MyLang == "de") {
echo "<script>swal(
  'Hoppla...',
  'Sie haben ein ungültiges Captcha eingegeben',
  'error'
);</script>";
 }
 if ($MyLang == "it") {
echo "<script>swal(
  'Spiacenti ...',
  'Hai inserito captcha non valida',
  'error'
);</script>";
 }
 if ($MyLang == "es") {
echo "<script>swal(
  'Vaya ...',
  'Has ingresado un captcha no válido',
  'error'
);</script>";
 }
 header('Refresh: 1; URL=index.php');
exit;
}
}
?>