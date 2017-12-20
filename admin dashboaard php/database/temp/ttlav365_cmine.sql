-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Хост: localhost:3306
-- Время создания: Апр 06 2017 г., 10:51
-- Версия сервера: 5.5.54-cll-lve
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `ttlav365_cmine`
--

-- --------------------------------------------------------

--
-- Структура таблицы `costsmc`
--

CREATE TABLE IF NOT EXISTS `costsmc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cost1` varchar(25) NOT NULL,
  `cost2` varchar(25) NOT NULL,
  `cost3` varchar(25) NOT NULL,
  `startdt` varchar(32) NOT NULL,
  `usdinbtc` varchar(25) NOT NULL,
  `dogeusd` varchar(25) NOT NULL,
  `ltcusd` varchar(25) NOT NULL,
  `dogebtc` varchar(25) NOT NULL,
  `ltcbtc` varchar(25) NOT NULL,
  `bnsB` varchar(25) NOT NULL,
  `bnsL` varchar(25) NOT NULL,
  `bnsD` varchar(25) NOT NULL,
  `identbit` varchar(3) NOT NULL,
  `identdoge` varchar(3) NOT NULL,
  `feebitblc` varchar(10) NOT NULL,
  `feedogeblc` varchar(11) NOT NULL,
  `minbitdep` varchar(10) NOT NULL,
  `mindogedep` varchar(13) NOT NULL,
  `minwithbit` varchar(10) NOT NULL,
  `minwithdoge` varchar(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `costsmc`
--

INSERT INTO `costsmc` (`id`, `cost1`, `cost2`, `cost3`, `startdt`, `usdinbtc`, `dogeusd`, `ltcusd`, `dogebtc`, `ltcbtc`, `bnsB`, `bnsL`, `bnsD`, `identbit`, `identdoge`, `feebitblc`, `feedogeblc`, `minbitdep`, `mindogedep`, `minwithbit`, `minwithdoge`) VALUES
(1, '0.00600000', '0.00000000', '0.00010000', '20-10-2016  08:38', '1155.21734737', '0.00044990', '11.65068778', '0.00000039', '0.01014666', '0.00100000', '0.00000000', '0.00000000', '1', '1', '0.00180000', '1.00000000', '0.00600000', '100.00000000', '0.00600000', '3000.00000000');

-- --------------------------------------------------------

--
-- Структура таблицы `crypto_payments`
--

CREATE TABLE IF NOT EXISTS `crypto_payments` (
  `paymentID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `boxID` int(11) unsigned NOT NULL DEFAULT '0',
  `boxType` enum('paymentbox','captchabox') NOT NULL,
  `orderID` varchar(50) NOT NULL DEFAULT '',
  `userID` varchar(50) NOT NULL DEFAULT '',
  `plogin` varchar(20) NOT NULL,
  `ppassword` varchar(35) NOT NULL,
  `pemail` varchar(50) NOT NULL,
  `countryID` varchar(3) NOT NULL DEFAULT '',
  `coinLabel` varchar(6) NOT NULL DEFAULT '',
  `amount` double(20,8) NOT NULL DEFAULT '0.00000000',
  `amountUSD` double(20,8) NOT NULL DEFAULT '0.00000000',
  `unrecognised` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `addr` varchar(34) NOT NULL DEFAULT '',
  `txID` char(64) NOT NULL DEFAULT '',
  `txDate` datetime DEFAULT NULL,
  `txConfirmed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `txCheckDate` datetime DEFAULT NULL,
  `processed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `processedDate` datetime DEFAULT NULL,
  `recordCreated` datetime DEFAULT NULL,
  PRIMARY KEY (`paymentID`),
  KEY `boxID` (`boxID`),
  KEY `boxType` (`boxType`),
  KEY `userID` (`userID`),
  KEY `countryID` (`countryID`),
  KEY `orderID` (`orderID`),
  KEY `amount` (`amount`),
  KEY `amountUSD` (`amountUSD`),
  KEY `coinLabel` (`coinLabel`),
  KEY `unrecognised` (`unrecognised`),
  KEY `addr` (`addr`),
  KEY `txID` (`txID`),
  KEY `txDate` (`txDate`),
  KEY `txConfirmed` (`txConfirmed`),
  KEY `txCheckDate` (`txCheckDate`),
  KEY `processed` (`processed`),
  KEY `processedDate` (`processedDate`),
  KEY `recordCreated` (`recordCreated`),
  KEY `key1` (`boxID`,`orderID`),
  KEY `key2` (`boxID`,`orderID`,`userID`),
  KEY `key3` (`boxID`,`orderID`,`userID`,`txID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `crypto_payments`
--

INSERT INTO `crypto_payments` (`paymentID`, `boxID`, `boxType`, `orderID`, `userID`, `plogin`, `ppassword`, `pemail`, `countryID`, `coinLabel`, `amount`, `amountUSD`, `unrecognised`, `addr`, `txID`, `txDate`, `txConfirmed`, `txCheckDate`, `processed`, `processedDate`, `recordCreated`) VALUES
(1, 0, 'paymentbox', '', '', 'testslavun', '62727c18dea03b4238f5ade181b3fd9e', 'tdshegrh@jfjd.com', '', '', 0.00000000, 0.00000000, 0, '', '', NULL, 0, NULL, 0, NULL, NULL),
(2, 0, 'paymentbox', '', '', 'nlavun999999', '62727c18dea03b4238f5ade181b3fd9e', 'slavun999999@yandex.ru', '', '', 0.00000000, 0.00000000, 0, '', '', NULL, 0, NULL, 0, NULL, NULL),
(3, 0, 'paymentbox', '', '', 'Test', '4061863caf7f28c0b0346719e764d561', '7704343@gmail.com', '', '', 0.00000000, 0.00000000, 0, '', '', NULL, 0, NULL, 0, NULL, NULL),
(4, 0, 'paymentbox', '', '', 'bozieni', '25d55ad283aa400af464c76d713c07ad', 'bozieni@mail.ru', '', '', 0.00000000, 0.00000000, 0, '', '', NULL, 0, NULL, 0, NULL, NULL),
(5, 0, 'paymentbox', '', '', 'ilixom', '2209cc9383175f6459620b1bef26125b', 'tchirckof19@gmail.com', '', '', 0.00000000, 0.00000000, 0, '', '', NULL, 0, NULL, 0, NULL, NULL),
(6, 0, 'paymentbox', '', '', 'sanyaba001', '4174baea0337de1539c7f6f63eb50744', 'alexbaksik@yandex.ru', '', '', 0.00000000, 0.00000000, 0, '', '', NULL, 0, NULL, 0, NULL, NULL),
(7, 0, 'paymentbox', '', '', 'skish', '42b8febe14c1127cd6ae7f34fa298b87', 'greatcoin2017@gmail.com', '', '', 0.00000000, 0.00000000, 0, '', '', NULL, 0, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `greffer`
--

CREATE TABLE IF NOT EXISTS `greffer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rlogin` varchar(20) CHARACTER SET latin1 NOT NULL,
  `rrpassword` varchar(35) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `activation` int(1) NOT NULL,
  `reffer_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `my_refflink` varchar(50) CHARACTER SET latin1 NOT NULL,
  `name` varchar(32) CHARACTER SET latin1 NOT NULL,
  `datebonus` varchar(32) CHARACTER SET latin1 NOT NULL,
  `daycash` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `daycashdoge` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `daycashlite` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `countref` int(5) DEFAULT NULL,
  `PROMO` varchar(35) NOT NULL,
  `PROMOTEST` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Дамп данных таблицы `greffer`
--

INSERT INTO `greffer` (`id`, `rlogin`, `rrpassword`, `email`, `activation`, `reffer_id`, `my_refflink`, `name`, `datebonus`, `daycash`, `daycashdoge`, `daycashlite`, `countref`, `PROMO`, `PROMOTEST`) VALUES
(7, 'adminsmc', '45aace057b6857c9b4bdeebecf3d133e', 'adminsmc@smc.com', 2, '', '', 'adminsmc', '', NULL, NULL, NULL, NULL, '', 0),
(31, 'vvlapun999999', '62727c18dea03b4238f5ade181b3fd9e', 'slavun888888@gmail.com', 1, '', '24a28d4397a12b7b902e38338c895ddc', '', '', '0', '0', NULL, 3, '', 0),
(46, 'testslavun', '62727c18dea03b4238f5ade181b3fd9e', 'tdshegrh@jfjd.com', 1, '', '3315a0c412397678764b96f4b6507108', '', '', NULL, NULL, NULL, NULL, '', 0),
(45, 'ilavun999999', '62727c18dea03b4238f5ade181b3fd9e', 'drdededd@fdfd.com', 1, '', '9ee10e28db53c52a93d3cfdd7ebbc350', '', '', NULL, NULL, NULL, NULL, '', 0),
(44, 'mlavun999999', '62727c18dea03b4238f5ade181b3fd9e', 'dsfrdfde@fdre.com', 1, '', '3cf80df9754ee7d4e299847afc54fb69', '', '', NULL, NULL, NULL, NULL, '', 0),
(47, 'nlavun999999', '62727c18dea03b4238f5ade181b3fd9e', 'slavun999999@yandex.ru', 1, '', '4e8ced26388448abac0afc80b41cca00', '', '', NULL, NULL, NULL, NULL, '', 0),
(48, 'Test', '4061863caf7f28c0b0346719e764d561', '7704343@gmail.com', 1, '', '0cbc6611f5540bd0809a388dc95a615b', '', '', NULL, NULL, NULL, NULL, '', 0),
(49, 'bozieni', '25d55ad283aa400af464c76d713c07ad', 'bozieni@mail.ru', 1, '', 'e1300358111abe7134c6202f00b01b3d', '', '', NULL, NULL, NULL, NULL, '', 0),
(50, 'ilixom', '2209cc9383175f6459620b1bef26125b', 'tchirckof19@gmail.com', 1, '', '67b5bf5ce3300c76236864c91b397cfc', '', '', NULL, NULL, NULL, NULL, '', 0),
(51, 'sanyaba001', '4174baea0337de1539c7f6f63eb50744', 'alexbaksik@yandex.ru', 1, '', 'f8e4f6ad17383618a00436077b0a7268', '', '', NULL, NULL, NULL, NULL, '', 0),
(52, 'skish', '42b8febe14c1127cd6ae7f34fa298b87', 'greatcoin2017@gmail.com', 1, '', '9211b82605401ca08e4104ceab9ac1d5', '', '', NULL, NULL, NULL, NULL, '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `gsmcnew`
--

CREATE TABLE IF NOT EXISTS `gsmcnew` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slogin` varchar(25) NOT NULL,
  `spassword` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `activation` int(1) NOT NULL,
  `mxdvs` varchar(40) NOT NULL,
  `btnmx` varchar(15) NOT NULL,
  `mxbtmnl` varchar(6) NOT NULL,
  `mxcount` varchar(500) NOT NULL,
  `timebtnmx` varchar(32) NOT NULL,
  `kountmx` varchar(50) NOT NULL,
  `kountttHSP` varchar(50) NOT NULL,
  `slbuymx` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Дамп данных таблицы `gsmcnew`
--

INSERT INTO `gsmcnew` (`id`, `slogin`, `spassword`, `email`, `activation`, `mxdvs`, `btnmx`, `mxbtmnl`, `mxcount`, `timebtnmx`, `kountmx`, `kountttHSP`, `slbuymx`) VALUES
(7, 'adminsmc', '45aace057b6857c9b4bdeebecf3d133e', 'adminsmc@smc.com', 2, '0.00000000', '', 'MINING', '', '', '', '', ''),
(31, 'vvlapun999999', '62727c18dea03b4238f5ade181b3fd9e', 'slavun888888@gmail.com', 1, '0.00000000', '', 'MINING', '', '', '', '', ''),
(45, 'ilavun999999', '62727c18dea03b4238f5ade181b3fd9e', 'drdededd@fdfd.com', 1, '0.00000000', '', 'MINING', '', '', '', '', ''),
(46, 'testslavun', '62727c18dea03b4238f5ade181b3fd9e', 'tdshegrh@jfjd.com', 1, '0.00000000', '', 'MINING', '', '', '', '', ''),
(44, 'mlavun999999', '62727c18dea03b4238f5ade181b3fd9e', 'dsfrdfde@fdre.com', 1, '0.00000000', '', 'MINING', '', '', '', '', ''),
(47, 'nlavun999999', '62727c18dea03b4238f5ade181b3fd9e', 'slavun999999@yandex.ru', 1, '0.00000000', '', 'MINING', '', '', '', '', ''),
(48, 'Test', '4061863caf7f28c0b0346719e764d561', '7704343@gmail.com', 1, '0.00000000', '', 'MINING', '', '', '', '', ''),
(49, 'bozieni', '25d55ad283aa400af464c76d713c07ad', 'bozieni@mail.ru', 1, '0.00000000', '', 'MINING', '', '', '', '', ''),
(50, 'ilixom', '2209cc9383175f6459620b1bef26125b', 'tchirckof19@gmail.com', 1, '0.00000000', '', 'MINING', '', '', '', '', ''),
(51, 'sanyaba001', '4174baea0337de1539c7f6f63eb50744', 'alexbaksik@yandex.ru', 1, '0.00000000', '', 'MINING', '', '', '', '', ''),
(52, 'skish', '42b8febe14c1127cd6ae7f34fa298b87', 'greatcoin2017@gmail.com', 1, '0.00000000', '', 'MINING', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `gusers`
--

CREATE TABLE IF NOT EXISTS `gusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `glogin` varchar(20) CHARACTER SET latin1 NOT NULL,
  `gpassword` varchar(35) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `reg_date` varchar(32) CHARACTER SET latin1 NOT NULL,
  `name_user` varchar(32) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(32) CHARACTER SET latin1 NOT NULL,
  `IP` varchar(25) CHARACTER SET latin1 NOT NULL,
  `activation` int(1) NOT NULL,
  `Cash` varchar(25) CHARACTER SET latin1 NOT NULL,
  `DVS` varchar(40) CHARACTER SET latin1 NOT NULL,
  `datewithdraw` varchar(32) CHARACTER SET latin1 NOT NULL,
  `adresswithdraw` varchar(40) CHARACTER SET latin1 NOT NULL,
  `deposit` varchar(54) CHARACTER SET latin1 NOT NULL,
  `paylabel` varchar(20) CHARACTER SET latin1 NOT NULL,
  `amountwithdraw` varchar(15) CHARACTER SET latin1 NOT NULL,
  `ldate` varchar(32) CHARACTER SET latin1 NOT NULL,
  `btnml` varchar(15) CHARACTER SET latin1 NOT NULL,
  `DVSbtmnl` varchar(6) CHARACTER SET latin1 NOT NULL,
  `countbtn` varchar(500) CHARACTER SET latin1 NOT NULL,
  `timebtnb` varchar(32) CHARACTER SET latin1 NOT NULL,
  `timebtnd` varchar(32) CHARACTER SET latin1 NOT NULL,
  `kounttt` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kountdvs` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pressblock` int(1) NOT NULL,
  `rulebuy` varchar(5) CHARACTER SET latin1 NOT NULL,
  `slbuydvs` varchar(25) CHARACTER SET latin1 NOT NULL,
  `cpin` varchar(4) CHARACTER SET latin1 NOT NULL,
  `flnmb` varchar(4) NOT NULL,
  `withbtctr` varchar(1) NOT NULL,
  `bforreg` varchar(4) NOT NULL,
  `Pricecl` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Дамп данных таблицы `gusers`
--

INSERT INTO `gusers` (`id`, `glogin`, `gpassword`, `email`, `reg_date`, `name_user`, `lastname`, `IP`, `activation`, `Cash`, `DVS`, `datewithdraw`, `adresswithdraw`, `deposit`, `paylabel`, `amountwithdraw`, `ldate`, `btnml`, `DVSbtmnl`, `countbtn`, `timebtnb`, `timebtnd`, `kounttt`, `kountdvs`, `pressblock`, `rulebuy`, `slbuydvs`, `cpin`, `flnmb`, `withbtctr`, `bforreg`, `Pricecl`) VALUES
(7, 'adminsmc', '45aace057b6857c9b4bdeebecf3d133e', 'adminsmc@smc.com', '15-11-2016  12:16', 'admin', 'admin', '000.000.000.00', 2, '0.00000000', '0.00000000', '', '', 'Please click on the button and generate a new address', '', '', '', 'MINING', 'MINING', '', '', '', '', '', 0, '', '', '', '', '', '', ''),
(31, 'vvlapun999999', '62727c18dea03b4238f5ade181b3fd9e', 'slavun888888@gmail.com', '21-03-2017  09:22', '', '', '46.133.222.58', 1, '6.00000001', '21.00092131543', '', 'Akjlkdf43iulcvkvclkcxj', '', '', '', '', 'STOP', 'MINING', '', '29-03-2017 20:39:06', '0', '254342', '0', 0, 'true', '', '1984', '', '', '', ''),
(44, 'mlavun999999', '62727c18dea03b4238f5ade181b3fd9e', 'dsfrdfde@fdre.com', '03-04-2017  09:40', '', '', '46.133.78.126', 1, '0.00100000', '0.00000000', '', '', '', '', '', '', 'MINING', 'MINING', '', '', '', '', '', 0, '', '', '', '', '', '1', ''),
(45, 'ilavun999999', '62727c18dea03b4238f5ade181b3fd9e', 'drdededd@fdfd.com', '03-04-2017  09:45', '', '', '46.133.78.126', 1, '0', '10', '', '', '', '', '', '', 'STOP', 'MINING', '', '03-04-2017 08:14:01', '', '6437', '', 0, '', '', '', '', '', '1', ''),
(46, 'testslavun', '62727c18dea03b4238f5ade181b3fd9e', 'tdshegrh@jfjd.com', '03-04-2017  12:17', '', '', '46.133.142.131', 1, '0.00100000', '0.00000000', '', '', '', '', '', '', 'MINING', 'MINING', '', '', '', '', '', 0, '', '', '', '', '', '1', ''),
(47, 'nlavun999999', '62727c18dea03b4238f5ade181b3fd9e', 'slavun999999@yandex.ru', '03-04-2017  12:17', '', '', '46.133.145.196', 1, '0.00000002871', '10', '', '', '2N1Q8sX5V5w8rmd1BurBaDa5Ee1vqgJTSx3', 'diza27', '', '', 'MINING', 'MINING', '', '0', '', '0', '', 1, '', '', '', '1', '', '1', '0.00100000'),
(48, 'Test', '4061863caf7f28c0b0346719e764d561', '7704343@gmail.com', '04-04-2017  08:56', '', '', '46.211.3.41', 1, '0.00100000', '0.00000000', '', '', '', '', '', '', 'MINING', 'MINING', '', '', '', '', '', 0, '', '', '', '', '', '1', ''),
(49, 'bozieni', '25d55ad283aa400af464c76d713c07ad', 'bozieni@mail.ru', '04-04-2017  13:27', '', '', '89.42.104.246', 1, '0.00100000', '0.00000000', '', '', '2N2Pb1c1SNzkWLVzRukscuTzoe761yACNZG', 'ngopro25', '', '', 'MINING', 'MINING', '', '', '', '', '', 1, '', '', '', '1', '', '1', ''),
(50, 'ilixom', '2209cc9383175f6459620b1bef26125b', 'tchirckof19@gmail.com', '05-04-2017  03:50', '', '', '185.54.179.136', 1, '0', '10', '', '', '', '', '', '', 'MINING', 'MINING', '', '', '', '', '', 0, '', '', '', '', '', '1', ''),
(51, 'sanyaba001', '4174baea0337de1539c7f6f63eb50744', 'alexbaksik@yandex.ru', '05-04-2017  04:39', '', '', '5.105.12.210', 1, '0.00100000', '0.00000000', '', '', '2NAFdedg3c6LisH8aXDWcCt4sAwL3BsYgWB', 'lochy46', '', '', 'MINING', 'MINING', '', '', '', '', '', 1, '', '', '', '1', '', '1', ''),
(52, 'skish', '42b8febe14c1127cd6ae7f34fa298b87', 'greatcoin2017@gmail.com', '05-04-2017  23:03', '', '', '185.168.184.162', 1, '0.00100000', '0.00000000', '', '', '', '', '', '', 'MINING', 'MINING', '', '', '', '', '', 0, '', '', '', '', '', '1', '');

-- --------------------------------------------------------

--
-- Структура таблицы `identblc`
--

CREATE TABLE IF NOT EXISTS `identblc` (
  `id` int(11) NOT NULL,
  `identbit1` varchar(40) NOT NULL,
  `identdoge1` varchar(40) NOT NULL,
  `identbit2` varchar(40) NOT NULL,
  `identdoge2` varchar(40) NOT NULL,
  `identbit3` varchar(40) NOT NULL,
  `identdoge3` varchar(40) NOT NULL,
  `identbit4` varchar(40) NOT NULL,
  `identdoge4` varchar(40) NOT NULL,
  `identbit5` varchar(40) NOT NULL,
  `identdoge5` varchar(40) NOT NULL,
  `adrbit1` varchar(40) NOT NULL,
  `adrdoge1` varchar(40) NOT NULL,
  `adrbit2` varchar(40) NOT NULL,
  `adrdoge2` varchar(40) NOT NULL,
  `adrbit3` varchar(40) NOT NULL,
  `adrdoge3` varchar(40) NOT NULL,
  `adrbit4` varchar(40) NOT NULL,
  `adrdoge4` varchar(40) NOT NULL,
  `adrbit5` varchar(40) NOT NULL,
  `adrdoge5` varchar(40) NOT NULL,
  `pinb1` varchar(40) NOT NULL,
  `pinb2` varchar(40) NOT NULL,
  `pinb3` varchar(40) NOT NULL,
  `pinb4` varchar(40) NOT NULL,
  `pinb5` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `identblc`
--

INSERT INTO `identblc` (`id`, `identbit1`, `identdoge1`, `identbit2`, `identdoge2`, `identbit3`, `identdoge3`, `identbit4`, `identdoge4`, `identbit5`, `identdoge5`, `adrbit1`, `adrdoge1`, `adrbit2`, `adrdoge2`, `adrbit3`, `adrdoge3`, `adrbit4`, `adrdoge4`, `adrbit5`, `adrdoge5`, `pinb1`, `pinb2`, `pinb3`, `pinb4`, `pinb5`) VALUES
(0, '4579-6f4d-de7f-f58e', '9706-95fb-c04a-df6f', '1688-64c4-7cd0-c34b', '6a4a-76f7-1027-eedc', '', '', '', '', '', '', '2N9f35D1Co36a88yRFANiQ49H1PnKdkyqBA', 'A8D3dnmTndghvrUSvh3fZSMP1PLC4hvhqK', '2MsviNdwCessg463vGbqeGM4HyjQTGB2SxX', '2MvGjSjN8271ysPazqxvfjwuzS4oPFs4vEa', '', '', '', '', '', '', '99179917', '99179917', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `ltcdoge`
--

CREATE TABLE IF NOT EXISTS `ltcdoge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flogin` varchar(20) CHARACTER SET latin1 NOT NULL,
  `fpassword` varchar(35) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `activation` int(1) NOT NULL,
  `dogedeposit` varchar(54) CHARACTER SET latin1 NOT NULL,
  `paylabeldoge` varchar(20) CHARACTER SET latin1 NOT NULL,
  `Cashdoge` varchar(25) CHARACTER SET latin1 NOT NULL,
  `litedeposit` varchar(54) CHARACTER SET latin1 NOT NULL,
  `paylabellite` varchar(20) CHARACTER SET latin1 NOT NULL,
  `Cashlite` varchar(25) CHARACTER SET latin1 NOT NULL,
  `pressdoge` int(1) NOT NULL,
  `presslite` int(1) NOT NULL,
  `datewithdrawd` varchar(32) CHARACTER SET latin1 NOT NULL,
  `datewithdrawl` varchar(32) CHARACTER SET latin1 NOT NULL,
  `adresswithdrawd` varchar(40) CHARACTER SET latin1 NOT NULL,
  `adresswithdrawl` varchar(40) CHARACTER SET latin1 NOT NULL,
  `amountwithdrawd` varchar(15) CHARACTER SET latin1 NOT NULL,
  `amountwithdrawl` varchar(15) CHARACTER SET latin1 NOT NULL,
  `check` varchar(4) CHARACTER SET latin1 NOT NULL,
  `hisbit` varchar(25) CHARACTER SET latin1 NOT NULL,
  `hisdoge` varchar(25) CHARACTER SET latin1 NOT NULL,
  `hislite` varchar(25) CHARACTER SET latin1 NOT NULL,
  `flnmbd` varchar(4) NOT NULL,
  `withdgtr` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Дамп данных таблицы `ltcdoge`
--

INSERT INTO `ltcdoge` (`id`, `flogin`, `fpassword`, `email`, `activation`, `dogedeposit`, `paylabeldoge`, `Cashdoge`, `litedeposit`, `paylabellite`, `Cashlite`, `pressdoge`, `presslite`, `datewithdrawd`, `datewithdrawl`, `adresswithdrawd`, `adresswithdrawl`, `amountwithdrawd`, `amountwithdrawl`, `check`, `hisbit`, `hisdoge`, `hislite`, `flnmbd`, `withdgtr`) VALUES
(7, 'adminsmc', '45aace057b6857c9b4bdeebecf3d133e', 'adminsmc@smc.com', 2, 'Please click on the button and generate a new address', '', '0.00000000', 'Please click on the button and generate a new address', '', '0.00000000', 0, 0, '', '', '', '', '', '', '', '0.00000000', '0.00000000', '0.00000000', '', ''),
(31, 'vvlapun999999', '62727c18dea03b4238f5ade181b3fd9e', 'slavun888888@gmail.com', 1, '', '', '45000', '', '', '0.00000000', 0, 0, '', '', 'fsdfaadsfffsdf', '', '', '', '', '0.00000000', '0.00000000', '0.00000000', '', ''),
(44, 'mlavun999999', '62727c18dea03b4238f5ade181b3fd9e', 'dsfrdfde@fdre.com', 1, '', '', '0.00000000', '', '', '0.00000000', 0, 0, '', '', '', '', '', '', '', '0.00000000', '0.00000000', '0.00000000', '', ''),
(45, 'ilavun999999', '62727c18dea03b4238f5ade181b3fd9e', 'drdededd@fdfd.com', 1, '', '', '0.00000000', '', '', '0.00000000', 0, 0, '', '', '', '', '', '', '', '0.00000000', '0.00000000', '0.00000000', '', ''),
(46, 'testslavun', '62727c18dea03b4238f5ade181b3fd9e', 'tdshegrh@jfjd.com', 1, '', '', '0.00000000', '', '', '0.00000000', 0, 0, '', '', '', '', '', '', '', '0.00000000', '0.00000000', '0.00000000', '', ''),
(47, 'nlavun999999', '62727c18dea03b4238f5ade181b3fd9e', 'slavun999999@yandex.ru', 1, '', '', '0.00000000', '', '', '0.00000000', 0, 0, '', '', '', '', '', '', '', '0.00000000', '0.00000000', '0.00000000', '', ''),
(48, 'Test', '4061863caf7f28c0b0346719e764d561', '7704343@gmail.com', 1, '', '', '0.00000000', '', '', '0.00000000', 0, 0, '', '', '', '', '', '', '', '0.00000000', '0.00000000', '0.00000000', '', ''),
(49, 'bozieni', '25d55ad283aa400af464c76d713c07ad', 'bozieni@mail.ru', 1, '', '', '0.00000000', '', '', '0.00000000', 0, 0, '', '', '', '', '', '', '', '0.00000000', '0.00000000', '0.00000000', '', ''),
(50, 'ilixom', '2209cc9383175f6459620b1bef26125b', 'tchirckof19@gmail.com', 1, '', '', '0.00000000', '', '', '0.00000000', 0, 0, '', '', '', '', '', '', '', '0.00000000', '0.00000000', '0.00000000', '', ''),
(51, 'sanyaba001', '4174baea0337de1539c7f6f63eb50744', 'alexbaksik@yandex.ru', 1, '', '', '0.00000000', '', '', '0.00000000', 0, 0, '', '', '', '', '', '', '', '0.00000000', '0.00000000', '0.00000000', '', ''),
(52, 'skish', '42b8febe14c1127cd6ae7f34fa298b87', 'greatcoin2017@gmail.com', 1, '', '', '0.00000000', '', '', '0.00000000', 0, 0, '', '', '', '', '', '', '', '0.00000000', '0.00000000', '0.00000000', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `ltcdogeming`
--

CREATE TABLE IF NOT EXISTS `ltcdogeming` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vlogin` varchar(20) CHARACTER SET latin1 NOT NULL,
  `vpassword` varchar(35) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `activation` int(1) NOT NULL,
  `btndoge` varchar(6) CHARACTER SET latin1 NOT NULL,
  `btnltc` varchar(6) CHARACTER SET latin1 NOT NULL,
  `btndvs` varchar(6) CHARACTER SET latin1 NOT NULL,
  `timebtndoge` varchar(32) CHARACTER SET latin1 NOT NULL,
  `timebtnltc` varchar(32) CHARACTER SET latin1 NOT NULL,
  `timebtndvs` varchar(32) CHARACTER SET latin1 NOT NULL,
  `cntdfirst` varchar(50) CHARACTER SET latin1 NOT NULL,
  `DVSm` varchar(40) CHARACTER SET latin1 NOT NULL,
  `countedc` varchar(500) CHARACTER SET latin1 NOT NULL,
  `kountttMINI` varchar(50) CHARACTER SET latin1 NOT NULL,
  `slbuydvsm` varchar(25) CHARACTER SET latin1 NOT NULL,
  `countedcl` varchar(500) NOT NULL,
  `cntdtwo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Дамп данных таблицы `ltcdogeming`
--

INSERT INTO `ltcdogeming` (`id`, `vlogin`, `vpassword`, `email`, `activation`, `btndoge`, `btnltc`, `btndvs`, `timebtndoge`, `timebtnltc`, `timebtndvs`, `cntdfirst`, `DVSm`, `countedc`, `kountttMINI`, `slbuydvsm`, `countedcl`, `cntdtwo`) VALUES
(7, 'adminsmc', '45aace057b6857c9b4bdeebecf3d133e', 'adminsmc@smc.com', 2, 'MINING', 'MINING', 'MINING', '', '', '', '', '0.00000000', '', '', '', '', ''),
(31, 'vvlapun999999', '62727c18dea03b4238f5ade181b3fd9e', 'slavun888888@gmail.com', 1, 'MINING', 'MINING', 'MINING', '0', '', '0', '0', '0.00500014818', '', '0', '', '', ''),
(45, 'ilavun999999', '62727c18dea03b4238f5ade181b3fd9e', 'drdededd@fdfd.com', 1, 'MINING', 'MINING', 'MINING', '', '', '', '', '0.00000000', '', '', '', '', ''),
(46, 'testslavun', '62727c18dea03b4238f5ade181b3fd9e', 'tdshegrh@jfjd.com', 1, 'MINING', 'MINING', 'MINING', '', '', '', '', '0.00000000', '', '', '', '', ''),
(44, 'mlavun999999', '62727c18dea03b4238f5ade181b3fd9e', 'dsfrdfde@fdre.com', 1, 'MINING', 'MINING', 'MINING', '', '', '', '', '0.00000000', '', '', '', '', ''),
(47, 'nlavun999999', '62727c18dea03b4238f5ade181b3fd9e', 'slavun999999@yandex.ru', 1, 'MINING', 'MINING', 'MINING', '', '', '', '', '0.00000000', '', '', '', '', ''),
(48, 'Test', '4061863caf7f28c0b0346719e764d561', '7704343@gmail.com', 1, 'MINING', 'MINING', 'MINING', '', '', '', '', '0.00000000', '', '', '', '', ''),
(49, 'bozieni', '25d55ad283aa400af464c76d713c07ad', 'bozieni@mail.ru', 1, 'MINING', 'MINING', 'MINING', '', '', '', '', '0.00000000', '', '', '', '', ''),
(50, 'ilixom', '2209cc9383175f6459620b1bef26125b', 'tchirckof19@gmail.com', 1, 'MINING', 'MINING', 'MINING', '', '', '', '', '0.00000000', '', '', '', '', ''),
(51, 'sanyaba001', '4174baea0337de1539c7f6f63eb50744', 'alexbaksik@yandex.ru', 1, 'MINING', 'MINING', 'MINING', '', '', '', '', '0.00000000', '', '', '', '', ''),
(52, 'skish', '42b8febe14c1127cd6ae7f34fa298b87', 'greatcoin2017@gmail.com', 1, 'MINING', 'MINING', 'MINING', '', '', '', '', '0.00000000', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
