<?php

define("host", "localhost");
define("user", "root");
define("pass", "");
define("db_name", "cdmine2");


$conn = mysqli_connect(host, user, pass, db_name) or die(mysqli_error());
/*
 if(!$conn)
 {
 echo "database error connection";
 }
 else {
 echo "connection successfully created.";
 }
*/
//$conn = mysqli_connect($host,$user,$pass) or die(mysqli_error());

mysqli_select_db($conn, db_name) or die(mysqli_error($conn));
?>