<?php
include_once("dbadm.php");
?>
<?php
if (isset($_POST['logina'])) {
	$logina = $_POST['logina'];
	if ($logina == '') {
		unset($logina);
		exit ("Enter you login!");
	}
}
if (isset($_POST['passworda'])) {
	$passworda=$_POST['passworda'];
	if ($passworda =='') {
		unset($passworda);
		exit ("enter password");
	}
}

$logina = stripslashes($logina);
$logina = htmlspecialchars($logina);

$passworda = stripslashes($passworda);
$passworda = htmlspecialchars($passworda);


$logina = trim($logina);
$passworda = trim($passworda);

$passworda = md5($passworda);

$ausera = mysql_query("SELECT id FROM gusers WHERE glogin='$logina' AND gpassword='$passworda' AND activation='2'");
$id_usera = mysql_fetch_array($ausera);
if (empty($id_usera['id'])){
    include_once("madmcminentr.html");
    echo "<script>alert(\"login or password are incorrect."."\");</script>";
	exit;
}
else {


    $_SESSION['passworda']=$passworda;
	$_SESSION['logina']=$logina;
    $_SESSION['id']=$id_usera['id'];

}
echo "<meta http-equiv='Refresh' content='0; URL=index.php'>";
?>