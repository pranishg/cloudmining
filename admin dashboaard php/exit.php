<?php include_once("bd.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>exit</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
</head>
<body>
	
<?php
if (empty($_SESSION['login']) or empty($_SESSION['password'])) {
	exit ("acces denied<br><a href='index.php'>Main page</a>");
}

unset($_SESSION['password']);
unset($_SESSION['login']); 
unset($_SESSION['id']);

exit("<meta http-equiv='Refresh' content='0; URL=index.php'>");
?>

</body>
</html>