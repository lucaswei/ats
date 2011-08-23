-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 建立日期: Aug 24, 2011, 12:31 AM
-- 伺服器版本: 5.1.54
-- PHP 版本: 5.3.5-1ubuntu7.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `ats`
--
CREATE DATABASE `ats` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `ats`;

-- --------------------------------------------------------

--
-- 資料表格式： `announce`
--

CREATE TABLE IF NOT EXISTS `announce` (
  `ID` int(11) NOT NULL,
  `contents` text NOT NULL,
  `time` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 列出以下資料庫的數據： `announce`
--

INSERT INTO `announce` (`ID`, `contents`, `time`) VALUES
(1, 'system is work', '2011-08-04'),
(2, 'teacher1 give a new homework', '2011-08-04'),
(3, 'The homework will be end', '2011-08-06');

-- --------------------------------------------------------

--
-- 資料表格式： `artical`
--

CREATE TABLE IF NOT EXISTS `artical` (
  `artical_id` int(11) NOT NULL AUTO_INCREMENT,
  `editor` int(11) NOT NULL,
  `title` text,
  `contents` text NOT NULL,
  `time` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `father_artical` smallint(6) NOT NULL,
  PRIMARY KEY (`artical_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 列出以下資料庫的數據： `artical`
--

INSERT INTO `artical` (`artical_id`, `editor`, `title`, `contents`, `time`, `class`, `father_artical`) VALUES
(1, 0, NULL, 'Zawiya, Libya (CNN) -- Rebel fighters in Libya, trying to take over a key western city, faced stiff resistance from Moammar Gadhafi''s forces on Wednesday, a rebel commander said.\r\nThe fighters hope to seize Zawiya, about 30 miles west of the capital, in an effort to advance on the capital of Tripoli in their fight to topple the Gadhafi regime that has controlled the North African country for decades.\r\n"Most of Zawiya is now in rebel hands, but there are snipers and shelling coming from the east of the city," rebel commander Col. Radwan Fheid said.\r\n"The snipers are near Zawiya hospital. People are leaving. They can''t stay because of the shelling. These are the last days, God willing."Rebels are setting up checkpoints and field hospitals to treat the wounded, many of whom have been shot or struck by shrapnel.\r\nAt a hospital in nearby Yefren, doctors said they had treated more than 200 patients over the past four days -- some of them rebel soldiers from any of several front lines, some of them civilians.\r\nAmong the latter was a 9-year-old girl who was in her house when it was hit by a missile, sending shrapnel into her, a doctor said. "Unfortunately, there is more than 90% chance that she may lose her right arm here," he said.\r\nMedical staff said they were donating their own blood to keep their patients alive. One man, both legs wrapped in bandages, cried out in pain.\r\nDoctors said there were not enough staff members to properly take care of the patient load.\r\nZawiya is west of Tripoli on a strategic supply route. Rebel control of Zawiya would represent a major advance toward putting a stranglehold on the Gadhafi-controlled seat of power.\r\nCol. Ahmed Banni, military spokesman for the opposition National Transitional Council, said Tuesday that rebels hope to enter the capital by the end of the month.', 2011, 1, 1),
(2, 0, NULL, 'Hi,i''m super man. Give me your hands.', 2011, 1, 1),
(3, 0, NULL, 'Shit , that''s why? i don''t want', 2011, 2, 1),
(4, 0, NULL, 'i''m sorry. i said something wrong.', 2011, 2, 2),
(5, 0, NULL, 'hi,everyone. i''m a girl.', 2011, 3, 1),
(6, 0, NULL, 'Oh~ No! please let me pass.', 2011, 2, 3),
(7, 0, NULL, 'Maybe i need to say more.but I''m shy.', 2011, 3, 2),
(8, 0, '', '', 1313946566, 0, 0),
(9, 0, '', '', 1313946643, 0, 0),
(10, 0, 'title', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 1314113955, 2, 0),
(11, 0, 'title', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 1314113971, 2, 0),
(12, 0, '', '', 1314113999, 0, 0),
(13, 0, '', '', 1314114004, 0, 0),
(14, 0, 'title', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 1314114183, 2, 0),
(15, 0, 'This  is title', '&#12298;&#27963;&#21205; - BOSS&#24351;&#30340;&#21021;&#30331;&#22580;&#12299; 8/20(&#20845;)Pm 2200-2400 \r\n&#24819;&#30693;&#36947;&#26368;&#26032;&#26368;&#22831;&#30340;KTV&#26032;&#27468;&#25110;&#26159;K&#27468;&#25490;&#34892;&#27036;&#21966;? \r\n&#19977;&#24307;&#35430;&#29992;&#26032;DJ- BOSS&#24351; &#23559;&#28858;&#22823;&#23478;&#19968;&#19968;&#20171;&#32057;&#36889;&#20123;&#27468;&#26354;!!! \r\n&#35531;&#22823;&#23478;&#32102;MC BOSS&#30340;&#24351;&#24351;&#25447;&#22580;&#21543;!!! ', 1314114857, 2, 0);

-- --------------------------------------------------------

--
-- 資料表格式： `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `ID` int(11) NOT NULL,
  `begin` int(11) NOT NULL,
  `deadline` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `poster` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 列出以下資料庫的數據： `class`
--

INSERT INTO `class` (`ID`, `begin`, `deadline`, `name`, `description`, `poster`) VALUES
(1, 1000000000, 2000000000, 'English writing', '', 3),
(2, 1000000001, 2000000002, 'grammer', '', 4),
(3, 2011, 2011, 'conversation', '', 3),
(4, 2011, 2011, 'English hearing', '', 4);

-- --------------------------------------------------------

--
-- 資料表格式： `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comments_id` int(11) NOT NULL AUTO_INCREMENT,
  `editor` int(9) NOT NULL,
  `time` int(11) NOT NULL,
  `stars` smallint(6) NOT NULL,
  `father_artical` int(11) NOT NULL,
  `quote` text NOT NULL,
  `annotate` text NOT NULL,
  `summary` text NOT NULL,
  PRIMARY KEY (`comments_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 列出以下資料庫的數據： `comments`
--

INSERT INTO `comments` (`comments_id`, `editor`, `time`, `stars`, `father_artical`, `quote`, `annotate`, `summary`) VALUES
(1, 0, 2011, 2, 1, 'this is a beutiful day. let''s us go to run.', '1.your grammer is wrong', 'it''s so bad.'),
(2, 0, 2011, 1, 1, 'this is a beutiful day. let''s us go to run.', 'you need to write a capital letter on the first.', 'good luck'),
(3, 0, 2011, 0, 2, 'Hi,i''m super man. Give me your hands.', 'i don''t know what you mean', 'try again'),
(4, 0, 2011, 3, 2, 'Hi,i''m super man. Give me your hands.', 'i think the first and the second aren''t good connection', 'maybe you need to think more'),
(5, 0, 2011, 2, 3, 'Shit , that''s why? i don''t want', '', 'it''s not good article'),
(6, 0, 2011, 0, 5, 'Zawiya, Libya (CNN) -- Rebel fighters in Libya, trying to take over a key western city, faced stiff resistance from Moammar Gadhafi\\''s forces on Wednesday, a rebel commander said.\\r\\nThe fighters hope to seize Zawiya, about 30 miles west of the capital, in an effort to advance on the capital of Tripoli in their fight to topple the Gadhafi regime that has controlled the North African country for decades.\\r\\n\\"Most of Zawiya is now in rebel hands, but there are snipers and shelling coming from the east of the city,\\" rebel commander Col. Radwan Fheid said.\\r\\n\\"The snipers are near Zawiya hospital. People are leaving. They can\\''t stay because of the shelling. These are the last days, God willing.\\"Rebels are setting up checkpoints and field hospitals to treat the wounded, m<span class=\\"marked\\">any of whom have been shot or struck by shrapnel.\\r\\nAt a hospital in nearby Yefren, doctors said they had treated more than 200 patients over the past four days -- some o<sup>[1]</sup></span>f them rebel soldiers from any of several front lines, some of them civilians.\\r\\nAmong the latter was a 9-year-old girl who was in her house when it was hit by a missile, sending shrapnel into her, a doctor said. \\"Unfortunately, there is more than 90% chance that she may lose her right arm here,\\" he said.\\r\\nMedical staff said they were donating their own blood to keep their patients alive. One man, both legs wrapped in bandages, cried out in pain.\\r\\nDoctors said there were not enough staff members to properly take care of the patient load.\\r\\nZawiya is west of Tripoli on a strategic supply route. Rebel control of Zawiya would represent a major advance toward putting a stranglehold on the Gadhafi-controlled seat of power.\\r\\nCol. Ahmed Banni, military spokesman for the opposition National Transitional Council, said Tuesday that rebels hope to enter the capital by the end of the month.', '1. just use comma', 'i know you are girl.'),
(7, 1, 1313667148, 0, 1, '11', '1', 'qwqwqwqwqwqw'),
(8, 1, 1313667585, 0, 1, '\r\n		Zawiya, Libya (CNN) -- Rebel fighters in Libya, trying to take over a key western city, faced stiff resistance from Moammar Gadhafi''s forces on Wednesday, a rebel commander said.\r\nThe fighters hope to seize Zawiya, about 30 miles west of the capital, in an effort to advance on the capital of Tripoli in their fight to topple the Gadhafi regime that has controlled the North African country for decades.\r\n"Most of Zawiya is now in rebel hands, but there are snipers and shelling coming from the east of the city," rebel commander Col. Radwan Fheid said.\r\n"The sniper<span class="marked">s are near Zawiya hospital. People are leaving. They can''t stay because of the shelling.<sup>[1]</sup></span> These are the last days, God willing."Rebels are setting up checkpoints and field hospitals to treat the wounded, many of whom have been shot or struck by shrapnel.\r\nAt a hospital in nearby Yefren, doctors said they had treated more than 200 patients over the pa<span class="marked">st four days -- some of them rebel soldiers from any of several front lines, some of them civilians.\r\nAmong the latter was a 9-year-old girl who was in her hou<sup>[2]</sup></span>se when it was hit by a missile, sending shrapnel into her, a doctor said. "<span class="marked">Unfortunately, there is more than 90% chance that she may lose her right arm here," he said.\r\nMedical staff said they were donating their own blood to keep their patients alive. One man, both legs wrapped in bandages, cried out in pain.\r\nDoctors said there were not <sup>[3]</sup></span>enough staff members to properly take care of the patient load.\r\nZawiya is west of Tripoli on a strategic supply route. Rebel control of Zawiya would represent a major advance toward putting a stranglehold on the Gadhafi-controlled seat of power.\r\nCol. Ahmed Banni, military spokesman for the opposition National Transitional Council, said Tuesday that rebels hope to enter the capital by the end of the month.		', '1/2/3/', 'qwqwqwqwqwqw'),
(9, 0, 1313667148, 0, 1, '12', '1/2/3/', 'qwqwqwqwqwqw'),
(10, 1, 1313667861, 0, 1, '\r\n		Zawiya, Libya (CNN) -- Rebel fighters in Libya, trying to take over a key western city, faced stiff resistance from Moammar Gadhafi''s forces on Wednesday, a rebel commander said.\r\nThe fighters hope to seize Zawiya, about 30 miles west of the capital, in an effort to advance on the capital of Tripoli in their fight to topple the Gadhafi regime that has controlled the North African country for decades.\r\n"Most of Zawiya is now in rebel hands, but there are snipers and shelling coming from the east of the city," rebel commander Col. Radwan Fheid said.\r\n"The sniper<span class="marked">s are near Zawiya hospital. People are leaving. They can''t stay because of the shelling.<sup>[1]</sup></span> These are the last days, God willing."Rebels are setting up checkpoints and field hospitals to treat the wounded, many of whom have been shot or struck by shrapnel.\r\nAt a hospital in nearby Yefren, doctors said they had treated more than 200 patients over the pa<span class="marked">st four days -- some of them rebel soldiers from any of several front lines, some of them civilians.\r\nAmong the latter was a 9-year-old girl who was in her hou<sup>[2]</sup></span>se when it was hit by a missile, sending shrapnel into her, a doctor said. "<span class="marked">Unfortunately, there is more than 90% chance that she may lose her right arm here," he said.\r\nMedical staff said they were donating their own blood to keep their patients alive. One man, both legs wrapped in bandages, cried out in pain.\r\nDoctors said there were not <sup>[3]</sup></span>enough staff members to properly take care of the patient load.\r\nZawiya is west of Tripoli on a strategic supply route. Rebel control of Zawiya would represent a major advance toward putting a stranglehold on the Gadhafi-controlled seat of power.\r\nCol. Ahmed Banni, military spokesman for the opposition National Transitional Council, said Tuesday that rebels hope to enter the capital by the end of the month.		', '1/2/3/', 'qwqwqwqwqwqw'),
(11, 1, 1313667866, 0, 1, '\r\n		Zawiya, Libya (CNN) -- Rebel fighters in Libya, trying to take over a key western city, faced stiff resistance from Moammar Gadhafi''s forces on Wednesday, a rebel commander said.\r\nThe fighters hope to seize Zawiya, about 30 miles west of the capital, in an effort to advance on the capital of Tripoli in their fight to topple the Gadhafi regime that has controlled the North African country for decades.\r\n"Most of Zawiya is now in rebel hands, but there are snipers and shelling coming from the east of the city," rebel commander Col. Radwan Fheid said.\r\n"The sniper<span class="marked">s are near Zawiya hospital. People are leaving. They can''t stay because of the shelling.<sup>[1]</sup></span> These are the last days, God willing."Rebels are setting up checkpoints and field hospitals to treat the wounded, many of whom have been shot or struck by shrapnel.\r\nAt a hospital in nearby Yefren, doctors said they had treated more than 200 patients over the pa<span class="marked">st four days -- some of them rebel soldiers from any of several front lines, some of them civilians.\r\nAmong the latter was a 9-year-old girl who was in her hou<sup>[2]</sup></span>se when it was hit by a missile, sending shrapnel into her, a doctor said. "<span class="marked">Unfortunately, there is more than 90% chance that she may lose her right arm here," he said.\r\nMedical staff said they were donating their own blood to keep their patients alive. One man, both legs wrapped in bandages, cried out in pain.\r\nDoctors said there were not <sup>[3]</sup></span>enough staff members to properly take care of the patient load.\r\nZawiya is west of Tripoli on a strategic supply route. Rebel control of Zawiya would represent a major advance toward putting a stranglehold on the Gadhafi-controlled seat of power.\r\nCol. Ahmed Banni, military spokesman for the opposition National Transitional Council, said Tuesday that rebels hope to enter the capital by the end of the month.		', '1/2/3/', 'qwqwqwqwqwqw'),
(12, 1, 1313668358, 0, 1, '', '', ''),
(13, 1, 1313668401, 0, 1, '', '', ''),
(14, 1, 1313669850, 0, 1, '\r\n		Zawiya, Libya (CNN) -- Rebel fighters in Libya, trying to take over a key western city, faced stiff resistance from Moammar Gadhafi''s forces on Wednesday, a rebel commander said.\r\nThe fighters hope to seize Zawiya, about 30 miles west of the capital, in an effort to advance on the capital of Tripoli in their fight to topple the Gadhafi regime that has controlled the North African country for decades.\r\n"Most of Zawiya is now in rebel hands, but there are snipers and shelling coming from the east of the city," rebel comm<span class="marked">ander Col. Radwan Fheid said.\r\n"The snipers are near Zawiya hospital. People are leaving. They can''t stay because of the shelling. These are the last days, God willing."Rebels are setting up checkpoints and field hospitals to treat the wounded, many of whom have been shot or struck by shrapnel.\r\nAt a hospital in nearby Yefren, doctors said they had treated more than 200 patients over the past four days -- some of them reb<sup>[1]</sup></span>el soldiers from any of several front lines, some of them civilians.\r\nAmong the latter was a 9-year-old girl who was in her house when it was hit by a missile, sending shrapnel into her, a doctor said. "Unfortuna<span class="marked">tely, there is more than 90% <sup>[2]</sup></span>chance that she may lose her right arm here," he said.\r\nMedical staff said they were donating their own blood to keep their patients alive. One man, both legs wrapped in bandages, cried out in pain.\r\nDoctors said there were not enough staff members to properly take care of the patient load.\r\nZawiya is west of Tripoli on a strategic supply route. Rebel control of Zawiya would represent a major advance toward putting a stranglehold on the Gadhafi-controlled seat of power.\r\nCol. Ahmed Banni, military spokesman for the opposition National Transitional Council, said Tuesday that rebels hope to enter the capital by the end of the month.		', '3/33333/', 'qwqwqwqwqwqw'),
(15, 1, 1313669929, 0, 1, '\r\n		Zawiya, Libya (CNN) -- Rebel fighters in Libya, trying to take over a key western city, faced stiff resistance from Moammar Gadhafi''s forces on Wednesday, a rebel commander said.\r\nThe fighters hope to seize Zawiya, about 30 miles west of the capital, in an effort to advance on the capital of Tripoli in their fight to topple the Gadhafi regime that has controlled the North African country for decades.\r\n"Most of Zawiya is now in rebel hands, but there are snipers and shelling coming from the east of the city," rebel comm<span class="marked">ander Col. Radwan Fheid said.\r\n"The snipers are near Zawiya hospital. People are leaving. They can''t stay because of the shelling. These are the last days, God willing."Rebels are setting up checkpoints and field hospitals to treat the wounded, many of whom have been shot or struck by shrapnel.\r\nAt a hospital in nearby Yefren, doctors said they had treated more than 200 patients over the past four days -- some of them reb<sup>[1]</sup></span>el soldiers from any of several front lines, some of them civilians.\r\nAmong the latter was a 9-year-old girl who was in her house when it was hit by a missile, sending shrapnel into her, a doctor said. "Unfortuna<span class="marked">tely, there is more than 90% <sup>[2]</sup></span>chance that she may lose her right arm here," he said.\r\nMedical staff said they were donating their own blood to keep their patients alive. One man, both legs wrapped in bandages, cried out in pain.\r\nDoctors said there were not enough staff members to properly take care of the patient load.\r\nZawiya is west of Tripoli on a strategic supply route. Rebel control of Zawiya would represent a major advance toward putting a stranglehold on the Gadhafi-controlled seat of power.\r\nCol. Ahmed Banni, military spokesman for the opposition National Transitional Council, said Tuesday that rebels hope to enter the capital by the end of the month.		', '3/33333/', 'qwqwqwqwqwqw');

-- --------------------------------------------------------

--
-- 資料表格式： `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `ID` int(11) NOT NULL,
  `teacher` char(10) NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 列出以下資料庫的數據： `course`
--

INSERT INTO `course` (`ID`, `teacher`, `name`) VALUES
(1, 'teacher1', 'English writing'),
(2, 'teacher2', 'English  hearing'),
(3, 'teacher1', 'conversation '),
(4, 'teacher2', 'grammer');

-- --------------------------------------------------------

--
-- 資料表格式： `discuss`
--

CREATE TABLE IF NOT EXISTS `discuss` (
  `discuss_id` int(11) NOT NULL AUTO_INCREMENT,
  `editor` int(9) NOT NULL,
  `time` int(11) NOT NULL,
  `contents` text NOT NULL,
  `father_comments` int(11) NOT NULL,
  PRIMARY KEY (`discuss_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 列出以下資料庫的數據： `discuss`
--

INSERT INTO `discuss` (`discuss_id`, `editor`, `time`, `contents`, `father_comments`) VALUES
(1, 0, 2011, 'i think you say right', 1),
(2, 0, 2011, 'i don''t think you are good', 2),
(3, 0, 2011, 'maybe you need to think youself', 2),
(4, 0, 2011, 'eveything is so strange', 3),
(5, 0, 2011, 'me,too', 3),
(6, 0, 2011, 'do youself', 3),
(7, 0, 2011, 'XD', 6),
(8, 0, 2011, 'XD', 6);

-- --------------------------------------------------------

--
-- 資料表格式： `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `ID` int(11) NOT NULL,
  `number` smallint(6) NOT NULL,
  `name` char(5) NOT NULL,
  `decription` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 列出以下資料庫的數據： `level`
--

INSERT INTO `level` (`ID`, `number`, `name`, `decription`) VALUES
(1, 1, 'admin', ''),
(2, 2, 'teach', ''),
(3, 3, 'stude', '');

-- --------------------------------------------------------

--
-- 資料表格式： `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL,
  `account` char(9) NOT NULL,
  `password` char(8) NOT NULL,
  `level` int(11) NOT NULL,
  `course` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 列出以下資料庫的數據： `user`
--

INSERT INTO `user` (`ID`, `account`, `password`, `level`, `course`) VALUES
(1, 'admin1', '1234', 1, 0),
(2, 'admin2', '1234', 1, 0),
(3, 'teacher1', '1234', 2, 0),
(4, 'teacher2', '1234', 2, 0),
(101, 'F74970000', '1234', 3, 1),
(102, 'F74970001', '1234', 3, 1),
(103, 'F74970002', '1234', 3, 2),
(104, 'F74970003', '1234', 3, 2),
(105, 'F74970004', '1234', 3, 3),
(106, 'F74970005', '1234', 3, 3);
