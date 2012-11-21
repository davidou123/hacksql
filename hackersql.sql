-- phpMyAdmin SQL Dump
-- version 3.4.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 11 月 20 日 10:05
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `hackersql`
--

-- --------------------------------------------------------

--
-- 表的结构 `sqltable`
--

CREATE TABLE IF NOT EXISTS `sqltable` (
  `id` int(20) NOT NULL auto_increment,
  `name` text NOT NULL,
  `addr` text NOT NULL,
  `age` int(11) NOT NULL,
  `memo` text NOT NULL,
  `password` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `sqltable`
--

INSERT INTO `sqltable` (`id`, `name`, `addr`, `age`, `memo`, `password`) VALUES
(1, 'davidou', '台中市大聖街459號', 24, '超帥的阿', '0'),
(2, '林班西', '宜蘭縣龜山島', 28, '游泳回家啦', '0'),
(3, '邱義\r\n', '台中市', 24, '飆車王', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
