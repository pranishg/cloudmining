<?php
/**
 *  ... Please MODIFY this file ... 
 *
 *
 *  YOUR MYSQL DATABASE DETAILS
 *
 */

 define("DB_HOST", 	"localhost");				// hostname
 define("DB_USER", 	"db user");		// database username
 define("DB_PASSWORD", 	"db pass");		// database password
 define("DB_NAME", 	"db name");	// database name
 $DBMINWITH1334 = mysql_query("SELECT Prvtky, Pblky, Wbdvky FROM costsmc WHERE id='1' ");
$arrMINWITH1334 = mysql_fetch_array($DBMINWITH1334);
$arbtcm1334 = $arrMINWITH1334['Prvtky'];
$ardogem1334 = $arrMINWITH1334['Pblky'];
$ardogem13345 = $arrMINWITH1334['Wbdvky'];



/**
 *  ARRAY OF ALL YOUR CRYPTOBOX PRIVATE KEYS
 *  Place values from your gourl.io signup page
 *  array("your_privatekey_for_box1", "your_privatekey_for_box2 (otional), etc...");
 */
 
 $cryptobox_private_keys = array($arbtcm1334);




 define("CRYPTOBOX_PRIVATE_KEYS", implode("^", $cryptobox_private_keys));
 unset($cryptobox_private_keys); 

?>