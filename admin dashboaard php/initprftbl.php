<?Php include_once("abdl.php"); ?>
<?Php
$DBRATE = mysql_query("SELECT usdinbtc, dogeusd, ltcusd, ltcbtc FROM costsmc WHERE id='1' ");
$DBCOST = mysql_query("SELECT cost1, cost2, cost3, dogebtc FROM costsmc WHERE id='1' ");
$arrayRATE = mysql_fetch_array($DBRATE);
$arrayCOST = mysql_fetch_array($DBCOST);
$usdinbtc = $arrayRATE['usdinbtc'];
$dogeusd = $arrayRATE['dogeusd'];
$ltcusd = $arrayRATE['ltcusd'];
$dogebtc = $arrayCOST['dogebtc'];
$ltcbtc = $arrayRATE['ltcbtc'];
$hashfive = $arrayCOST['cost1'];
$hashthree = $arrayCOST['cost2'];
$hashseven = $arrayCOST['cost3'];
$hashsvn = number_format($hashseven,8,'.','');
$hashten = number_format($hashseven * 10,8,'.','');
$Prdogesvn = ($hashsvn / $dogebtc);
$Prdgsvn = number_format($Prdogesvn,8,'.','');
$PriceTenDoge = number_format($Prdgsvn * 10,8,'.','');
$PrDgFive = ($hashfive / $dogebtc);
$PrDgFivef = number_format($PrDgFive,8,'.','');
//------------------------------------------------------------
$PriceBitA = number_format($hashfive,8 ,'.', '');
$PriceBitB = ($usdinbtc / 10000000);
$PriceBitC = ($PriceBitA + $PriceBitB);
//---------bit----------------------------------------
$PriceBitThree = number_format($hashthree,8 ,'.','');
$PriceBitThr = ($usdinbtc / 10000000);
$PrLt = ($ltcusd / 10000000);
$PrLtF = number_format($PrLt,8,'.','');
$PrLtBt = ($ltcbtc / 10000);
$PrLtBtF = number_format($PrLtBt,8,'.','');
$PriceBitTz = (($PriceBitThree - $PriceBitThr) - $PrLtF);
$PriceBitTh = ($PriceBitTz - $PrLtBtF);
//-----------------------------------------------------
$PriceBitD = number_format($PriceBitC,8 ,'.','');
$PriceBitCDm = number_format($PriceBitTh,8 ,'.','');
//---------bit----------------------------------------
$PriceDoge = ($PriceBitC / $dogebtc);
$PriceDogem = ($PriceBitTh / $dogebtc);
$PriceLtc = ($PriceBitC / $ltcbtc);
$PriceLtcm = ($PriceBitTh / $ltcbtc);
//---------doge---------------------------------------
$PriceDogeNF = number_format($PriceDoge, 8,'.', '');
$PriceDogeNFm = number_format($PriceDogem, 8,'.','');
//---------doge---------------------------------------
//---------lite---------------------------------------
$PriceLtcNF = number_format($PriceLtc, 8, '.', '');
$PriceLtcNFm = number_format($PriceLtcm, 8, '.', '');
?>