<?Php
ini_set('display_errors', 0);
error_reporting(0);
include_once("dbadm.php");
if(empty($logina) and empty($passworda)){
require("madmcminentr.html");
}
else{
require("dashadm.php");
}
?>