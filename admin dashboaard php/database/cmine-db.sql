-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Client: localhost:3306
-- Généré le: Sam 18 Novembre 2017 à 23:54
-- Version du serveur: 10.1.24-MariaDB-cll-lve
-- Version de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `onlicpfq_cmineup1`
--

-- --------------------------------------------------------

--
-- Structure de la table `costsmc`
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
  `Prvtky` varchar(60) NOT NULL,
  `Pblky` varchar(60) NOT NULL,
  `Wbdvky` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `costsmc`
--

INSERT INTO `costsmc` (`id`, `cost1`, `cost2`, `cost3`, `startdt`, `usdinbtc`, `dogeusd`, `ltcusd`, `dogebtc`, `ltcbtc`, `bnsB`, `bnsL`, `bnsD`, `identbit`, `identdoge`, `feebitblc`, `feedogeblc`, `minbitdep`, `mindogedep`, `minwithbit`, `minwithdoge`, `Prvtky`, `Pblky`, `Wbdvky`) VALUES
(1, '0.001', '0.00000000', '0.00001', '20-10-2016  08:38', '7779.13997575', '0.00131746', '68.34494204', '0.00000018', '0.00883992', '0.001', '0.00000000', '500', '1', '1', '0.00000001', '0.0000002', '0.001', '10', '0.0001', '3000', '9331AANstdkBitcoin77BTCPRVnMCnWTGrmnz6HU31FlkaNESf', '9331AANstdkBitcoin77BTCPUB7hmp8s3ew6pwgOMgxMq81Fn9', 'DEV657GAFBA73B645F2BC3G61588476');

-- --------------------------------------------------------

--
-- Structure de la table `crypto_payments`
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=388 ;

--
-- Contenu de la table `crypto_payments`
--

INSERT INTO `crypto_payments` (`paymentID`, `boxID`, `boxType`, `orderID`, `userID`, `plogin`, `ppassword`, `pemail`, `countryID`, `coinLabel`, `amount`, `amountUSD`, `unrecognised`, `addr`, `txID`, `txDate`, `txConfirmed`, `txCheckDate`, `processed`, `processedDate`, `recordCreated`) VALUES
(387, 0, 'paymentbox', '', '', 'test1988', '69306be440a375fb14fdd4f71fb0c35e', 'test1988@gmail.com', '', '', 0.00000000, 0.00000000, 0, '', '', NULL, 0, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `greffer`
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=433 ;

--
-- Contenu de la table `greffer`
--

INSERT INTO `greffer` (`id`, `rlogin`, `rrpassword`, `email`, `activation`, `reffer_id`, `my_refflink`, `name`, `datebonus`, `daycash`, `daycashdoge`, `daycashlite`, `countref`, `PROMO`, `PROMOTEST`) VALUES
(7, 'admin', '5136b96817648b5b81008f6a984284a7', 'support@z-files.site', 2, '', '', 'adminsmc', '', NULL, NULL, NULL, NULL, '', 0),
(432, 'test1988', '69306be440a375fb14fdd4f71fb0c35e', 'test1988@gmail.com', 1, '', '69306be440a375fb14fdd4f71fb0c35e', '', '', NULL, NULL, NULL, NULL, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `gsmcnew`
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=433 ;

--
-- Contenu de la table `gsmcnew`
--

INSERT INTO `gsmcnew` (`id`, `slogin`, `spassword`, `email`, `activation`, `mxdvs`, `btnmx`, `mxbtmnl`, `mxcount`, `timebtnmx`, `kountmx`, `kountttHSP`, `slbuymx`) VALUES
(7, 'admin', '5136b96817648b5b81008f6a984284a7', 'support@z-files.site', 2, '0.00000000', '', 'MINING', '', '', '', '', ''),
(432, 'test1988', '69306be440a375fb14fdd4f71fb0c35e', 'test1988@gmail.com', 1, '0.00000000', '', 'MINING', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `gusers`
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=433 ;

--
-- Contenu de la table `gusers`
--

INSERT INTO `gusers` (`id`, `glogin`, `gpassword`, `email`, `reg_date`, `name_user`, `lastname`, `IP`, `activation`, `Cash`, `DVS`, `datewithdraw`, `adresswithdraw`, `deposit`, `paylabel`, `amountwithdraw`, `ldate`, `btnml`, `DVSbtmnl`, `countbtn`, `timebtnb`, `timebtnd`, `kounttt`, `kountdvs`, `pressblock`, `rulebuy`, `slbuydvs`, `cpin`, `flnmb`, `withbtctr`, `bforreg`, `Pricecl`) VALUES
(7, 'admin', '5136b96817648b5b81008f6a984284a7', 'support@z-files.site', '15-11-2016  12:16', 'admin', 'admin', '000.000.000.00', 2, '0.00000000', '0.00000000', '', '', 'Please click on the button and generate a new address', '', '', '', 'MINING', 'MINING', '', '', '', '', '', 0, '', '', '', '3', '', '1', '5.00000000'),
(429, 'cmine2018', 'b0cc5ee107570eb6e51140f9000f0def', 'cmine2018@gmail.com', '15-11-2017  15:05', '', '', '105.66.133.218', 1, '0.00090077192', '10.01552031272', '', '', '3DQ1DXu1oTS55WV1J4bB3ueUDjEKB9nz81', 'kange82', '', '', 'MINING', 'MINING', '', '0', '0', '0', '0', 1, 'true', '', '', '1', '', '1', '0.00100000'),
(432, 'test1988', '69306be440a375fb14fdd4f71fb0c35e', 'test1988@gmail.com', '18-11-2017  23:50', '', '', '105.67.6.73', 1, '0.0009', '10', '', '', '3JLZZ5HkCSzu73JdwGWeNYdXE6Yoh1KENw', 'pexi35', '', '', 'STOP', 'MINING', '', '19-11-2017 04:53:21', '', '23', '', 1, '', '', '', '1', '', '1', '0.00010000'),
(431, 'maximus', '73401936aefc7f374b5ccaabf634bd25', 'maximusceo.ms@gmail.com', '15-11-2017  18:27', '', '', '177.188.35.50', 1, '0.00090000015', '10', '', '', '', '', '', '', 'MINING', 'STOP', '', '0', '15-11-2017 23:42:50', '0', '1', 0, '', '', '', '', '', '1', '0.00999000');

-- --------------------------------------------------------

--
-- Structure de la table `identblc`
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
-- Contenu de la table `identblc`
--

INSERT INTO `identblc` (`id`, `identbit1`, `identdoge1`, `identbit2`, `identdoge2`, `identbit3`, `identdoge3`, `identbit4`, `identdoge4`, `identbit5`, `identdoge5`, `adrbit1`, `adrdoge1`, `adrbit2`, `adrdoge2`, `adrbit3`, `adrdoge3`, `adrbit4`, `adrdoge4`, `adrbit5`, `adrdoge5`, `pinb1`, `pinb2`, `pinb3`, `pinb4`, `pinb5`) VALUES
(0, '0179-b760-9d11-a185', '8e1e-957e-3612-f520', '5d1c-d512-75ef-aaaf', '6473-e51c-c545-241b', 'gfdtrggt', '', '183.171.82.171', 'kj', '', '', '3KYsESvonpJmJmZZLC47aTnGSWi71Qvjxe', 'AFiVWX5zuEMVkju7FUmy9porMQmjMiw82z', '3Jfe2vydnGrpLNRTkbBWo84mrosyiyMtfV', 'A7XK4VrLfCbgtxCBb2WYXSfhrF49tJds6x', '3trhrttrtMtrhtrhrt', '', '18Zac3ZHPKCDqCB374YP4pfawotehFnc27', 'jjjj', '', '', '446544', '446544', 'rttrtrttrt', 'jjj', '');

-- --------------------------------------------------------

--
-- Structure de la table `ltcdoge`
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=433 ;

--
-- Contenu de la table `ltcdoge`
--

INSERT INTO `ltcdoge` (`id`, `flogin`, `fpassword`, `email`, `activation`, `dogedeposit`, `paylabeldoge`, `Cashdoge`, `litedeposit`, `paylabellite`, `Cashlite`, `pressdoge`, `presslite`, `datewithdrawd`, `datewithdrawl`, `adresswithdrawd`, `adresswithdrawl`, `amountwithdrawd`, `amountwithdrawl`, `check`, `hisbit`, `hisdoge`, `hislite`, `flnmbd`, `withdgtr`) VALUES
(7, 'admin', '5136b96817648b5b81008f6a984284a7', 'support@zi-files.site', 2, 'A4dLBKQncH1P8iHozQYexHKSAWLj1pP7pD', 'chuwi74', '0.00000000', 'Please click on the button and generate a new address', '', '0.00000000', 1, 0, '', '', '', '', '', '', '', '0.00000000', '0.00000000', '0.00000000', '1', ''),
(432, 'test1988', '69306be440a375fb14fdd4f71fb0c35e', 'test1988@gmail.com', 1, 'AAWqzJev2hcoAV4aHke1kjqvSiTxLjmqiP', 'ntante61', '500.00000000', '', '', '0.00000000', 1, 0, '', '', '', '', '', '', '', '0.00000000', '0.00000000', '0.00000000', '1', '');

-- --------------------------------------------------------

--
-- Structure de la table `ltcdogeming`
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=433 ;

--
-- Contenu de la table `ltcdogeming`
--

INSERT INTO `ltcdogeming` (`id`, `vlogin`, `vpassword`, `email`, `activation`, `btndoge`, `btnltc`, `btndvs`, `timebtndoge`, `timebtnltc`, `timebtndvs`, `cntdfirst`, `DVSm`, `countedc`, `kountttMINI`, `slbuydvsm`, `countedcl`, `cntdtwo`) VALUES
(7, 'admin', '4a5917284a10eb15266f9de5fd93e6c6', 'adminsmc@smc.com', 2, 'MINING', 'MINING', 'MINING', '', '', '', '', '0.00000000', '', '', '', '', ''),
(429, 'cmine2018', 'b0cc5ee107570eb6e51140f9000f0def', 'cmine2018@gmail.com', 1, 'MINING', 'MINING', 'MINING', '0', '', '0', '0', '0.09154130102', '', '0', '', '', ''),
(432, 'test1988', '69306be440a375fb14fdd4f71fb0c35e', 'test1988@gmail.com', 1, 'MINING', 'MINING', 'MINING', '', '', '', '', '0.00000000', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
