<?php 
session_start();

unset($_SESSION['name']);
unset($_SESSION['password']);
header("Location:http://54.37.2.42");

?>