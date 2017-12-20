<?Php
ini_set('display_errors', 0);
error_reporting(0);
include_once("dbadm.php");
if(empty($logina) and empty($passworda)){
require("madmcminentr.html");
}
include_once("initadmall.php");
?>
<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
</head>

<body>

<?php
$DBMINWITH1334 = mysql_query("SELECT COUNT(*) FROM gusers WHERE activation ='1' ");
echo $DBMINWITH1334;
?>

</body>
</html>