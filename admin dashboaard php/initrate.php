<?Php include_once("bdl.php"); ?>
<?Php
$DBRT = mysql_query("SELECT usdinbtc, dogeusd, ltcusd FROM costsmc WHERE id='1' ");
$arated = mysql_fetch_array($DBRT) or die(mysql_error());
$DBRTO = mysql_query("SELECT dogebtc, dogeusd, ltcbtc FROM costsmc WHERE id='1' ");
$aratedo = mysql_fetch_array($DBRTO) or die(mysql_error());
$btcrkurs = $arated['usdinbtc'];
$dogerkurs = $arated['dogeusd'];
$ltcrkurs = $arated['ltcusd'];
$BTCRDOGEkurs = $aratedo['dogebtc'];
$BTCRLTCkurs = $aratedo['ltcbtc'];
$currency = "USD";
$exchange_query_result = file_get_contents('https://blockchain.info/ru/ticker');
$exchange_data_obj = json_decode($exchange_query_result);
$KURS= "USD in BTC: ".$exchange_data_obj->$currency->last;
//-----------------------------------------------------------
  $jsonb = file_get_contents('https://www.cryptonator.com/api/full/btc-usd');
  $objb = json_decode($jsonb,true);
  $btckurs = $objb['ticker']['price'];
//-----------------------------------------------------------
  $json = file_get_contents('https://www.cryptonator.com/api/full/doge-usd');
  $obj = json_decode($json,true);
  $dogekurs = $obj['ticker']['price'];
//-----------------------------------------------------------
  $jsonL = file_get_contents('https://www.cryptonator.com/api/full/ltc-usd');
  $objL = json_decode($jsonL,true);
  $ltckurs = $objL['ticker']['price'];
//-----------------------------------------------------------
  $jsonBD = file_get_contents('https://www.cryptonator.com/api/full/doge-btc');
  $objBD = json_decode($jsonBD,true);
  $BTCDOGEkurs = $objBD['ticker']['price'];
//-----------------------------------------------------------
  $jsonLB = file_get_contents('https://www.cryptonator.com/api/full/ltc-btc');
  $objLB = json_decode($jsonLB,true);
  $BTCLTCkurs = $objLB['ticker']['price'];
//-----------------------------------------------------------
if(empty($btckurs)){
$btcrezkurs = $btcrkurs;
}
else {
$btcrezkurs =  $btckurs;
}
if(empty($dogekurs)){
$dogerezkurs = $dogerkurs;
}
else {
$dogerezkurs =  $dogekurs;
}
if(empty($ltckurs)){
$ltcrezkurs = $ltcrkurs;
}
else {
$ltcrezkurs =  $ltckurs;
}
if(empty($BTCDOGEkurs)){
$BTCrezDOGEkurs = $BTCRDOGEkurs;
}
else {
$BTCrezDOGEkurs =  $BTCDOGEkurs;
}
if(empty($BTCLTCkurs)){
$BTCrezLTCkurs = $BTCRLTCkurs;
}
else {
$BTCrezLTCkurs =  $BTCLTCkurs;
}
//-----------------------------------------------------------
mysql_query("UPDATE costsmc SET usdinbtc = '$btcrezkurs', dogeusd = '$dogerezkurs', ltcusd = '$ltcrezkurs', dogebtc = '$BTCrezDOGEkurs', ltcbtc = '$BTCrezLTCkurs'   WHERE id = '1'");
?>