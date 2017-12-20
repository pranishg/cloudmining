<?php
if (isset($_COOKIE['CML'])){
 $MyLang = $_COOKIE['CML'];
 if ($MyLang == "ch") {
 include_once("languages/ch.php");
 }
  if ($MyLang == "en") {
 include_once("languages/en.php");
 }
  if ($MyLang == "es") {
 include_once("languages/es.php");
 }
  if ($MyLang == "ru") {
 include_once("languages/ru.php");
 }
  if ($MyLang == "it") {
 include_once("languages/it.php");
 }
  if ($MyLang == "de") {
 include_once("languages/de.php");
 }
 }
 else {
 $MyLang = "en";
 include_once("languages/en.php");
 }
session_start();

mysql_connect ("localhost","your user","db pass");
mysql_select_db ("db name");
$login = $_SESSION['login'];
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];
$ip = $_SERVER['REMOTE_ADDR'];
?>
 
