<?Php include_once("dbadm.php"); ?>
<?Php
$loginqq = "testets";
$mdPasswordqq = "testetst";
$query = "INSERT INTO identblc (identbit1, adrbit1)
							  VALUES ('$loginqq', '$mdPasswordqq')";
					$result = mysql_query($query) or die(mysql_error());;
?>